<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserProfile;
class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        return view('platform.pages.userprofile.edit');
    }

    public function password(Request $request)
    {
        $data = $request->all();
        $validatedData = $request->validate([
            'current_password' => 'required|string|min:6',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::find(\Auth::user()->id);

        $currentStoredPassword = $user->password;
        $currentPostPassword   = $data['current_password'];

        if (\Hash::check($currentPostPassword, $currentStoredPassword))
        {
            $user->password = \Hash::make($data['password']);
            $user->save();

            return redirect()->route('platform.edit.profile')->with('success_password', 'Your password updated successfully.');
        }else{
            return back()->with('incorrect_password', 'Your current password is incorrect.');
        }

    }

    public function information(Request $request){
        $data = $request->all();
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'website'   => 'required'
        ]);

        $profile = \Auth::user()->profile;
        $profile->first_name = $data['first_name'];
        $profile->last_name = $data['last_name'];
        $profile->website = $data['website'];
        $profile->save();
        return redirect()->route('platform.edit.profile')->with('success_information', 'Your information updated successfully.');
    }

    public function avatar(Request $request){
        $filename = $request->file('file')->getClientOriginalName();
        $fileSize = $request->file('file')->getSize();
        $relativePath = '/uploads/avatars';
        $directory    = public_path() . $relativePath;
        if($request->file('file')->getClientOriginalExtension() == '') {
            $uploadFileName = time().'.png';
        }else{
            $uploadFileName = time().'.'.$request->file('file')->getClientOriginalExtension();
        }
        $request->file('file')->move($directory, $uploadFileName);
        $profile = \Auth::user()->profile;
        if($profile->avatar != '') {
            \File::delete(public_path($profile->avatar));
        }
        $profile->avatar = $relativePath.'/'.$uploadFileName;
        $profile->save();
        $urlpath = asset($profile->avatar);
        $data = getimagesize($urlpath);
        if($data[0] <=400 && $data[1] <= 400){
            $avatar_crop = 0;
        }else {
            $avatar_crop = 1;
        }
        return response()->json([
            'result' => 'success',
            'url' =>$urlpath,
            'avatar_crop' => $avatar_crop
        ]);
    }

    public function avatar_crop() {
        $profile = \Auth::user()->profile;
        return view('platform.pages.userprofile.avatarCrop')->with('profile', $profile);
    }
}
