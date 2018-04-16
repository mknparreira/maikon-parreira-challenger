<?php

namespace MaikonParreiraChallenger;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
	protected $fillable = ['name', 'cost'];
}
