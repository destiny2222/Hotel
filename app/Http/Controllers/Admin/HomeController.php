<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __construct()
        {
            $this->middleware('admin');
        }

    public function home(){
        $booking = Booking::orderBy('id', 'desc')->paginate(3);
        return view('admin.index', compact('booking'));
    }

    // public function profile(){
    //     $admin = Admin::where('id', 1)->first();
    //     // dd($admin);
    //     return view('admin.profile', compact('admin'));
    // }

    // public function update(Request $request, $id){
    //     try{
    //         // $admin = Admin::where('id', $id)->first();
    //         $admin = Admin::findOrFail($id);
    //         $admin->update([
    //             // 'image'=>$image_file ?? $users->image,
    //             'name'=> $request->name,
    //             'email'=> $request->email,
    //             'phone'=> $request->phone,
    //         ]);
    //         // dd($admin);
    //         Alert::success('Success', 'Updated Successfull');
    //         return back();
    //     }catch(\Exception $exception){
    //         Log::error($exception->getMessage());
    //         Alert::error('Error', 'Something went Wrong');
    //         return back();
    //     }
    // }

    // public function validatepassword(Request  $request){
    //     $this->validate($request, [
    //         'current_password'=>['required', 'string'],
    //         'new_password'=>['required', 'string'],
    //     ]);
    //     # check for current password match
    //     $adminpassword = Admin::where('id', 1)->first();
    //     if (password_verify($request->current_password, $adminpassword->password)) {
    //         # if true
    //         if ($request->new_password == $request->Confirm_password) {
    //             # send otp to user email and the password in datebase
    //             session(['new_password'=> $request->new_password]);
    //             $adminpassword->update([
    //                 'password'=>Hash::make(session('new_password'))
    //             ]);
    //             // dd($adminpassword);
    //             Alert::success('success', 'Password Change Successful');
    //             return redirect(route('admin.profile-page'));
    //         } else{
    //             Alert::error('error', 'Error! Password Mismatch');
    //             return back();
    //         } 
    //     }else{
    //         Alert::error('error',  'Error! The password does not match the current password?');
    //         return back();
    //     }
    // }
}
