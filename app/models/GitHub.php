<?php


class GitHub {

	private $api_access_token;
	private $base_api_path;
	private $base_path;
	private $client_id;
	private $client_secret;
	private $data_path;
	private $username;

	public function __construct($api_access_token = '', $client_id = '', $client_secret = '', $username = '') {
		$this->api_access_token = $api_access_token;
		$this->base_api_path = 'https://api.github.com/';
		$this->base_path = 'https://github.com/';
		$this->client_id = $client_id;
		$this->client_secret = $client_secret;
		$this->data_path = 'users/' . $username . '/events';
		$this->username = $username;
	}

	public function fetchData() {
		$full_path = $this->base_api_path . $this->data_path;
		$full_path .= $this->api_access_token != '' && $this->client_id != '' && $this->client_secret != '' ? '?access_token=' . $this->api_access_token . '&client_id=' . $this->client_id . '&client_secret=' . $this->client_secret : '';

		$handle = curl_init();

		curl_setopt($handle, CURLOPT_HTTPHEADER, array('User-Agent: GitHub Access For [' . $this->username . ']'));
		curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false); // curl throws error on all certs by default w/o passing cert provider.
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($handle, CURLOPT_URL, $full_path);

		$json = curl_exec($handle);
		curl_close($handle);

		return json_decode($json);
	}

	public function fetchBaseUrl() {
		return $this->base_path;
	}

}