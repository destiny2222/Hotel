<?php

namespace App\Http\Requests;

use App\Models\Gallery;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;

class GalleryRequest extends FormRequest
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
            'name'=>['required', 'string'],
            'image'=>['image','nullable', 'mimes:jpeg,png,jpg,gif,svg' ]
        ];
        
    }

    public function createNewGallery(){
        // if($this->hasFile("image")){
        //     $image = $this->file("image");
        //     $ext = $image->getClientOriginalExtension();
        //     $fileName = substr(rand(1,9000000000000).time(),2);
        //     $Storing = $fileName.'.'.$ext;
        //     $fileresize = $this->file('image')->move(public_path('gallery/pic'), $Storing);
        //     Image::make($fileresize)->resize(300, 200)->save();
        // }
        try{
            Gallery::create([
                'name'=>$this->name,
                'image'=>upload_single_image('gallery/pic', 'image'),
             ]);
             return true;
        }catch(\Exception $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }
}
