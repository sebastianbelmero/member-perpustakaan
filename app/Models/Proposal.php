<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $table = "messages";
    protected $guarded = ["id"];

    use HasFactory;
}
