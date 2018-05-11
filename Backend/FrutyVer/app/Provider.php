<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    private $table = 'providers';

    public function getAll(){
        return DB::table($table)->get();
    }
}