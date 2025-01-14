<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Maker;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
     public function index()
     {  
      $cars = Car::where('published_at', '<', now())
            ->orderBy('published_at' ,'desc')
            ->limit(30)
            ->get();

      return view('home.index', ['cars' => $cars]);

           
                         
     }



}
 // // Select all Cars
      // $cars = Car::get();


      // // Select Published Cars
      // $cars = Car::where('published_at', '!=', null)->get();


      //  // Select the first Car
      // $car = Car::first();


      // // Select Cars with a specific type
      // $cars = Car::where('car_type_id', 1)->get();
      
      // $car = Car::orderBy('published_at', 'desc')->get();
      
      // dump($car);



      // $car = new Car();
      // $car ->maker_id= 1;  
      // $car ->model_id= 1;   
      // $car ->year= 2024;   
      // $car ->price= 1582487;   
      // $car ->vin= 123547;   
      // $car ->mileage= 100000;   
      // $car ->car_type_id= 1;   
      // $car ->fuel_type_id= 1;   
      // $car ->user_id= 1;   
      // $car ->constituencies_id= 1;   
      // $car ->address= "kedong house valley road";   
      // $car ->phone= "+254710585296";   
      // $car ->description= null;   
      // $car ->published_at= now(); 
      // $car ->save(); 
      
      
      // $carData = [
      //       'maker_id' => 1,  
      //       'model_id' => 1,   
      //       'year' => 2021,   
      //       'price' => 10248700,   
      //       'vin' => 963547,   
      //       'mileage' => 850,   
      //       'car_type_id' => 1,   
      //       'fuel_type_id' => 1,   
      //       'user_id' => 1,   
      //       'constituencies_id' => 1,   
      //       'address' => "kedong house valley road",   
      //       'phone' => "+254710585296",   
      //       'description' => null,   
      //       'published_at' => now(), 

      // ];
      //approch 1
//      $car= Car::create($carData);


      // //approch 2
      // $car2 = new Car();
      // $car2->fill($carData);
      // $car2->save();

      // // //approch 3
      // $car3 = new Car($carData);
      // $car3->save();



      // Update Data on the database

      // $car = Car::find(1);
      // $car->price = 1000000;
      // $car->save();

      // update or create data on the database

      // $car = Car::updateOrCreate(
      //       ['id' => 1],
      //       ['price' => 1000000]);

      //  mass update
      // Car::where('published_at', null)
      //       ->where('user_id',1)
      //       ->update(['published_at' => now()]);
   

      // Delete Data from the database

            // $car = Car::find(1);
            // $car->delete();

      // mass Delete 
      // Car::destroy([2,3]);
       

      // // delete specific cars 
      // Car::where('published_at', null)
      //       ->where('user_id',1)
      //       ->delete();


      // Car::truncate();


      // $car = Car::find(1);

      // dd($car->favouriteUsers);

      // $user = User::find(1);

      // dd($user->favouriteCars);


      //   $maker = Maker::factory()->create();

      //   dd($maker);

      // User::factory()->count(10)->create();