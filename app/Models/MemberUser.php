<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberUser extends Model
{
    use HasFactory;
    protected $table = 'members';
    protected $primarykey = 'id';
}
