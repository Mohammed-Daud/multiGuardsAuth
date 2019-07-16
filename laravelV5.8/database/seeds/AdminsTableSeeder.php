<?php

use Illuminate\Database\Seeder;
use App\Models\Backend\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin;
        $admin->name        = 'Admin';
        $admin->email       = 'admin@admin.com';
        $admin->password    = bcrypt('123456');
        $admin->save();
    }
}
