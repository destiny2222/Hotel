<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'email',
        'check_in',
        'check_out',
        'phone',
        'number',
        'bookingid',
        'name',
        'price',
    ];

    public function room(){
        $this->belongsTo(Room::class);
    }


        public function getTotalPrice()
    {
        $day = getDateDifference($this->check_in, $this->check_out);
        $room_price = $this->room->price;
        $total_price = $room_price * $day;
        return $total_price;
    }

    public function getDateDifferenceWithPlural()
    {
        $day = getDateDifference($this->check_in, $this->check_out);
        $plural = Str::plural('Day', $day);
        return $day . ' ' . $plural;
    }


    protected $dates = [
        'check_in',
        'check_out',
    ];
}
