<?php

namespace Database\Seeders;

use App\Models\ProgrammingLanguage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgrammingLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProgrammingLanguage::create([
            'language' => 'HTML',
        ]);

        ProgrammingLanguage::create([
            'language' => 'CSS',
        ]);

        ProgrammingLanguage::create([
            'language' => 'JS',
        ]);

        ProgrammingLanguage::create([
            'language' => 'PHP',
        ]);

        ProgrammingLanguage::create([
            'language' => 'SQL',
        ]);

        ProgrammingLanguage::create([
            'language' => 'Java',
        ]);

        ProgrammingLanguage::create([
            'language' => 'Dart',
        ]);

        ProgrammingLanguage::create([
            'language' => 'Python',
        ]);

        ProgrammingLanguage::create([
            'language' => 'C++',
        ]);
    }
}
