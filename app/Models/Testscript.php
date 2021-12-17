<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testscript extends Model
{
    use HasFactory;
		//protected $table = 'testscript';// i had to add this because when you create a model it's looking for  connects to a table. Usually not needed because laravel should connect based on the naming structure 


}
