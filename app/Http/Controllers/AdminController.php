<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message'=>'Logout Successful',
            'alert-type'=>'info',
        );

        return redirect('/login')->with($notification);
    }//End method

    public function profile(){
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile_view', compact("adminData"));

    }//End method

    public function editProfile(){
        $id = Auth::user()->id;
        $editAdminData = User::find($id);
        return view('admin.admin_profile_edit', compact("editAdminData"));
    }//End Method

    public function storeProfile(Request $request){
        $id = Auth::user()->id;
        $storeProfile = User::find($id);
        $storeProfile->name = $request->name;
        $storeProfile->username = $request->username;
        $storeProfile->email = $request->email;

        if ($request->file('profile_image')){
            $file = $request->file('profile_image');
            @unlink(public_path('upload/admin_images'.$storeProfile->profile_image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $storeProfile['profile_image'] = $filename;
        }

        $storeProfile->save();

        $notification = array(
            'message'=>'Admin Profile Updated Successfully',
            'alert-type'=>'info',
        );

        return redirect()->route('admin.profile')->with($notification);
    }//End Method

    public function changePassword(){
        return view('admin.admin_change_password');
    }//End Method

    public function updatePassword(Request $request){
        $id = Auth::user()->id;
        $updatePassworddata = User::find($id);
    }
}
