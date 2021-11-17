<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    //use HasFactory;
	
		protected $fillable = [
		'customer_id',
		'queue_id',
		'status',
		];
		
	public function customer()
	{
		return $this->belongsTo('App\Models\Customer');
	}
	
}
