<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {

	public function action_index()
	{
		$view = new View('home/index');
    $this->response->body($view);
	}

} // End Welcome
