<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FinanceDonation;
use App\Models\Activity;
use App\Models\Place;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $activities = Activity::get();
        $count_activity = count($activities);
    
        $locations = Place::get();
        $count_place = count($locations);
    
        $donations = FinanceDonation::get();
        $count_donation = count($donations);
    
        $users = User::get();
        $count_user = count($users);
        return view('layout.frontend_admin.index',[
            'jumlah_kegiatan' => $count_activity,
            'jumlah_pendonasi' => $count_donation, 
            'jumlah_pengguna' => $count_user, 
            'jumlah_lokasi' => $count_place, 
        ]);
    }
}
