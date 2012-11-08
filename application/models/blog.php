<?php

class Blog extends Eloquent
{
	public static $table = 'posts';

	/*
	public function user()
	{
		return $this->belongs_to('User');
	}
	
	public function comments()
	{
		return $this->has_many('Comment');
	}
	*/
}