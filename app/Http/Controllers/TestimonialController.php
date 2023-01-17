<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use  Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $testimonial = Testimonial::orderBy('id', 'desc')->get();
        // dd($testimonial);
        return view('admin.testimony.index', compact('testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.testimony.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialRequest $request)
    {
        //
        if ($request->createNewTestimony()) {
            # code...
            return redirect()->route('admin.testimonial.index')->with('success', 'Successfully added!');
        }
        return back()->with('error', 'Something Went Worry');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $id)
    {
        //
        try{
            $testimonial = Testimonial::findOrFail($id);
            return view('admin.testimony.edit', compact('testimonial'));
        }catch(\Exception $exception){
            Log::error($exception->getMessage());
            return back()->with('error', 'An Error Occured');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $testimonial = Testimonial::findOrFail($id);
        try {
           
            $testimonial->update([
               'name'=>$request->input('name'),
               'body'=>$request->input('body'),
                'image'=>update_image("testimony/pic",$testimonial->image,"image"),
            ]);
            // Alert::success('success', 'Successfuly updated');
           return redirect()->route('admin.testimonial.index')->with('success', 'Successfuly updated');
        } catch (\Exception $exception){
            Log::error($exception->getMessage());
            // return back()->with('error','Error!');
            // Alert::error('error', 'Something went worry');
            return back()->with('error', 'Something went worry');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try {
            $testimonial = Testimonial::findOrFail($id);
            $testimonial->delete();
            return redirect(route('admin.testimonial.index'))->with('success', 'Delete Successfully');
        } catch (\Exception $exception) {
            Log::info($exception->getMessage());
            return back()->with('error', 'Something Went Worry');
        }
    }
}
