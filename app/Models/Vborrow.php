<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vborrow extends Model
{
    use HasFactory;
    protected $table = 'v_borrows';
    protected $primarykey = 'id';
}
