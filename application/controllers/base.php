<?php

class Base_Controller extends Controller {

	public function __construct()
	{
		$this->base_assets();
	}

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

	public function base_assets()
	{
		//Javascript
		Asset::add('jquery', 'js/jquery_1.3.2.js');
		Asset::add('jqueryui', 'js/jqueryui.js');
		Asset::add('easing', 'js/easing.js');
		Asset::add('jquerycycle', 'js/jquery.cycle.all.js');
		Asset::add('custom', 'js/custom.js');

		//CSS
		Asset::add('style', 'css/style.css');
		Asset::add('spring', 'css/spring.css');	

		//Superfish
		Asset::container('superfish')->add('hoverintent', 'js/hoverIntent.js');
		Asset::container('superfish')->add('superfish', 'js/superfish.js');
		Asset::container('superfish')->add('superfishcss', 'css/superfish-custom.css');

		//Cufon
		Asset::container('cufon')->add('cufon', 'js/cufon-yui.js');
		Asset::container('cufon')->add('bebas', 'js/bebas_400.font.js');
	}

}