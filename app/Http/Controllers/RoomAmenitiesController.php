<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomAmenities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RoomAmenitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $room = Room::select('id', 'name')->get();
        $amenties = RoomAmenities::orderBy('id', 'desc')->get();
        return view('admin.amenties.index', compact('amenties', 'room'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $room = Room::select('id', 'name')->get();
        return view('admin.amenties.create', compact('room'));
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
            'information'=>['required', 'string'],
        ]);
        try{
            $userid = $request->input('room_id');
            RoomAmenities::create([
                'information'=>$request->input('information'),
                'room_id'=>$userid,
            ]);
            return redirect(route('admin.amenitie.index'))->with('success', 'Successfully');
        }catch(\Exception $exception){
            Log::error($exception->getMessage());
            return back()->with('error', 'Oops something went wrong');
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RoomAmenities  $roomAmenities
     * @return \Illuminate\Http\Response
     */
    public function show(RoomAmenities $roomAmenities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RoomAmenities  $roomAmenities
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        try{
            $amenties = RoomAmenities::findOrFail($id);
            return view('admin.amenties.edit', compact('amenties'));
        }catch(\Exception $exception){
            Log::error($exception->getMessage());
            return back()->with('error', 'Oops something went wrong');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RoomAmenities  $roomAmenities
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        try{
            $amenties = RoomAmenities::findOrFail($id);
            $userid = $request->input('room_id');
            $amenties->update([
                'information'=>$request->input('information'),
                'room_id'=>$userid,
            ]);
            return redirect(route('admin.amenitie.index'))->with('success', 'Updated Successful');
        }catch(\Exception $exception){
            Log::error($exception->getMessage());
            return back()->with('error', 'Oops something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RoomAmenities  $roomAmenities
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try{
            $amenties = RoomAmenities::findOrFail($id);
            $amenties->delete();
            return redirect()->route('admin.amenitie.index')->with('success', 'Delete Successfully');
        }catch(\Exception $exception){
            Log::error($exception->getMessage());
            return back()->with('error', 'Oops something went wrong');
        }
    }
}
