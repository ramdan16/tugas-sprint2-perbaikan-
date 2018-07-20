<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\softdeletes;
class blog extends Model
{
	//use softdeletes;
	public $timestamps = false;
	protected $table = 'suppliers';
  // protected $dates = ['deleted_at'];
  //protected $fillable = ['pesan','alamat','no_tlp'];
  protected $guarded = [];
}
