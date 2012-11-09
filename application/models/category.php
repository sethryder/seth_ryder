<?php

class Category extends Eloquent
{
	public function blog()
	{
		return $this->has_many('Blog');
	}
}