<?php

namespace App\Http\Controllers;

use App\Mail\Contact as MailContact;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Post;
use App\Models\Room;
use App\Models\Service;
use App\Models\Tag;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    //
    public function home(){
        $room = Room::orderBy('id', 'desc')->get();
        $new = Post::orderBy('id', 'desc')->paginate(2);
        $testimony = Testimonial::orderBy('id', 'desc')->get();
        $service = Service::orderBy('id', 'desc')->get();
        return view('frontend.index', compact('room', 'new', 'testimony','service'));
    }
    public function about(){
        return view('frontend.about');
    }

    public function galleries(){
        $gallery = Gallery::orderBy('id', 'desc')->paginate();
        return view('frontend.gallery', compact('gallery'));
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function contactform(Request $request){
        $request->validate([
            'firstname'=>['required', 'string'],
            'lastname'=>['required', 'string'],
            'email'=>['required', 'string', 'email'],
            'phone'=>['required', 'string'],
            'subject'=>['required', 'string'],
            'message'=>['required', 'string'],
        ]);
        
        try{
            session(['firstname'=>$request->firstname]);
            session(['lastname'=>$request->lastname]);
            session(['check_in'=>$request->check_in]);
            session(['phone'=>$request->phone]);
            session(['subject'=>$request->subject]);
            session(['email'=>$request->email]);
            session(['message'=>$request->message]);

            $contact = Contact::create(session()->all());
            
            // dd($contact);
            if ($contact) {
              Mail::to('info@debayluxhotel.com')->send(new MailContact($contact));
            //   return view()->with('success', 'Successfully');
             Alert::info('success', 'Your Message Have Been Send Successful');
             return back();
            }
            Alert::error('error', 'Oops something went wrong');
            return back();
        }catch(\Exception $exception){
          Log::error($exception->getMessage());
          return back()->with('error', 'Oops something went wrong');
        }
    }

     public function room()
    {
        $room = Room::orderBy('id', 'desc')->get();
        return view('frontend.rooms', compact('room'));
    }

     
    public function roomdetails(Room $room){
        // dd($room->discription);
        $roomlist = Room::orderBy('id', 'desc')->paginate(2);
        
        return view('frontend.single-room', compact('room', 'roomlist'));
    }

    public function blog(){
        $new = Post::orderBy('id', 'desc')->paginate(2);
        return view('frontend.news', compact('new'));
    }
    public function blogdetails(Post $post){
        // $new = Post::orderBy('id', 'desc')->paginate(2);
        $blogtag = Tag::latest('id')->get();
        $recentblog = Post::latest('id')->get();
        return view('frontend.single-post', compact('post', 'recentblog','blogtag'));
    }
}
