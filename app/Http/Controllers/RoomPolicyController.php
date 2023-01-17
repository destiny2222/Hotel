<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomPolicy;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RoomPolicyController extends Controller
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
        $policy = RoomPolicy::orderBy('id', 'desc')->get();
        return view('admin.policy.index', compact('policy', 'room'));
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
        return view('admin.policy.create', compact('room'));
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
            RoomPolicy::create([
                'information'=>$request->input('information'),
                'room_id'=>$userid,
            ]);
            return redirect(route('admin.policy.index'))->with('success', 'Successfully');
        }catch(Exception $exception){
            Log::error($exception->getMessage());
            return back()->with('error', 'Oops something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RoomPolicy  $roomPolicy
     * @return \Illuminate\Http\Response
     */
    public function show(RoomPolicy $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RoomPolicy  $roomPolicy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        try{
            $policy = RoomPolicy::findOrFail($id);
            return view('admin.policy.edit', compact('policy'));
        }catch(\Exception $exception){
            Log::error($exception->getMessage());
            return back()->with('error', 'Oops something went wrong');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RoomPolicy  $roomPolicy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        try{
            $policy = RoomPolicy::findOrFail($id);
            $userid = $request->input('room_id');
            $policy->update([
                'information'=>$request->input('information'),
                'room_id'=>$userid,
            ]);
            return redirect(route('admin.policy.index'))->with('success', 'Updated Successful');
        }catch(\Exception $exception){
            Log::error($exception->getMessage());
            return back()->with('error', 'Oops something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RoomPolicy  $roomPolicy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try{
            $policy = RoomPolicy::findOrFail($id);
            $policy->delete();
            return redirect()->route('admin.policy.index')->with('success', 'Delete Successfully');
        }catch(\Exception $exception){
            Log::error($exception->getMessage());
            return back()->with('error', 'Oops something went wrong');
        }
    }
}
