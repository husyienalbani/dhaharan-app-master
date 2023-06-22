<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $pencarian =$request -> pencarian;
        //get data
        $posts = User::where('name', 'LIKE', '%'.$pencarian.'%')
        ->latest()->paginate(3);

        // return view('layout.frontend_admin.keuangan.pemasukan.index', compact('posts'));
        return view('layout.frontend_admin.administrator.user.index', ['posts' => $posts]);
    }
    

    public function destroy(User $user)
    {
        //delete post
        $user->delete();

        //redirect to index
        return redirect()->route('users.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
