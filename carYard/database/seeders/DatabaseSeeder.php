<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarImage;
use App\Models\CarModel;
use App\Models\CarType;
use App\Models\Constituencies;
use App\Models\County;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Relationship;
use Illuminate\Database\Eloquent\Factories\Sequence;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        CarType::factory()
             ->sequence(

                    ['name'=> 'Sedan'],
                    ['name'=> 'SUV'],
                    ['name'=> 'Hatchback'],
                    ['name'=> 'Coupe'],
                    ['name'=> 'Convertible'],
                    ['name'=> 'Pickup Truck'],
                    ['name'=> 'Minivan'],
                    ['name'=> 'Station Wagon'],
                    ['name'=> 'Jeep 4by4'],
                    ['name'=> 'Crossover'],
                
                )
                -> count(10)
                ->create();


        FuelType::factory()
                ->sequence(
                    ['name'=> 'Gas'],
                    ['name'=> 'Petrol'],
                    ['name'=> 'Diesel'],
                    ['name'=> 'Hybrid'],
                    ['name'=> 'Electric'],
                
               )
                -> count(5)
                ->create();

                $county = [
                    'Nairobi' => ['Westlands', 'Dagoretti North', 'Lang\'ata', 'Embakasi East', 'Kasarani', 'Ruaraka'],
                    'Mombasa' => ['Nyali', 'Mvita', 'Likoni', 'Kisauni', 'Changamwe', 'Jomvu'],
                    'Kiambu' => ['Gatundu South', 'Kiambu Town', 'Ruiru', 'Thika Town', 'Kabete', 'Juja'],
                    'Kisumu' => ['Kisumu East', 'Kisumu West', 'Kisumu Central', 'Seme', 'Nyando', 'Muhoroni'],
                    'Nakuru' => ['Nakuru Town East', 'Nakuru Town West', 'Bahati', 'Subukia', 'Naivasha', 'Gilgil'],
                    'Machakos' => ['Machakos Town', 'Masinga', 'Yatta', 'Kangundo', 'Mwala', 'Matungulu'],
                    'Uasin Gishu' => ['Ainabkoi', 'Kapseret', 'Kesses', 'Moiben', 'Soy', 'Turbo'],
                    'Meru' => ['North Imenti', 'South Imenti', 'Central Imenti', 'Buuri', 'Tigania East', 'Tigania West'],
                    'Kakamega' => ['Lurambi', 'Ikolomani', 'Malava', 'Mumias East', 'Mumias West', 'Navakholo'],
                    'Bungoma' => ['Kanduyi', 'Bumula', 'Kimilili', 'Sirisia', 'Tongaren', 'Webuye East']
                ];

                foreach ($county as $countyName => $Constituencies) {
                    County::factory()
                        ->state(['name' => $countyName])
                        ->has(
                            Constituencies::factory()
                                ->count(count($Constituencies))
                                ->sequence(...array_map(fn($city) => ['name' => $city], $Constituencies))
                        )
                        ->create();
                }

            $makers = [
                'Toyota' => ['Corolla', 'Camry', 'RAV4', 'Land Cruiser', 'Hilux', 'Yaris'],
                'Honda' => ['Civic', 'Accord', 'CR-V', 'Fit', 'Pilot', 'HR-V'],
                'Ford' => ['F-150', 'Mustang', 'Explorer', 'Escape', 'Edge', 'Fusion'],
                'BMW' => ['3 Series', '5 Series', '7 Series', 'X1', 'X5', 'X7'],
                'Mercedes-Benz' => ['C-Class', 'E-Class', 'S-Class', 'GLA', 'GLC', 'GLE'],
                'Audi' => ['A3', 'A4', 'A6', 'Q3', 'Q5', 'Q7'],
                'Nissan' => ['Altima', 'Sentra', 'Rogue', 'Murano', 'Pathfinder', 'Versa'],
                'Hyundai' => ['Elantra', 'Sonata', 'Tucson', 'Santa Fe', 'Palisade', 'Kona'],
                'Chevrolet' => ['Silverado', 'Malibu', 'Equinox', 'Tahoe', 'Suburban', 'Camaro'],
                'Volkswagen' => ['Golf', 'Passat', 'Tiguan', 'Jetta', 'Atlas', 'Beetle']
            ];

            foreach($makers as $maker => $models){
                Maker::factory()
                    ->state(['name'=> $maker])
                    ->has(
                        CarModel::factory()
                        ->count(count($models))
                        ->sequence(...array_map(fn($model)=>['name'=> $model], $models))
                    )
                 ->create();
            }


            // create 3 users first, cars with images and features 

            User::factory()
                ->count(3)
                ->create();


       // and cthen create 2 more user 

        User::factory()
            ->count(2)

        ->has(
              Car::factory()
              ->count(50)
              ->has(
                CarImage:: factory()
                ->count(5)
                ->sequence(fn(Sequence $sequence)=>
                 ['position' =>$sequence->index + 1])

              )
              ->hasFeatures(),      
               'favouriteCars'
        )  
            ->create();
          






    }
}
