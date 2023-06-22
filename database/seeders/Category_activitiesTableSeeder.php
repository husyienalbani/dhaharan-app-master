<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoryActivity;
use Illuminate\Support\Str;

class Category_activitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category_activities = collect(['Sosial', 'Edukasi', 'Tutorial']);
            $category_activities->each(function ($c) {
                CategoryActivity::create([
                'name' => $c,
                'slug' => Str::slug($c),
                    ]);
            });
    }
}
