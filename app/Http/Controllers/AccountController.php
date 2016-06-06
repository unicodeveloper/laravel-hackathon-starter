<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Hash;
use Cloudder;
use App\Http\Requests;

class AccountController extends Controller
{
    protected $user;
    protected $id;

    public function __construct()
    {
        $this->user = Auth::user();
        $this->id = $this->user->id;
    }

    public function getAccountPage()
    {
        return view('account.dashboard')->withAccount($this->user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'email'     => 'required|email|min:3|unique:users,email,'. $this->id,
            'fullname'  => 'required|min:3'
        ]);

        $values = $request->all();
        $this->user->fill($values)->save();

        return redirect()->back()->with('info','Your Profile has been updated successfully');
    }

    public function updateAvatar(Request $request)
    {
        $this->validate($request, [
            'file_name'     => 'required|mimes:jpeg,bmp,png|between:1,7000',
        ]);

        $filename  = $request->file('file_name')->getRealPath();

        Cloudder::upload($filename, null);
        list($width, $height) = getimagesize($filename);

        $fileUrl = Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height" => $height]);

        $this->user->update(['avatar' => $fileUrl]);

        return redirect()->back()->with('info', 'Your Avatar has been updated Successfully');
    }

    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:6|confirmed',
        ]);

        $this->user->password = Hash::make($request->password);
        $this->user->save();

        return redirect()->back()->with('info', 'Password successfully updated');
    }

    public function redirectToConfirmDeletePage()
    {
        return view('account.confirm');
    }

    public function dontDeleteAccount()
    {
        return redirect('/account');
    }

    public function deleteAccount(Request $request)
    {
        $this->user->delete();

        $request->session()->flush();

        return redirect("/");
    }
}
