<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class TexasStateAndCitiesSeeder extends Seeder
{
    public function run()
    {
        // Delete existing Texas state and its cities
        $state = State::where('name', 'Texas')->first();
        if ($state) {
            City::where('state_id', $state->id)->delete();
            $state->delete();
        }

        // Create Texas state
        $state = State::create([
            'name' => 'Texas',
            'abbreviation' => 'TX',
            'status' => 1
        ]);

        // Get cities data from JSON file
        $json = File::get(database_path('seeders/texas_cities.json'));
        $cities = json_decode($json, true);

        // Insert cities into the database
        foreach ($cities as $city) {
            City::create([
                'name' => $city['name'],
                'state_id' => $state->id,
                'status' => $city['status']
            ]);
        }
    }
}
