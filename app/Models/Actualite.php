<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    protected $fillable = ['titre','date','photo','description'];
}
