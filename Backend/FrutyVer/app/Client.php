<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    private $table = 'clients';

    public function getAll(){
        return DB::table($table)->get();
    }
}
