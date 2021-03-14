<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\{Classe, Student, Note, Subject, Teacher};
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {        
        // Classe::factory()
        // ->has(Student::factory()->count(20))
        // ->count(12)
        // ->create();
        // Teacher::factory()->count(12)->create();
        Subject::factory()->count(50)->create();
        // Note::factory()->count(1200)->create();
    }
}
