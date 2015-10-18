<?php
	use Illuminate\Database\Seeder;

	class UserTableSeeder extends Seeder{
		public function run()
		{
			\DB::table('users')->insert(array(
				'name' => 'Manuel Alfonso',
				'first_name' => 'Ríos',
				'last_name' => 'Medellín',
				'email' => 'mriosm1100@outlook.com',
				'password' => \Hash::make('secret')
			));
		}
	}
?>