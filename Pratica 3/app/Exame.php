<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exame extends Model
{
  protected $table = 'tests';
  protected $fillable = [ 'id','user_id','procedure_id', 'date', 'created_at', 'updated_at' ];
    //
}
