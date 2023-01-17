<?php

namespace App\Http\Requests;

use App\Models\Room;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
class RoomRequest extends FormRequest
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
            'number'=>['required','string'],
            'name'=>['required','string'],
            'price'=>['required','numeric'],
            'cover_image'=>['required','image', 'mimes:jpeg,png,jpg,gif,svg'],
            'images.*'=>['required','image', 'mimes:jpeg,png,jpg,gif,svg','array'],
            'discription'=>['required', 'string'],
            'status'=>['required', 'string'],
        ];
    }



    public function createRoom(){
       
       try{
            Room::create([
                'number'=>$this->number,
                'price'=>$this->price,
                'name'=>$this->name,
                'images'=>upload_multiple_images('rooms/slider'),
                'cover_image'=>upload_single_image('rooms', 'cover_image'),
                'discription'=>$this->discription,
                'status'=>$this->status,
                'slug'=>Str::slug($this->name),
                'name'=>$this->name,
            ]);
            return true;
       }catch(\Exception $exception){
         Log::error($exception->getMessage());
         return false;
       }
    }
}
