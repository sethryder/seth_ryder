<?php

class User extends Eloquent
{
	public function blogs()
	{
		return $this->has_many('Posts');
	}
}