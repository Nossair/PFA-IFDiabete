<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
	$role1 = new Role();
	$role1->name  = 'patient';
	$role1->display_name = 'Patient'; // optional
	$role1->description  = 'Patient Can access the api';
	$role1->save();
    }
}
