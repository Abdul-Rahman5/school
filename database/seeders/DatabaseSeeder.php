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
        $this->call(UserSeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(ClassroomTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(BloodTableSeeder::class);
        $this->call(Nationalities::class);
        $this->call(religionTableSeeder::class);
        $this->call(specializations::class);
        $this->call(GenderTableSeeder::class);
        $this->call(ParentsSeeder::class);
        $this->call(StudentsSeeder::class);
        $this->call(settingTableSeeder::class);
        //
        // $this->call(
        //     UserSeeder::class,
         // GradeSeeder::class,
        //  ClassroomTableSeeder::class,
        // SectionsTableSeeder::class

        // );
        // $this->call(BloodTableSeeder::class);
        // $this->call(Nationalities::class);
        // $this->call(religionTableSeeder::class);
        // $this->call(specializations::class);
        // $this->call(GenderTableSeeder::class);
        // $this->call(ParentsSeeder::class);
        // $this->call(StudentsSeeder::class);
    }
}
