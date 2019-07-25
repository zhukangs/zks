<?php

use App\AdminConfig;
use Illuminate\Database\Seeder;

class AdminConfigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $adminConfig = new AdminConfig();
        $adminConfig->fill([
            'name'         => '后台管理LOGO',
            'config_key'   => 'admin_logo',
            'config_value' => '/uploads/config/logo.png',
            'type'         => 'image',
        ]);
        $adminConfig->save();
    }
}
