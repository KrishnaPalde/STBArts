<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'bookings';
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'address',
        'ganesh_id',
        'ganesh_type',
        'ganesh_price',
        'ganesh_image',
        'quantity',
        'total',
    ];
}
