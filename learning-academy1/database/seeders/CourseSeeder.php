<?php

namespace Database\Seeders;
use Database\Seeders\OrderStatusSeeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\trainer;
use App\Models\cat;
use App\Models\Course;



class courseseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=3;$i++){
            for($j=1;$j<=6;$j++){
             course::create([
                'trainer_id'=>rand(1,4),
                 'cat_id'=>$i,
                 'name'=>" cat num $i course num $j",
                 'smalldesc'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum",
                 'desc'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing",
                 'price'=>rand(1000,5000),
                 'img'=>"$i$j.png",



             ]);
            }
        
    }
}
}