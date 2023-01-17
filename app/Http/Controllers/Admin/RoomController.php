<?php

namespace App\Http\Controllers\Admin;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoomRequest;
use App\Models\Room;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

use RealRashid\SweetAlert\Facades\Alert;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $room = Room::orderBy('id', 'desc')->get();
        return view('admin.room.index', compact('room'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('admin.room.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'name'=>['required', 'string'],
            'number'=>['required','string'],
            'price'=>['required','numeric'],
            'cover_image'=>['nullable','image', 'mimes:jpeg,png,jpg,gif,svg'],
            'images.*'=>['required','image', 'mimes:jpeg,png,jpg,gif,svg'],
            'discription'=>['required', 'string'],
            'status'=>['required', 'string'],
        ]);
        // dd($request->all());
            if($request->hasFile("cover_image")){
                $image = $request->file("cover_image");
                $ext = $image->getClientOriginalExtension();
                $fileName = substr(rand(1,9000000000000).time(),2);
                $Storing = $fileName.'.'.$ext;
                $fileresize = $request->file('cover_image')->move(public_path('cover'), $Storing);
                Image::make($fileresize)->resize(300, 200)->save();
            }



            
        try{
              Room::create([
                    'number'=>$request->number,
                    'price'=>$request->price,
                    'cover_image'=>$Storing,
                    'images'=>upload_multiple_images('rooms/slider'),
                    'discription'=>$request->discription,
                    'status'=>$request->status,
                    'name'=>$request->name,
                    'slug'=>Str::slug($request->name),
                ]);
            return redirect(route('admin.rooms.index'))->with('success', 'Successful');
       }catch(\Exception $exception){
         Log::error($exception->getMessage());
        //  Alert::error('error', 'An Error Occured');
        //  return back();
         return back()->with('error', 'An Error Occured');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        try{
          $room = Room::findOrFail($id);
          return view('admin.room.edit', compact('room'));
        }catch(\Exception $exception){
            Log::error($exception->getMessage());
            return back()->with('error', 'An Error Occured');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $room = Room::findOrFail($id);

        if($request->hasFile("cover_image")){
            if (File::exists('cover/'.$room->cover_image)) {
                File::delete('cover/'.$room->cover_image);
            }
            $image = $request->file("cover_image");
            $ext = $image->getClientOriginalExtension();
            $fileName = substr(rand(1,9000000000000).time(),2);
            $Storing = $fileName.'.'.$ext;
            $fileresize = $request->file('cover_image')->move(public_path('cover'), $Storing);
            Image::make($fileresize)->resize(300, 200)->save();
        }
    
        

        try{
            
            $room->update([
                'number'=>$request->input('number'),
                'price'=>$request->input('price'),
                'cover_image'=>$room->cover_image,
                // 'images'=>update_image('rooms/slider',$room->images,'images'),
                'discription'=>$request->input('discription'),
                'status'=>$request->input('status'),
                'slug'=>Str::slug($request->input('name')),
                'name'=>$request->input('name'),
            ]);
            return back()->with('success', 'Updated Successfull');
        }catch(\Exception $exception){
            Log::error($exception->getMessage());
            return back()->with('error', 'An Error Occured');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        //
        try{
            // $room = Room::findOrFail($room);
            $room->delete();
            return redirect(route('admin.rooms.index'))->with('successs',  'Succesful');
        }catch(\Exception $exception){
            Log::error($exception->getMessage());
            return back()->with('error', 'An Error Occured');
        }
    }
}
