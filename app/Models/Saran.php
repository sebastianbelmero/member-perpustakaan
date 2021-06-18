<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saran extends Model
{
    protected $table = "suggestions";
    protected $guarded = ["id"];
    use HasFactory;
}
