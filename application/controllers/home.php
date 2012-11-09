<?php

class Home_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
	{
		return View::make('home.index');
	}

	public function get_about()
	{
		return 'About';
	}

	public function get_contact()
	{
		return 'Contact';
	}

}