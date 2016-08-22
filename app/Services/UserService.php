<?php

namespace App\Services;

use App\Interfaces\UpdateInterface;

class UserService
{
	/**
	 * Injecting dependencies
	 * 
	 * @param UpdateInterface $user
	 */
	function __construct(UpdateInterface $user)
	{
		$this->user = $user;
	}

	public function all($limit, array $data = [])
	{
		return $this->user->all($limit, $data);
	}

	public function update($username, $data)
	{
		return $this->user->update($username, $data);
	}

	public function get($username)
	{
		return $this->user->findUserByUsername($username);
	}

	public function findByEmail($email)
	{
		return $this->user->findByEmail($email);
	}

	public function approve(array $data)
	{
		if('true' == $data['status']) {
			$data['approve'] = 1;
		} else {
			$data['approve'] = 2;
		}

		return $this->user->approve($data);
	}
}