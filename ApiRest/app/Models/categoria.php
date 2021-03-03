<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $table ='categorias';
    public $timestamps=false;
    protected $fillable=['id','catNom','catObs'];
}
