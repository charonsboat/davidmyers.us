<?php

class PortfolioController extends BaseController {
	/**
	 * To access this controller, simply add the route.
	 * E.g. Route::get('/', 'PortfolioController@index');
	 */
	public function index()
	{
		$GitHub = new GitHub(
			
			$_ENV['github.api_access_token'],
			$_ENV['github.client_id'],
			$_ENV['github.client_secret'],
			$_ENV['github.username']
		);

		$data = array(

			'github' => array(

				'data' => $GitHub->fetchData(), 
				'base_url' => $GitHub->fetchBaseUrl()
			)
		);

		$this->layout->title = 'Portfolio';
		$this->layout->main = View::make('portfolio', $data);

		return $this->layout;
	}

}