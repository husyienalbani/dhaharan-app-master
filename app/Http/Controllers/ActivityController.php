<?php

namespace App\Http\Controllers;
use App\Models\Activity;
use App\Models\ActivityImage;
use App\Models\CategoryActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $pencarian =$request -> pencarian;
           //get posts
           $posts = Activity:: where('name', 'LIKE', '%'.$pencarian.'%')
        
        ->latest()->paginate(3);
        
        // $posts = Activity::latest()->paginate(3);

        //render view with posts
        return view('layout.frontend_admin.kegiatan.index', compact('posts'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = CategoryActivity::get();
        return view('layout.frontend_admin.kegiatan.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->hasFile("cover")){
            $file=$request->file("cover");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("cover/"),$imageName);

            $post =new Activity([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'date' => $request->date,
                'address' => $request->address,
                'cost' => $request->cost,
                'activityinfo' => $request->activityinfo,
                'cover'     => $imageName,
            ]);
           $post->save();
        }

        if($request->hasFile("activity_images")){
            $files=$request->file("activity_images");
            foreach($files as $file){
                $imageName=time().'_'.$file->getClientOriginalName();
                $request['activity_id']=$post->id;
                $request['image']=$imageName;
                $file->move(\public_path("/images"),$imageName);
                ActivityImage::create($request->all());

            }
        }
        return redirect()->route('activities.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
   
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Activity::find($id);
        return view('layout.frontend_admin.kegiatan.show',compact('post'));
    }

    public function edit(Activity $activity)
    {
        $categories = CategoryActivity::get();
        return view('layout.frontend_admin.kegiatan.edit', [
            'activity' => $activity,
            'categories' => $categories,
        ]);
    }

    public function update(Request $request,$id)
    {
     $post=Activity::findOrFail($id);
     if($request->hasFile("cover")){
         if (File::exists("cover/".$post->cover)) {
             File::delete("cover/".$post->cover);
         }
         $file=$request->file("cover");
         $post->cover=time()."_".$file->getClientOriginalName();
         $file->move(\public_path("/cover"),$post->cover);
         $request['cover']=$post->cover;
     }

        $post->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'date' => $request->date,
            'address' => $request->address,
            'cost' => $request->cost,
            'activityinfo' => $request->activityinfo,
            'cover'     => $post->cover,
        ]);

        if($request->hasFile("activity_images")){
            $files=$request->file("activity_images");
            foreach($files as $file){
                $imageName=time().'_'.$file->getClientOriginalName();
                $request["activity_id"]=$id;
                $request["image"]=$imageName;
                $file->move(\public_path("images"),$imageName);
                ActivityImage::create($request->all());

            }
        }

        return redirect()->route('activities.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function deleteimage($id){
        $images=ActivityImage::findOrFail($id);
        if (File::exists("images/".$images->image)) {
           File::delete("images/".$images->image);
       }

       ActivityImage::find($id)->delete();
       return back();
   }
   public function deletecover($id){
         $cover=Activity::findOrFail($id)->cover;
         if (File::exists("cover/".$cover)) {
         File::delete("cover/".$cover);
         }
   return back();
    }

    public function destroy($id)
    {
         $posts=Activity::findOrFail($id);

         if (File::exists("cover/".$posts->cover)) {
             File::delete("cover/".$posts->cover);
         }
         $images=ActivityImage::where("activity_id",$posts->id)->get();
         foreach($images as $image){
         if (File::exists("images/".$image->image)) {
            File::delete("images/".$image->image);
        }
         }
         $posts->delete();
         return back();

    }


    /*
    fungsi untuk Detail
    */ 
    public function detil(Activity $category_id)
    {
        $imagedetils = Activity::find($category_id);
        return view('layout.frontend_user.detilkegiatan',compact('imagedetils'));
    }
    public function detail(string $id){
        $activities = Activity::find($id);
        return view('layout.frontend_user.detilkegiatan', [
            'activities' => $activities,
        ]);
  
    }
}