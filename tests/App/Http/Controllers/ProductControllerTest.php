<?php

namespace Tests\App\Http\Controllers;

use TestCase;

class ProductControllerTest extends TestCase
{
	/**
	 * @test
	 */
	public function index_status_should_be_200()
	{
		$this->get('/products')->seeStatusCode(200);
	}
}