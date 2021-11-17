<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Queue;

class QueueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reg1 = new Queue();
		$reg1->queue_name = "Cola Uno";
		$reg1->wait_time = 2;
		$reg1->save();
		
		//#############################
		
		$reg2 = new Queue();
		$reg2->queue_name = "Cola Dos";
		$reg2->wait_time = 3;
		$reg2->save();
    }
}
