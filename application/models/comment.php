<?php

class Comment extends Eloquent
{
	public function Blog()
	{
		return $this->belongs_to('Blog');
	}
}