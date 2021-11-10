<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class New_Campaign extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'new__campaigns';
    public $timestamps = true;
    protected $fillable = [];
}
