<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'email',
        'name',
        'password',
        'created_at',
        'updated_at',
    ];
}
