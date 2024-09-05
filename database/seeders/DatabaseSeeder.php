<?php

namespace Database\Seeders;

use App\Models\Column;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $columns = ['A', 'B', 'C'];

        foreach ($columns as $column) {
            $column = Column::create(['name' => "Column $column"]);

            for ($j = 1; $j <= 4; $j++) {
                $column->tasks()->create([
                    'name' => str()->random(10),
                    'position' => $j - 1,
                ]);
            }
        }
    }
}
