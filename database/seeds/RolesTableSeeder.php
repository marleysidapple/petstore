<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
	protected $roles = [
		'superadmin', 'admin', 'retailer'
	];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->roles as $role) {
        	Role::create([
        		'role' => $role
        	]);
        }
    }
}
	