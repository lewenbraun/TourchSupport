<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'staff_id',
        'text',
        'priority',
        'name',
        'path_file',
        'phone',
        'email',
    ];


}
