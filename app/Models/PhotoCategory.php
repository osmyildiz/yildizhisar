<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhotoCategory extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'photo_categories';
    public $timestamps = true;
    protected $fillable = [];
}
