<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['Super Admin','Developer of the system.'],
            ['Owner','Owner of the system.'],
            ['Admin','IT staff working on the system.'],
            ['Manager','Supervisors and managers of the system including office heads.'],
            ['Employee','Team members that collect data.'],
        ];

        foreach ($roles as $key => $value) {
            $role = new Role();
            $role->name = $value[0];
            $role->description = $value[1];
            $role->save();
        }
    }
}
