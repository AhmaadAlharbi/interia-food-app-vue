<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cityNames = ['Aalborg', 'Aarhus', 'Aba', 'Abeokuta', 'Abovyan', 'Abuja', 'Accra', 'Adana', '...', 'Zaria', 'Zenica', 'Zhodzina', 'Zilina', 'Zvolen', 'Zürich', 'Other'];

        foreach ($cityNames as $cityName) {
            try {
                City::create(['name' => $cityName]);
            } catch (\Exception $e) {
                // Handle any potential exceptions here
                // For example: logging or displaying an error message
            }
        }

        echo "City seeding completed successfully.\n";
    }
}