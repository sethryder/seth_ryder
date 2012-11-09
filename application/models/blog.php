<?php

class Blog extends Eloquent
{
	public static $table = 'posts';
	public static $timestamps = true;

	
	public function user()
	{
		return $this->belongs_to('User');
	}

	public function category()
	{
		return $this->belongs_to('Category');
	}
	
	public function comments()
	{
		return $this->has_many('Comment');
	}
}