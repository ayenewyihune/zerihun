<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\ProjectType;

class ProjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['New Building','Building Maintainance','New Road','Road Maintainace','New Other','Other Maintainace'];
        
        foreach ($types as $key => $value) {
            $type = new ProjectType();
            $type->name = $value;
            $type->save();
        }
    }
}
