<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    //use HasFactory;
	
	protected $fillable = [
		'queue_name',
		'wait_time',
		];
	
	public function asignation()
	{
		return $this->hasOne('App\Models\Asignation');
	}
}
