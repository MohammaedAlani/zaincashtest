<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $employeesArray = [
            [
                'first_name' => 'Henry',
                'last_name' => 'Cahil',
                'city' => 'Baghdad',
                'salary' => 2500,
            ],
            [
                'first_name' => 'Jimmy',
                'last_name' => 'clive',
                'city' => 'Najaf',
                'salary' => 1200,
            ],
            [
                'first_name' => 'James',
                'last_name' => 'cage',
                'city' => 'Najaf',
                'salary' => 3300,
            ],
            [
                'first_name' => 'Adam',
                'last_name' => 'jones',
                'city' => 'Baghdad',
                'salary' => 12000,
            ],
            [
                'first_name' => 'Sally',
                'last_name' => 'Johnson',
                'city' => 'Babil',
                'salary' => 500,
            ],
            [
                'first_name' => 'Monica',
                'last_name' => 'Selles',
                'city' => 'Kut',
                'salary' => 1230,
            ]
        ];

        $target = \App\Models\Employee::class;

        foreach ($employeesArray as $key => $emp) {
            $target::create([
                'first_name' => $emp['first_name'],
                'last_name' => $emp['last_name'],
                'city' => $emp['city'],
                'salary' => $emp['salary'],
            ]);
        }
    }
}
