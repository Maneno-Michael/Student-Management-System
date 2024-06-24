<?php

namespace Database\Seeders;

use App\Models\Classes;
use App\Models\Sections;
use App\Models\Students;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Return_;

class classSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classes::factory()
            ->count(10)
            ->sequence(fn ($sequence) => ['name' => 'class' . $sequence->index + 1])
            ->has(
                Sections::factory()
                    ->count(2)
                    ->state(
                        new Sequence(
                            ['name' => 'Section A'],
                            ['name' => 'Section B'],
                        )
                    )
                    ->has(
                        Students::factory()
                            ->count(5)
                            ->state(
                                function (array $attributes, Sections $sections) {
                                    return ['classes_id' => $sections->classes_id];
                                }
                            )
                    )
            )
            ->create();
    }
}
