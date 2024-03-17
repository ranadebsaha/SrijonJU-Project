<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advocate extends Model
{   
    protected $table="advocate";
    protected $primaryKey="advocate_id";
    use HasFactory;
}
