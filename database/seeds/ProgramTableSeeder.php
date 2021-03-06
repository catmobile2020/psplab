<?php

use Illuminate\Database\Seeder;

class ProgramTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataArray=[
            ['name'=>'FOC'],
            ['name'=>'Laboratory'],
            ['name'=>'First Dose / Infusion'],
            ['name'=>'Eye Center'],
        ];
        foreach ($dataArray as $data)
            \App\Program::create($data);
    }
}
