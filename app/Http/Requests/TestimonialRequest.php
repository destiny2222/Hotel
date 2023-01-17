<?php

namespace App\Http\Requests;

use App\Models\Testimonial;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;

class TestimonialRequest extends FormRequest
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
            'body'=>['required', 'string'],
            'image'=>['image', 'nullable', 'mimes:jpeg,png,jpg,gif,svg']
        ];
    }

    public function createNewTestimony(){
        // if($this->hasFile("image")){
        //     $image = $this->file("image");
        //     $ext = $image->getClientOriginalExtension();
        //     $fileName = substr(rand(1,9000000000000).time(),2);
        //     $Storing = $fileName.'.'.$ext;
        //     $fileresize = $this->file('image')->storeAs(public_path('testimony/pic'), $Storing);
        //     Image::make($fileresize)->resize(300, 200)->save();
        // }
        // $fileNameToStore = null;

        // if ($this->hasFile('image')){
        //     $fileExt = $this->file('image')->getClientOriginalExtension();
        //     $fileName = rand(1,10000).time();
        //     $fileNameToStore = "$fileName.$fileExt";
        //     $this->file('image')->storeAs('testimony', $fileNameToStore, 'public');
        //     $image = public_path("storage/testimony/$fileNameToStore");
        //     Image::make($image)->resize(400, 300)->save();
        // }
        try{
            Testimonial::create([
                'name'=>$this->name,
                'body'=>$this->body,
                'image'=>upload_single_image('testimony/pic','image'),
            ]);
            return true;
        }catch(\Exception $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }
}
