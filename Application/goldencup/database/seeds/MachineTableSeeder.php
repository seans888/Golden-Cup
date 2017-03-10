<?php

use Illuminate\Database\Seeder;

class MachineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $machine = new \app\Machines([
        		'imagePath' => '/images/kyo1.png',
        		'title' => 'Kyocera 1',
        		'price' => 10

        	]);
        $machine->save(); 

        $machine = new \app\Machines([
        		'imagePath' => '/images/kyo2.png',
        		'title' => 'Kyocera 2',
        		'price' => 11

        	]);
        $machine->save(); 

        $machine = new \app\Machines([
        		'imagePath' => '/images/kyo3.png',
        		'title' => 'Kyocera 3',
        		'price' => 12

        	]);
        $machine->save(); 

        $machine = new \app\Machines([
        		'imagePath' => '/images/ricoh01.png',
        		'title' => 'Ricoh 1',
        		'price' => 13

        	]);
        $machine->save(); 
    }
}
