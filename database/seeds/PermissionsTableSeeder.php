<?php

use Illuminate\Database\Seeder;
use App\Permission ;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accessApi = new Permission();
        $accessApi->name = 'access-Aliment Api';
        $accessApi->display_name = 'access Aliment Api'; // optional
        // Allow a user to...
        $accessApi->save();

    }
}
