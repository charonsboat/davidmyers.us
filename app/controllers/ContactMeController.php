<?php

class ContactMeController extends BaseController {
	/**
	 * To access this controller, simply add the route.
	 * E.g. Route::get('/', 'ContactMeController@index');
	 */
	public function index()
	{
		$this->layout->title = 'Contact Me';
		$this->layout->main = View::make('contact-me');

		return $this->layout;
	}

	public function submit()
	{
		Mail::queue(array('emails.inquiry', 'emails.inquiry-plain-text'), Input::all(), function ($message)
		{
			$message->to('self@davidmyers.us', 'David Myers')->subject('New Inquiry');
		});

		$this->layout->title = 'Contact Me';
		$this->layout->main = View::make('emails.sent');

		return $this->layout;
	}

}