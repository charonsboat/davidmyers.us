<?php

class HomeController extends BaseController {

	/**
	 * To access this controller, simply add the route.
	 * E.g. Route::get('/', 'HomeController@index');
	 */
	public function index()
	{
		$this->layout->title = 'Home';
		$this->layout->main = View::make('home');

		return $this->layout;
	}

	public function contact()
	{
		Mail::queueOn('contact', 'emails.contact', Input::all(), function ($message)
		{
			$message->to('self@davidmyers.us')->subject('New Contact');
		});

		return Redirect::route('home');
	}
}