<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\UserProfile;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * форма для редактирования
     */
    public function index()
    {
        return view('user-profile');
    }

    public function show($id)
    {
        $profile = Auth::user()->profile()->first();
        if (empty($profile)) $profile = new UserProfile();
        return $profile;
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'second_name' => 'required',
            'third_name' => 'required',
            'phone' => 'required'
        ]); 
        $user = Auth::user();
        $profile = $user->profile()->first();
        if (empty($profile)) {
            UserProfile::forceCreate([
                'user_id' => $user->id,
                'name' => request('name'),
                'second_name' => request('second_name'),
                'third_name' => request('third_name'),
                'phone' => request('phone')
            ]);
            return ['message' => 'Profile Created!'];
        } else {
            $profile->name = request('name');
            $profile->second_name = request('second_name');
            $profile->third_name = request('third_name');
            $profile->phone = request('phone');
            $profile->save();
            return ['message' => 'Profile Updated!'];
        }
        return false;
    }
}
