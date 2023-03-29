<?php

namespace App\Http\Controllers;
use App\Models\FinanceDonation;
use App\Models\Activity;
use App\Models\ActivityImage;
use App\Models\FinanceExpense;
use App\Models\FinanceRecapitulation;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = FinanceDonation::latest()->paginate(5);
        $posts2 = FinanceExpense::latest()->paginate(5);
        $posts3 = FinanceRecapitulation::latest()->paginate(5);
        // $activities = App\Models\Activity::where('id_category', 1)->get();

        // $cover_sosials = App\Models\Activity::get();
        $cover_sosials = Activity::where('category_id', 1)->get();
        $cover_educations = Activity::where('category_id', 2)->get();
        $cover_tutorials = Activity::where('category_id', 3)->get();
        

        return view('layout.frontend_user.master', [
            'posts' => $posts,
            'posts2' => $posts2,
            'posts3' => $posts3,
            'cover_sosials' => $cover_sosials,
            'cover_educations' => $cover_educations,
            'cover_tutorials' => $cover_tutorials,
        ]);
        
        
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
