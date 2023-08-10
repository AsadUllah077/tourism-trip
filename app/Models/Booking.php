<?php

namespace App\Models;

use App\Models\User;
use App\Models\RoomType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','roomtype_id','start_date','end_date','status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function roomtype()
    {
        return $this->belongsTo(RoomType::class);
    }
}
