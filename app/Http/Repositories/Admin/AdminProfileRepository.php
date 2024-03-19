<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AdminKidKinderInterface;
use App\Http\Interfaces\Admin\AdminProfileInterface;
use App\Http\Traits\ImagesTrait;
use App\Models\kidkinder;
use App\Models\social;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminProfileRepository implements AdminProfileInterface
{

    public function getProfile()
    {
        $user = Auth::user();
        return view('admin.dashboard.profile.profile', compact('user'));
    }

    public function updateProfile($request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'oldPassword' => 'required',
        ]);

        if($validation->fails()){
            session()->flash('errors', $validation->errors());
            return redirect()->back();
        }elseif ($request->oldPassword != Auth::user()->password){
            session()->flash('error', "password invalid");
            return redirect()->back();
        }

        $profile = User::find($request->id);

        $profile->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => (isset( $request->password)) ?  hash($request->password) : hash($request->oldPassword)
        ]);

        session()->flash('done', 'Profile Updated Successfully!');

        return redirect(route('admin.profile.profile'));
    }

    public function deleteProfile()
    {
        $social =social::find($id);
        $social->delete();
        session()->flash('done', 'Social Link deleted Successfully!');
        return redirect()->back();
    }

}
