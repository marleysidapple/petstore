<?php namespace App\Helpers;

use GuzzleHttp;

class GoogleGeocodeHelper {

	public static function geolocate_address($address) {

		$parameters = array(
			'address' => $address,
			'sensor' => 'false',
			//'key'   => 'AIzaSyAdDk1vkWYTjSXkwzTDc46ySZeGD9T3mUQ'
			'key' => 'AIzaSyASI8TDbU387hGgO5nR8Kudhiy_hGXqmTo',
			//'key' => 'AIzaSyDyTFoj2pHX5FjVK69RjlXCVyF4WtI6q3E',
		);
		$client = new GuzzleHttp\Client();
		$response = $client->get('https://maps.googleapis.com/maps/api/geocode/json?', array('query' => $parameters));
		
		$response_json = $response->json();

		if (empty($response_json['results'][0]['geometry']['location']['lat']) || empty($response_json['results'][0]['geometry']['location']['lng'])) {

			$parameters1 = array(
				'address' => $address,
				'sensor' => 'false',
				 'key'   => 'AIzaSyAwwqQKx2_ofre27-gToGVBnnwZeO7zep4'
				//'key' => 'AIzaSyDslD5eQhZBNAe1s-zMiE1z0HDMyR3EMX4',
			);
			$client1 = new GuzzleHttp\Client();
			$response1 = $client1->get('https://maps.googleapis.com/maps/api/geocode/json?', array('query' => $parameters1));
			$response_json1 = $response1->json();
			
			if (empty($response_json1['results'][0]['geometry']['location']['lat']) || empty($response_json1['results'][0]['geometry']['location']['lng'])) {
				throw new \Exception(implode(' ', array(
					"Required fields not provided by Google/geocode.",
					"[Request_URL] " . '',
					"[Request_Params] " . print_r($parameters, true),
					"[Response] " . print_r($response_json, true),
				)));
			}
			return $response_json1['results'][0]['geometry']['location'];

		}

		return $response_json['results'][0]['geometry']['location'];
	}

	public static function geodictance_matix($origin_address, $destination_address) {
		$parameters = array(
			'origins' => $origin_address,
			'destinations' => $destination_address,
			'sensor' => 'false',
			'key' => 'AIzaSyAdDk1vkWYTjSXkwzTDc46ySZeGD9T3mUQ',
			//'key' => 'AIzaSyASI8TDbU387hGgO5nR8Kudhiy_hGXqmTo'
		);

		$client = new GuzzleHttp\Client();

		$response = $client->get('https://maps.googleapis.com/maps/api/distancematrix/json?', array('query' => $parameters));
		$response_json = $response->json();
		if ($response_json['status'] == 'OK') {
			$distance = $response_json['rows'][0]['elements'][0]['distance']['value'] / 1000;
		} else {
			$distance = 0;
		}

	}

}
