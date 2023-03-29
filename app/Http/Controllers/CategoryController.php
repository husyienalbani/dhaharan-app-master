<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $pencarian =$request -> pencarian;
        //get posts
        $category = Category:: where('name', 'LIKE', '%'.$pencarian.'%')->latest()->paginate(3);
   

        // return view('layout.frontend_admin.keuangan.pemasukan.index', compact('posts'));
        return view('layout.frontend_admin.peta.kategori.index', ['category' => $category]);
    }
    public function create()
    {
        return view('layout.frontend_admin.peta.kategori.create');
    }
     /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        /**
         * Storing data ke database
         */
        $category = new Category();
        $category->name = $request->input('name');
        $category->slug = Str::slug($request->name, '-');
        $category->save();
        /**
         * return ke halaman index kategori jika proses storing data berhasil akan menampilkan pesan berhasil
         * simpan data. 
         */
        if ($category) {
            return redirect()->route('categories.index')->with('success', 'Data berhasil disimpan');
        } else {
            return redirect()->route('categories.index')->with('error', 'Data gagal disimpan');
        }
    }
    public function edit(Category $category)
    {
        return view('layout.frontend_admin.peta.kategori.edit', compact('category'));
    }
    public function update(Request $request, Category $category)
    {
        /**
         * Lakukan validasi terlebih dahulu sebelum melakukan update 
         */
        $this->validate($request, [
            'name' => 'required'
        ]);


        /**
         * Proses update data jika data ada lakukan proses update berdasarkan id data yang dipilih
         */
        $category = Category::findOrFail($category->id);
        $category->name = $request->input('name');
        $category->slug = Str::slug($request->name, '-');
        $category->update();

        /**
         * jika proses update berhasil kembali ke halaman index kategori
         */
        if ($category) {
            return redirect()->route('categories.index')->with('success', 'Data berhasil diupdate');
        } else {
            return redirect()->route('categories.index')->with('error', 'Data gagal diupdate');
        }
    }
    public function destroy(Category $category)
    {
        //delete post
        $category->delete();

        //redirect to index
        return redirect()->route('categories.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}
