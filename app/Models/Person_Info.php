<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person_Info extends Model
{
    use HasFactory;

    public $table = 'person__infos';

    protected $guarded = [];
}
