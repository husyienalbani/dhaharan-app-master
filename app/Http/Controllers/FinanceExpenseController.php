<?php

namespace App\Http\Controllers;
use App\Models\FinanceExpense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FinanceExpenseController extends Controller
{
    public function index(Request $request)
    {
       $pencarian =$request -> pencarian;
        //get data
        $posts = FinanceExpense:: where('expense_name', 'LIKE', '%'.$pencarian.'%')
        
        ->latest()->paginate(3);

        // return view('layout.frontend_admin.keuangan.pemasukan.index', compact('posts'));
        return view('layout.frontend_admin.keuangan.pengeluaran.index', ['posts' => $posts]);
    }

        
    public function create()
    {
        return view('layout.frontend_admin.keuangan.pengeluaran.create');
    }
     /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'expense_name'     => 'required|min:1',
            'expense_nominal'  => '',
            'expense_date'     => 'required',
            'expense_image'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);

        //upload image
        $image = $request->file('expense_image');
        $image->storeAs('public/buktipengeluaran', $image->hashName());

        //create
        FinanceExpense::create([
            'expense_name' => $request->expense_name,
            'expense_nominal' => $request->expense_nominal,
            'expense_date' => $request->expense_date,
            'expense_image'     => $image->hashName(),
        ]);

        //redirect to index
        return redirect()->route('finance_expenses.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

 
    public function show($id)
    {
        $show = FinanceExpense::find($id);
        return view('layout.frontend_admin.keuangan.pengeluaran.show')->with('finance_expenses', $show);
    }

    public function edit(FinanceExpense $finance_expense)
    {
        return view('layout.frontend_admin.keuangan.pengeluaran.edit', compact('finance_expense'));
    }
    public function update(Request $request, FinanceExpense $finance_expense)
    {
        //validate form
        $this->validate($request, [
            'expense_name'     => 'required|min:1',
            'expense_nominal'     => '',
            'expense_date'     => 'required',
            'expense_image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);

        //check if image is uploaded
        if ($request->hasFile('expense_image')) {

            //upload new image
            $image = $request->file('expense_image');
            $image->storeAs('public/buktipengeluaran', $image->hashName());

            //delete old image
            Storage::delete('public/buktipengeluaran/'.$finance_expense->expense_image);

            //update post with new image
            $finance_expense->update([
            'expense_name' => $request->expense_name,
            'expense_nominal' => $request->expense_nominal,
            'expense_date' => $request->expense_date,
            'expense_image'     => $image->hashName(),
            ]);

        } else {

            //update post without image
            $finance_expense->update([
            'expense_name' => $request->expense_name,
            'expense_nominal' => $request->expense_nominal,
            'expense_date' => $request->expense_date
            ]);
        }

        //redirect to index
        return redirect()->route('finance_expenses.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function destroy(FinanceExpense $finance_expense)
    {
        //delete image
        Storage::delete('public/buktipengeluaran/'. $finance_expense->image_expense);

        //delete post
        $finance_expense->delete();

        //redirect to index
        return redirect()->route('finance_expenses.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}
