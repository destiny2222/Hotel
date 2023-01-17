<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Mail\BookingRequest;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Unicodeveloper\Paystack\Facades\Paystack;
// use Unicodeveloper\Paystack\Paystack;
// use Paystack;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class BookingController extends Controller
{
    //
     /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }        
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        dd($paymentDetails);
        // Now you have the payment details,
        //   // $payment = new Booking();
        //   $payment->email=$paymentDetails['data']['email'];
        //   $payment->room_id=$paymentDetails['data']['room_id'];
        //   $payment->check_in=$paymentDetails['data']['check_in'];
        //   $payment->check_out=$paymentDetails['data']['check_out'];
        //   $payment->adult=$paymentDetails['data']['adult'];
        //   $payment->children=$paymentDetails['data']['children'];
        //   $payment->ref_id=$paymentDetails['data']['reference'];
        
        // //   dd($payment);
        //   if ($payment->save()) {
        //     return Paystack::getAuthorizationUrl($payment)->redirectNow();
        //   }else{
        //      return view('frontend.single-room');
        //   }

        //   dd($payment);
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want  
        // 'room_id',
        // 'email',
        // 'check_in',
        // 'check_out',
        // 'adult',
        // 'children',
    }

    public function bookingform(Request  $request){
       
        $request->validate([
          'email'=>['required','string'],
          'check_in'=>['date', 'required'],
          'check_out'=>['date', 'required'],
          'phone'=>['required', 'string'],
          'name'=>['required', 'string'],
          'price'=>['required', 'string'],
          'number'=>['required', 'string'],
          'bookingid'=>['required', 'string'],
        ]);
        // dd($request->all());
        try{
            session(['room_id'=>$request->room_id]);
            session(['check_out'=>$request->check_out]);
            session(['check_in'=>$request->check_in]);
            session(['phone'=>$request->phone]);
            session(['price'=>$request->price]);
            session(['name'=>$request->name]);
            session(['email'=>$request->email]);
            session(['number'=>$request->number]);
            session(['bookingid'=>$request->bookingid]);

            $booking = Booking::create(session()->all());
            
            // dd($booking);
            if ($booking) {
              Mail::to('info@debayluxhotel.com')->send(new BookingRequest($booking));
              Alert::info('success', 'Your Booking Request Has Been Send Successful');
              return back();
            }
            Alert::error('error', 'Oops something went wrong');
            return back();
        }catch(\Exception $exception){
          Log::error($exception->getMessage());
          return back()->with('error', 'Oops something went wrong');
        }

    }
}
