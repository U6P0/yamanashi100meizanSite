<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Socialite;

use App\Models\User;
use App\Models\SocialUser;
use App\Models\Mountain;
use App\Models\Climedmountain;

use Auth;
use DB;

class ProfileController extends Controller
{
    //
    public function index() {

    /*
        $mountains = Mountain::all();   // Eloquent"Member"で全データ取得
        return view('mountain', [
            "mountains" => $mountains
        ]);
        */
        return view('profile');
        
    }
    
}
