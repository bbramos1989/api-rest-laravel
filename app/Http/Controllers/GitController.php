<?php

namespace App\Http\Controllers;
require '../vendor/autoload.php';

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GitController extends Controller
{
	public function downloadRepositories()
	{

		$client = new \GuzzleHttp\Client();
		$res = $client->request(
			'GET', 'https://api.github.com/repos/',
			array(
				'body' => array(
					'user' => $_POST['user'],
					'repo' => $_POST['repo']
				)
			)

		);
		

	}

    
}
