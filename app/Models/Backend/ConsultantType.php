<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultantType extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'other_info','status','serial'];

    
}
