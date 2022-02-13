<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Posts extends Model
{
	use HasFactory;

	// protected $guarded = [];
	protected $fillable = [
		'anotherFieldNotRequiringValidation', 'caption', 'image', 'user_id'
];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
