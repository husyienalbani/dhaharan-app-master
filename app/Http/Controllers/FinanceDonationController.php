<?php

namespace App\Http\Controllers;

use App\Models\FinanceDonation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FinanceDonationController extends Controller
{
    public function index(Request $request)
    {
       $pencarian =$request -> pencarian;
        //get data
        $posts = FinanceDonation:: where('donation_name', 'LIKE', '%'.$pencarian.'%')
        
        ->latest()->paginate(3);

        // return view('layout.frontend_admin.keuangan.pemasukan.index', compact('posts'));
        return view('layout.frontend_admin.keuangan.pemasukan.index', ['posts' => $posts]);
    }

        
    public function create()
    {
        return view('layout.frontend_admin.keuangan.pemasukan.create');
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
            'donation_name'     => 'required|min:1',
            'donation_category' => 'required',
            'donation_nominal'  => '',
            'donation_information'  => '',
            'donation_date'     => 'required',
            'donation_image'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);

        //upload image
        $image = $request->file('donation_image');
        $image->storeAs('public/buktidonasi', $image->hashName());

        //create
        FinanceDonation::create([
            'donation_name' => $request->donation_name,
            'donation_nominal' => $request->donation_nominal,
            'donation_category' => $request->donation_category,
            'donation_information' => $request->donation_information,
            'donation_date' => $request->donation_date,
            'donation_image'     => $image->hashName(),
        ]);

        //redirect to index
        return redirect()->route('finance_donations.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

 
    public function show($id)
    {
        $show = FinanceDonation::find($id);
        return view('layout.frontend_admin.keuangan.pemasukan.show')->with('finance_donations', $show);
    }
     /**
     * edit
     *
     * @param  mixed $post
     * @return void
     */

    public function edit(FinanceDonation $finance_donation)
    {
        return view('layout.frontend_admin.keuangan.pemasukan.edit', compact('finance_donation'));
    }
 
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $post
     * @return void
     */
    
    public function update(Request $request, FinanceDonation $finance_donation)
    {
        //validate form
        $this->validate($request, [
            'donation_name'     => 'required|min:1',
            'donation_nominal'     => '',
            'donation_category'     => 'required|min:1',
            'donation_date'     => 'required',
            'donation_image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);

        //check if image is uploaded
        if ($request->hasFile('donation_image')) {

            //upload new image
            $image = $request->file('donation_image');
            $image->storeAs('public/buktidonasi', $image->hashName());

            //delete old image
            Storage::delete('public/buktidonasi/'.$finance_donation->donation_image);

            //update post with new image
            $finance_donation->update([
            'donation_name' => $request->donation_name,
            'donation_nominal' => $request->donation_nominal,
            'donation_category' => $request->donation_category,
            'donation_information' => $request->donation_information,
            'donation_date' => $request->donation_date,
            'donation_image'     => $image->hashName(),
            ]);

        } else {

            //update post without image
            $finance_donation->update([
            'donation_name' => $request->donation_name,
            'donation_nominal' => $request->donation_nominal,
            'donation_category' => $request->donation_category,
            'donation_information' => $request->donation_information,
            'donation_date' => $request->donation_date
            ]);
        }

        //redirect to index
        return redirect()->route('finance_donations.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
     /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy(FinanceDonation $finance_donation)
    {
        //delete image
        Storage::delete('public/buktidonasi/'. $finance_donation->image_donation);

        //delete post
        $finance_donation->delete();

        //redirect to index
        return redirect()->route('finance_donations.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}