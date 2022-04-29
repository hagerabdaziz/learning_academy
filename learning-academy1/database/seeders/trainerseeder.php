<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\trainer;
use App\Models\Course;


class trainerseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        trainer::create([
          'name'=>'hager abdallah',
          'spec'=>'web devlopment',
          'img'=>'1.jpg',
          'phone'=>'12345'

        ]);

        trainer::create([
            'name'=>'nourhan sabry',
            'spec'=>'web devlopment',
            'img'=>'1.jpg',
            'phone'=>'12345'

          ]);
          trainer::create([
            'name'=>'hager aziz',
            'spec'=>'dentist',
            'img'=>'1.jpg',
            'phone'=>'12345'

          ]);
          trainer::create([
            'name'=>'heba sayed',
            'spec'=>'english teacher',
            'img'=>'1.pnj',
            'phone'=>'12345'

          ]);
    }
}
