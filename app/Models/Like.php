<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *s.
     * @var array
     */
    protected $guarded = ['id'];
}
