<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Place;
use App\Models\ImagePlace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PlaceController extends Controller
{
    public function index(Request $request)
    {
        $pencarian =$request -> pencarian;
           //get posts
           $posts = Place::where('name', 'LIKE', '%'.$pencarian.'%')->latest()->paginate(3);


        //render view with posts
        return view('layout.frontend_admin.peta.lokasi.index', 
        [
            'posts' => $posts,
        ]);
        
    }
    public function create()
    {
        $category = Category::all();
        return view('layout.frontend_admin.peta.lokasi.create', ['category' => $category]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile("cover")){
            $file=$request->file("cover");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("coverplace/"),$imageName);

            $post =new Place([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'location' => $request->location,
                'PlaceInfo' => $request->PlaceInfo,
                'cover'     => $imageName,
                'user_id' => auth()->user()->id,
                'is_approved' => false,
            ]);

            $post->save();

        }

        if($request->hasFile("image_places")){
            $files=$request->file("image_places");
            foreach($files as $file){
                $imageName=time().'_'.$file->getClientOriginalName();
                $request['place_id']=$post->id;
                $request['image']=$imageName;
                $file->move(\public_path("/imageplace"),$imageName);
                ImagePlace::create($request->all());

            }
        }
        return redirect()->route('places.index')->with(['success' => 'Data Berhasil Disimpan & Sedang Menunggu Persetujuan!']);
    }
       
    public function show(string $id)
    {
        $post = Place::find($id);
        return view('layout.frontend_admin.peta.lokasi.show',compact('post'));
    }

    public function edit(Place $place)
    {
        $category = Category::get();
        return view('layout.frontend_admin.peta.lokasi.edit', [
            'place' => $place,
            'category' => $category,
        ]);
    }

    public function update(Request $request,$id)
    {
     $post=Place::findOrFail($id);
     if($request->hasFile("cover")){
         if (File::exists("coverplace/".$post->cover)) {
             File::delete("coverplace/".$post->cover);
         }
         $file=$request->file("cover");
         $post->cover=time()."_".$file->getClientOriginalName();
         $file->move(\public_path("/coverplace"),$post->cover);
         $request['cover']=$post->cover;
     }

        $post->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'location' => $request->location,
            'PlaceInfo' => $request->PlaceInfo,
            'cover'     => $post->cover,
        ]);

        if($request->hasFile("image_places")){
            $files=$request->file("image_places");
            foreach($files as $file){
                $imageName=time().'_'.$file->getClientOriginalName();
                $request["place_id"]=$id;
                $request["image"]=$imageName;
                $file->move(\public_path("imageplace"),$imageName);
               ImagePlace::create($request->all());

            }
        }

        return redirect()->route('places.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function deleteimage($id){
        $images=ImagePlace::findOrFail($id);
        if (File::exists("imageplace/".$images->image)) {
           File::delete("imageplace/".$images->image);
       }

       ImagePlace::find($id)->delete();
       return back();
   }
   public function deletecover($id){
         $cover=Place::findOrFail($id)->cover;
         if (File::exists("coverplace/".$cover)) {
         File::delete("coverplace/".$cover);
         }
   return back();
    }

    public function destroy($id)
    {
        $posts=Place::findOrFail($id);

        if (File::exists("coverplace/".$posts->cover)) {
            File::delete("coverplace/".$posts->cover);
        }
        $images=ImagePlace::where("place_id",$posts->id)->get();
        foreach($images as $image){
        if (File::exists("imageplace/".$image->image)) {
        File::delete("imageplace/".$image->image);
    }
        }
        $posts->delete();
        return back();

    }

    public function approve($id)
{
    $place = Place::find($id);
    $place->is_approved = true;
    $place->save();

    return redirect('/places');
}

}
