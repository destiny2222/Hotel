<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Tag;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tag = Tag::select('id', 'name')->get();
        $blog = Post::orderBy("id", "desc")->paginate(3);
        return view('admin.post.blog', compact('blog', 'tag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tag = Tag::select('id', 'name')->get();
        return view('admin.post.blog', compact('tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        //
        if($request->createNewBlog()){
            // Alert::success('success','new blog added');
            // return redirect(route('posts.index'));
            return redirect(route('admin.blog.index'))->with('success', 'Successfully add new BLog');
        }
        return back()->with('error', 'An error occurred!');
        // Alert::error('error','An error occurred!');
        // return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // return view('admin.post.blog-edit',[
        //     'post'=>$post
        // ]);
        try{
            $blog = Post::findOrFail($id);
            // Alert::success('success', 'Edited Success');
            return view('admin.post.blog-edit', compact('blog'));
        }catch(\Exception $exception){
            Log::info($exception->getMessage());
            Alert::error('error', 'Something went worry');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *  @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Post::findOrFail($id);
        // if($request->hasFile("image")){
        //     if (File::exists('post/'.$blog->image)) {
        //         File::delete('post/'.$blog->image);
        //     }
        //     $image = $request->file("image");
        //     $ext = $image->getClientOriginalExtension();
        //     $fileName = substr(rand(1,9000000000000).time(),2);
        //     $Storing = $fileName.'.'.$ext;
        //     $fileresize = $request->file('image')->move(public_path('post'), $Storing);
        //     Image::make($fileresize)->resize(300, 200)->save();
        // }
        try{
            
            $blog->update([
              'name'=>$request->input('name'),
              'author'=>$request->input('author'),
              'body'=>$request->input('body'),
              'slug'=>Str::slug($request->input('name')),
              'image'=>update_image('post',$blog->image, 'image'),
            ]);
            // Alert::success('success', 'Updated Successful');
            return redirect(route('admin.blog.index'))->with('success', 'Updated Successful');
          }catch(\Exception $exception){
              Log::error($exception->getMessage());
              return back()->with('error', 'Oops something went wrong');
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try {
            $blog = Post::findOrFail($id);
            $blog->delete();
            // Alert::success('success', 'Delete Successfully');
            return redirect()->route('admin.blog.index')->with('success', 'Delete Successfully');
        } catch (\Exception $exception) {
            Log::info($exception->getMessage());
            // Alert::error('error', 'Something Went Worry');
            return back()->with('error', 'Something Went Worry');
        }
    }
}
