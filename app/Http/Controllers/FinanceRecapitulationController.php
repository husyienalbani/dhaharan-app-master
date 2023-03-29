<?php

namespace App\Http\Controllers;

use App\Models\FinanceRecapitulation;
use Illuminate\Http\Request;

class FinanceRecapitulationController extends Controller
{
    public function index(Request $request)
    {
    
        //get data
        $posts = FinanceRecapitulation::latest()->paginate(3);

        // return view('layout.frontend_admin.keuangan.pemasukan.index', compact('posts'));
        return view('layout.frontend_admin.keuangan.saldo.index', ['posts' => $posts]);
    }

        
    public function create()
    {
        return view('layout.frontend_admin.keuangan.saldo.create');
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
            'date'     => 'required',
            'income'     => '',
            'expense'     => '',
            'saldo'     => '',
           
        ]);

        //create
        FinanceRecapitulation::create([
            'date' => $request->date,
            'income' => $request->income,
            'expense' => $request->expense,
            'saldo' => $request->saldo,
        ]);

        //redirect to index
        return redirect()->route('finance_recapitulations.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(FinanceRecapitulation $finance_recapitulation)
    {
        return view('layout.frontend_admin.keuangan.saldo.edit', compact('finance_recapitulation'));
    }
 
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $post
     * @return void
     */
    
    public function update(Request $request, FinanceRecapitulation $finance_recapitulation)
    {
        //validate form
        $this->validate($request, [
            'date'     => 'required',
            'income'     => '',
            'expense'     => '',
            'saldo'     => '',
        ]);
            //update post without image
            $finance_recapitulation->update([
                'date' => $request->date,
                'income' => $request->income,
                'expense' => $request->expense,
                'saldo' => $request->saldo,
            ]);

        //redirect to index
        return redirect()->route('finance_recapitulations.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function destroy(FinanceRecapitulation $finance_recapitulation)
    {
        //delete post
        $finance_recapitulation->delete();

        //redirect to index
        return redirect()->route('finance_recapitulations.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}
