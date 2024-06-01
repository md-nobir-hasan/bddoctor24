<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamber extends Model
{
    use HasFactory;
    protected $fillable=['title','location', 'other_info','map_link','website_link','status'];
}
