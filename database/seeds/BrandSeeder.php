<?php

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayName = array(
            'Zé da feira', 'Matriz', 'Auto', 'Poes'
        );

        foreach ($arrayName as $array) {
            \DB::table('brands')->insert([
                'name' => $array,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
