<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedimento extends Model
{
  protected $table = 'procedures';
  protected $fillable = [ 'id', 'name', 'price', 'user_id', 'created_at', 'updated_at' ];
    //
}
