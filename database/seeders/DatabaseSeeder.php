<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CompanySeeder::class,
            UserSeeder::class,
            CompanyUserSeeder::class,
        ]);

        // Delete any stored files
        $dirname = storage_path('app/public');
        @array_map('unlink', glob("$dirname/*.*"));
        @rmdir($dirname);
        $dirname = storage_path('app/livewire-tmp');
        @array_map('unlink', glob("$dirname/*.*"));
        @rmdir($dirname);
        $dirname = public_path('storage');
        @array_map('unlink', glob("$dirname/*.*"));
        @rmdir($dirname);
    }
}
