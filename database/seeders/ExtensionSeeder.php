<?php

namespace Database\Seeders;

use DB;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExtensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // File::get - loads file text as a string
        $json = File::get(database_path('data/extensions.json'));
        $extensions = json_decode($json, true);
        $extensions = array_map(function ($item) {
            $normalizedKeys = [
                'is_active' => $item['isActive'] ?? false,
                'logo' => str_replace('./assets', '/storage', $item['logo']),
            ];

            return collect($item)
                ->except('isActive')
                ->merge($normalizedKeys)
                ->all();
        }, $extensions);

        DB::table('extensions')->insert($extensions);
    }
}
