<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::updateOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => 'password',
                'role' => 'user',
                'is_active' => true,
            ],
        );

        \App\Models\Student::updateOrCreate(
            ['student_no' => '2026-0001'],
            [
                'first_name' => 'Ana',
                'last_name' => 'Santos',
                'email' => 'ana.santos@example.com',
                'course' => 'BSIT',
                'year_level' => 3,
            ],
        );

        \App\Models\Student::updateOrCreate(
            ['student_no' => '2026-0002'],
            [
                'first_name' => 'Marco',
                'last_name' => 'Reyes',
                'email' => 'marco.reyes@example.com',
                'course' => 'BSIT',
                'year_level' => 3,
            ],
        );

        \App\Models\Course::updateOrCreate(
            ['course_code' => 'IT312L'],
            [
                'course_name' => 'System Integration and Architecture 2 (Laboratory)',
                'description' => 'Laboratory course for modular Laravel application structure and integration patterns.',
                'units' => 3,
            ],
        );

        \App\Models\Course::updateOrCreate(
            ['course_code' => 'IT311'],
            [
                'course_name' => 'Information Assurance and Security',
                'description' => 'Core concepts for protecting information systems and application data.',
                'units' => 3,
            ],
        );

        \App\Models\Course::updateOrCreate(
            ['course_code' => 'IT313'],
            [
                'course_name' => 'Application Development and Emerging Technologies',
                'description' => 'Development practices using current frameworks, tools, and deployment workflows.',
                'units' => 3,
            ],
        );
    }
}
