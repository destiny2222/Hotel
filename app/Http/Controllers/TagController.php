<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tag = Tag::orderBy("id", "desc")->get();
        return view('admin.Tag.index', compact('tag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.Tag.create');
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
            'name'=>['required','string']
        ]);

        try{
            Tag::create([
                'name'=>$request->input('name'),
                'slug'=>Str::slug($request->input('name')),
            ]);
            // Alert::success('success', 'Tag successfully added!');
            return redirect()->route('admin.tags.index')->with('success', 'Tag successfully added!');
        }catch(\Exception $exception){
            Log::info($exception->getMessage());
            // Alert::error('error', 'Oops something went worry');
            return back()->with('error', 'Oops something went worry');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     *  @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // return view('admin.Tag.edit',[
        //     'tag'=>$tag
        // ]);
        try{
            $tag = Tag::findOrFail($id);
            return view('admin.Tag.edit', compact('tag'));
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
        try {
            $tag = Tag::findOrFail($id);
            $tag->update([
               'name'=>$request->input('name'),
                'slug'=>Str::slug($request->input('name')),
            ]);
            // Alert::success('success', 'Successfuly updated');
           return redirect()->route('admin.tags.index')->with('success', 'Successfuly updated');
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
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try {
            $tag = Tag::findOrFail($id);
            $tag->delete();
            return redirect()->route('admin.tags.index')->with('success', 'Delete Successfully');
        } catch (\Exception $exception) {
            Log::info($exception->getMessage());
            return back()->with('error', 'Something Went Worry');
        }
    }
}
