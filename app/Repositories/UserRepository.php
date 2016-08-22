<?php

namespace App\Repositories;

use App\Exceptions\CustomExceptions\UserNotFoundException;
use App\Interfaces\UpdateInterface;
use App\User;

class UserRepository implements UpdateInterface
{
	/**
	 * Injecting dependencies
	 * 
	 * @param User $user
	 */
	function __construct(User $user)
	{
		$this->user = $user;
	}

	public function all($limit, array $data = [])
	{
		return $this->user->where('is_approved', false)->paginate($limit);
	}

	public function update($username, array $data)
	{
		try {
			$user = $this->findUserByUsername($username);
			
			foreach ($data as $key => $value) {
				$user->{$key} = $value;
			}

			$user->save($data);
			return $user;
		} catch(UserNotFoundException $e) {
			dd($e->getErrorMessage());
			return $e->getErrorMessage();
		}
		
	}

	public function findUserByUsername($username)
	{
		$user = $this->user->where('username', $username)->first();

		if(!$user) {
			throw new UserNotFoundException('User with '.$username.' does not exist.');
		}

		return $user;
	}

	public function findByEmail($email)
	{
		$user = $this->user->where('email', $email)->first();

		if(!$user) {
			return false;
		}

		return $user;
	}

	public function approve(array $data)
	{
		$user = $this->user->where('username', $data['user'])->first();
		$user->is_approved = $data['approve'];
		$user->save();
		return $user;
	}
}