<?php
	/**
		* 
		*/

		use Illuminate\Database\Seeder;

		class AsesoradoTableSeeder extends Seeder
		{
			
			public function run()
			{
				\DB::table('asesorados')->insert(array(
					'usuario_id' => 1
				));
			}
		}	
?>