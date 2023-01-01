<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 10; $i ++){
            
            $patient = new Patient();

            $patient->pet_name = $faker->name();
            $patient->powrent = $faker->name();
            $patient->breed = $faker->name();
            $patient->gender = $faker->randomElement(['male', 'female']);
            $patient->date_of_birth = $faker->date();
            $patient->contact_phone = $faker->phoneNumber();
            $patient->address = $faker->address();
            $patient->status ='True';
            $patient->save();

                 
    // 'pet_name','powrent','breed','gender',
    // 'date_of_birth','contact_phone','address',
    // 'status'
        }
    }
}
