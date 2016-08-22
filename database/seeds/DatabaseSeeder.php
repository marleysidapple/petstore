<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Table names
	 * @var array
	 */
	private $tables = [
		'retailer_contacts',
		'stores',
		'users',
		'states',
		'roles'
	];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->cleanDatabase();
    	$this->call(RolesTableSeeder::class);
    	$this->call(StatesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(StoresTableSeeder::class);
        $this->call(RetailerContactTableSeeder::class);
    }

    /**
	 * Remove tables
	 * 
	 * @return void
	 */
	private function cleanDatabase(){
		DB::statement('SET FOREIGN_KEY_CHECKS=0');

		foreach ($this->tables as $tableName) {
			DB::table($tableName)->truncate();
		}
		DB::statement('SET FOREIGN_KEY_CHECKS=1');
	}
}
