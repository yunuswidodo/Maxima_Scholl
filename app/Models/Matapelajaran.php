<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matapelajaran extends Model
{
    use HasFactory;

    protected $table = 'mata_pelajaran';
    protected $primaryKey = 'ID_MAPEL'; //  for set primary key
   

}
