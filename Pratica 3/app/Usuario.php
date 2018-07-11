<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
  //public $timestamps =false;
  protected $table = 'users';
  protected $fillable = [ 'id', 'name', 'email', 'password', 'type', 'remember_token', 'created_at', 'updated_at' ];
    //
}
