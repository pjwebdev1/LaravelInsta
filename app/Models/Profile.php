<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	use HasFactory;

	protected $fillable = [
		'title',
		'user_id'
	];

	public function profileImage()
	{
		if ($this->image) {
			return '/storage/'.$this->image;
		} else {
			return 'https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Instagram_colored_svg_1-1024.png';
		}

		// $imagePath = ($this->image) ? '/storage/' . $this->image : 'https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Instagram_colored_svg_1-1024.png';
		// return $imagePath; 
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
