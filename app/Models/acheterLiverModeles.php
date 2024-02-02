<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class acheterLiverModeles extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'liver_id',
    ];
}
