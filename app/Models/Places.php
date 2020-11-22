<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

use App\Models\Simple\JSONModel;


class Places extends  JSONModel{
    
protected $origin = WRITEPATH . 'data/carData.json';
protected $keyField = 'id';
protected $validationRules = [];

    //mock data : an array of records
   /* protected $data = [
        '1' => [
            'Country_from' => 'Japanese',
            'id' => 1,
            'name' => 'Nissan 370Z（Z34）',
            'Country_place' => 'Japen',
            'description' => 'The new 370Z USES the VQ37VHR powertrain -- a 3.7-liter V6 that delivers 332 horsepower and provides fuel economy of 26 MPG on the highway.
The 332 HP power will be transferred to the rear wheels of the 370Z through a 7 speed automatic transmission or a 6 speed manual transmission.
More significantly, the 6-speed 370Z is the first car with a manual transmission and a matching system that synchronizes the speed of the low gear and speeds from 0-100km in 4.8 seconds!',
            'link' => 'https://www.nissanusa.com/vehicles/sports-cars/370z-coupe.html',
            'hoursepower' => '332 horsepower',
            'engine_type' => '3.7L （v6）',
            'gearbox' => 'CVT(analog 6th gear)',
            'acceleration_time' => '4.8s',
            'image' => 'Nissan.jpg',
        ],
        '2' => [
            'Country_from' => 'German',
            'id' => 2,
            'name' => 'Porsche 911 Turbo S Cabriolet（997）',
            'Country_place' => 'Germany',
            'description' => 'The Porsche 911 series, designed by Ferdinand Alexander Porsche, is a legendary model of Porsche.
Its long history and every classic car have had a profound impact on generations.',
            'link' => 'https://www.porsche.cn/china/zh/models/911/911-turbo-models/911-turbo-s-cabriolet/',
            'hoursepower' => '560 horsepower',
            'engine_type' => '3.8L （Horizontally opposed 6 cylinders）',
            'gearbox' => '7-Speed Dual clutch transmission (PDK)',
            'acceleration_time' => '3.1s',
            'image' => 'Porsche.jpg',
        ],
        '3' => [
            'Country_from' => 'Italian',
            'id' => 3,
            'name' => 'Lamborghini Gallardo LP560-4 Spyder',
            'Country_place' => 'Italy',
            'description' => 'Gallardo LP560-4 Spyder is equipped with an all-aluminum alloy 5.2-liter V10 engine. With the help of in-cylinder direct injection and variable valve timing, the Gallardo LP560-4 Spyder can produce 560 maximum horsepower at 8000rpm and complete 0-100km/h acceleration sprint in 4 seconds, with a top speed of up to 324km/h.
The 5.2-liter Engine of the LP560-4 Spyder is still based on the 5.0-liter Gallardo Spyder V10, but with the expansion of the exhaust volume and the change to an in-cylinder direct injection system, the V10 engine not only provides more power performance, but also meets the requirements of environmental protection and low fuel consumption.',
            'link' => 'https://www.lamborghini.com/cn-en/%E8%BD%A6%E5%9E%8B/huracan/huracan-evo-spyder',
            'hoursepower' => '560 horsepower',
            'engine_type' => '5.2L （v10）',
            'gearbox' => 'e-gear （Exclusive technology）',
            'acceleration_time' => '4s',
            'image' => 'Lamborghini.jpg',
        ],
        '4' => [
            'Country_from' => 'American',
            'id' => 4,
            'name' => 'Chevrolet Corvette ZO6',
            'Country_place' => 'America',
            'description' => 'Chevrolet Corvette is an American national treasure class supercar, is the most high-end supercar brand of GENERAL Motors.
Born in 1953, this series has spawned 7 generations of models, the latest of which is the C7 model. As an American-style supercar, the Corvette Z06 is of great value and is regarded as a classic in the world.
The 505Hp horsepower, 470LB-FT torque, and 7.0 super capacity (13 models), 0-100 in just 3.5 seconds, and a top speed of 320 km/h. Like the rest of the Corvette series, the  ‘Z06’ almost never-ending super rear acceleration is a perfect inheritance.',
            'link' => 'https://www.chevroleteurope.com/en/',
            'hoursepower' => '505 horsepower',
            'engine_type' => '7.0L v8',
            'gearbox' => '8AT or 7MT',
            'acceleration_time' => '3.5s',
            'image' => 'Chevrolet.jpg',
        ],
        '5' => [
            'Country_from' => 'American',
            'id' => 5,
            'name' => 'Ford GT-2006',
            'Country_place' => 'America',
            'description' => 'The Ford GT is a mid-rear-drive supercar owned by Ford. The new Ford GT sports car will be equipped with Michelin Pilot Sport Cup 2 tires.
Car is the appearance of the prototype of the 20th century‘s classic super car ford original GT40, from the appearance. 
The GT is almost completely recover original GT40 racing, ford GT using the 5.4 liter displacement after, to strengthen the mechanical turbocharged V6 engine, the strong engine, speed only when 3750 revolutions can broke out in 678), a powerful torque, which makes the 550 horses (6500 RPM) monster to accelerate from 0 to 160 kilometers per hour in just 7.4 seconds, top speed by electronic speed limit at 330 kilometers per hour.',
            'link' => 'https://www.ford.com/performance/gt/',
            'hoursepower' => '550 horsepower',
            'engine_type' => '5.4L v8',
            'gearbox' => '6MT',
            'acceleration_time' => '3.2s',
            'image' => 'Ford.jpg',
        ],
        '6' => [
            'Country_from' => 'Swedish',
            'id' => 6,
            'name' => 'Koenigsegg CCX',
            'Country_place' => 'Sweden',
            'description' => 'Official figures have been released and the answer is: "Koenigsegg CCX is no match for Veyron in the race to the top."
Koenigsegg said the CCX’s ultimate speed limit was no more than 395 km/h, while Bugatti claimed that the Veyron could reach 407 km/h and that the CCX‘s 100-km sprint speed (3.2 seconds) was a step behind.
But Koenigsegg also had his killer card: an excellent power-to-weight ratio.
The car weighs 1,280 kilograms and has a 4.6-liter engine with a maximum power of 806 horsepower and 920 nm of torque.
The CCX can go from a standstill to a quarter mile in 9.9 seconds and reach the finish line at 235 km/h.
It only takes 31 meters to go from 100 kilometers per hour to a complete standstill.',
            'link' => 'https://www.koenigsegg.com/',
            'hoursepower' => '806 horsepower',
            'engine_type' => '4.6L v8',
            'gearbox' => '6MT',
            'acceleration_time' => '3.2s',
            'image' => 'Koenigsegg.jpg',
        ],
        '7' => [
            'Country_from' => 'France',
            'id' => 7,
            'name' => 'Bugatti Veyron 16.4（Grand Sport）',
            'Country_place' => 'French',
            'description' => 'The Veyron 16.4 Grand Sport has the same mechanical infrastructure as the Coupe’s Veyron 16.4, with an 8.0-liter W16 engine that delivers 1,001 horsepower and the same 407 km/h when the roof is closed and 360 km/h when the roof is open.
And the fan can remove the receive top independently, using the lightweight transparent PC plastic material. 
In addition,in order to make up the body rigidity, Bugatti specially in the frame structure of carbon fiber, the side beams, the transmission system through strengthened structure and part B column. 
In order to increase the vehicle‘s ability to resist distortion, to give the passengers, the most complete security protection.',
            'link' => 'https://www.bugatti.com/',
            'hoursepower' => '1001 horsepower',
            'engine_type' => '8.0L w16',
            'gearbox' => 'DSG dual clutch transmission',
            'acceleration_time' => '2.5s',
            'image' => 'Bugatti.jpg',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }
*/
}
