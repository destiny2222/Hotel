<?php

namespace App\Http\Requests;

use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'name'=>['required','string'],
            'author'=>['required','string'],
            'body'=>['nullable','string'],
            'tag'=>['required'],
            'image'=>['image','nullable', 'mimes:jpeg,png,jpg,gif,svg'],
        ];
        
        
    }

    public function createNewBlog(){

        // if($this->hasFile("image")){
        //     $image = $this->file("image");
        //     $ext = $image->getClientOriginalExtension();
        //     $fileName = substr(rand(1,9000000000000).time(),2);
        //     $Storing = $fileName.'.'.$ext;
        //     $fileresize = $this->file('image')->move(public_path('post'), $Storing);
        //     Image::make($fileresize)->resize(300, 200)->save();
        // }
        try{
            // $slug  = ;
            Post::create([
                'name'=>$this->name,
                'author'=>$this->author,
                'body'=>$this->body,
                'slug'=>Str::slug($this->name),
                'image'=>upload_single_image('post', 'image')
            ])->tag()->attach($this->tag);
            return true;
        } catch(\Exception $exception){
           Log::error($exception->getMessage());
           return false;
        }
    }
}
