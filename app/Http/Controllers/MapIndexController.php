<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Place;
use Illuminate\Http\Request;

class MapIndexController extends Controller
{

    public function map()
    {
        return view('layout/frontend_user/indexmap');
    }
    public function index()
    {
        
        /**
         * $categorySpot dan $spots sama-sama memanggil tabel spot
         * dengan chain method with ke getCategory agar relasi tersebut bisa digunakan
         * pada file view welcome.blade
         * 
         * $categories akan digunakan pada header di file views/layouts/frontend
         */
        $categoryPlace = Place::get();
        $places = Place::get();
        //$spotsSearch = Spot::with('getCategory')->get();
        $categories = Category::all();
        //return dd($spots);

        return view('layout/frontend_user/indexmap', [
            'places' => $places,
            'categoryPlace' => $categoryPlace,
            'categories' => $categories,
            //'spotsSearch' => $spotsSearch
        ]);
    }
    public function getCategory($slug)
    {
        /**
         * Menampilkan data spot beradasarkan kategori spot yang dipilih
         */
        $categories = Category::all();
        $category = Category::where('id', $slug)->orWhere('slug', $slug)->first();
        
        // pada $spot di bawah kita memanggil relasi spot() dari model category jadi dengan format
        // seperti di bawah kita bisa langsung mendapatkan hasil dari spot yang mempunyai kategori yang kita pilih
        $place = $category->places()->get();
        return view('layout/frontend_user/peta/categorymap', [
            'categories' => $categories,
            'place' => $place,
            'category' => $category
        ]);
    }

    public function detil(Place $category_id)
    {
        $imagedetils = Place::find($category_id);
        return view('layout.frontend_user.peta.detillokasi',compact('imagedetils'));
    }
    public function detail(string $id){
        $categories = Category::all();
        $places = Place::find($id);
        return view('layout.frontend_user.peta.detillokasi', [
            'places' => $places,
            'categories' => $categories
        ]);
  
    }

    public function getRoute($id)
    {
        /**
         * Menampilkan rute spot berdasarkan lokasi spot yang dipilih
         */
        $categories = Category::all();
        $places = Place::where('id', $id)->first();
        return view('layout.frontend_user.peta.cekrute', [
            'places' => $places,
            'categories' => $categories
        ]);
    }
}
