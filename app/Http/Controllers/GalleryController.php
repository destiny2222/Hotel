<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalleryRequest;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $gallery = Gallery::orderBy("id", "desc")->paginate(3);
        return view('admin.gallery.index', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        //
        if($request->createNewGallery()){
            // Alert::success('success','new gallery added');
            return redirect(route('admin.gallery.index'))->with('success','new gallery added');
        }
        // Alert::error('error','An error occurred!');
        return back()->with('error','An error occurred!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        try {
            $gallery = Gallery::findOrFail($id);
            $gallery->delete();
            // Alert::success('success', 'Delete Successfully');
            return redirect()->route('admin.gallery.index');
        } catch (\Exception $exception) {
            Log::info($exception->getMessage());
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $id)
    {
        //
        $gallery = Gallery::findOrFail($id);
        if($request->hasFile("image")){
            if (File::exists('post/'.$gallery->image)) {
                File::delete('post/'.$gallery->image);
            }
            $image = $request->file("image");
            $ext = $image->getClientOriginalExtension();
            $fileName = substr(rand(1,9000000000000).time(),2);
            $Storing = $fileName.'.'.$ext;
            $fileresize = $request->file('image')->move(public_path('post'), $Storing);
            Image::make($fileresize)->resize(300, 200)->save();
        }

        try{
            $gallery->update([
                'name'=>$request->input('name'),
                'image'=>$gallery->image 
            ]);
            return back()->with('success', 'Successful Updated');
        }catch(\Exception $exception){
            Log($exception->getMessage());
            return back()->with('error', 'Something went worry');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try {
            $gallery = Gallery::findOrFail($id);
            $gallery->delete();
            return redirect(route('admin.gallery.index'))->with('success', 'Delete Successfully');
        } catch (\Exception $exception) {
            Log::info($exception->getMessage());
            return back()->with('error', 'Something Went Worry');
        }
    }
}
