<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prov_Cat extends Model
{
	protected $table = 'prov_cat';

    protected $primaryKey='id , idcat';
  

    protected $fillable = ['id','idcat'];

    //protected $guarded[

    //];
}
