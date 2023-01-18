<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career_table extends Model
{
    public $table = 'career';
    public $primaryKey = 'id';
    public $incrementing = 'true';
    public $timestamps = false;
}