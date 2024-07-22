<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    
    public static function getData(){
        DB::table('todos')->get();
    }
    
    public static function insertData($data){
        DB::table('todos')->insert($data);
    }

   

}
