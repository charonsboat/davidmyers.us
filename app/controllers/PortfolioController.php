<?php

class PortfolioController extends BaseController {
	/**
	 * To access this controller, simply add the route.
	 * E.g. Route::get('/', 'PortfolioController@index');
	 */
	public function index()
	{
		$GitHub = new GitHub(
			
			$_ENV['GITHUB']['API_ACCESS_TOKEN'],
			$_ENV['GITHUB']['CLIENT_ID'],
			$_ENV['GITHUB']['CLIENT_SECRET'],
			$_ENV['GITHUB']['USERNAME']
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