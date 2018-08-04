<?php

use Illuminate\Database\Seeder;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apartments')->truncate();
        DB::table('apartments')->insert([
            [
                'id' => '1',
                'name' => 'Home 1',
                'address' => 'Detect Tower, no.8 Ton That Thuyet Str, Hanoi',
                'price' => '20000000',
                'description' => '90 m2 light pink color',
                'detail' => '1 living room, 3 bedrooms, 3 bathrooms, 1 kitchen',
                'thumbnail' => 'http://doxenandhue.com/wp-content/uploads/2018/07/luxury-apartments-for-sale-barcelona-one-pedralbes-house.jpg',
            ],

            [
                'id' => '2',
                'name' => 'Home 2',
                'address' => 'Detect Tower, no.8 Ton That Thuyet Str, Hanoi',
                'price' => '30000000',
                'description' => '90 m2 light pink color',
                'detail' => '1 living room, 3 bedrooms, 3 bathrooms, 1 kitchen',
                'thumbnail' => 'https://exp.cdn-hotels.com/hotels/18000000/17930000/17929200/17929138/c011c73d_z.jpg',
            ],

            [
                'id' => '3',
                'name' => 'Home 3',
                'address' => 'Detect Tower, no.8 Ton That Thuyet Str, Hanoi',
                'price' => '26470000',
                'description' => '90 m2 light pink color',
                'detail' => '1 living room, 3 bedrooms, 3 bathrooms, 1 kitchen',
                'thumbnail' => 'https://q-xx.bstatic.com/images/hotel/max1024x768/828/82898480.jpg',
            ],

            [
                'id' => '4',
                'name' => 'Home 4',
                'address' => 'Detect Tower, no.8 Ton That Thuyet Str, Hanoi',
                'price' => '17170000',
                'description' => '90 m2 light pink color',
                'detail' => '1 living room, 3 bedrooms, 3 bathrooms, 1 kitchen',
                'thumbnail' => 'https://exp.cdn-hotels.com/hotels/13000000/12780000/12777700/12777609/12777609_6_z.jpg',
            ],

            [
                'id' => '5',
                'name' => 'Home 5',
                'address' => 'Detect Tower, no.8 Ton That Thuyet Str, Hanoi',
                'price' => '21510000',
                'description' => '90 m2 light pink color',
                'detail' => '1 living room, 3 bedrooms, 3 bathrooms, 1 kitchen',
                'thumbnail' => 'https://t-ec.bstatic.com/images/hotel/max1024x768/637/63777551.jpg',
            ],

            [
                'id' => '6',
                'name' => 'Home 6',
                'address' => 'Detect Tower, no.8 Ton That Thuyet Str, Hanoi',
                'price' => '21200000',
                'description' => '90 m2 light pink color',
                'detail' => '1 living room, 3 bedrooms, 3 bathrooms, 1 kitchen',
                'thumbnail' => 'https://07f138315bb5e97f9e43-31068357019044cca7c8e84d92de0d99.ssl.cf3.rackcdn.com/640x480/56587_11491_001.jpg',
            ],

            [
                'id' => '7',
                'name' => 'Home 7',
                'address' => 'Detect Tower, no.8 Ton That Thuyet Str, Hanoi',
                'price' => '17700000',
                'description' => '90 m2 light pink color',
                'detail' => '1 living room, 3 bedrooms, 3 bathrooms, 1 kitchen',
                'thumbnail' => 'https://www.airtasker.com/blog/wp-content/uploads/2016/08/chic-studio-apartment.jpeg',
            ],

            [
                'id' => '8',
                'name' => 'Home 8',
                'address' => 'Detect Tower, no.8 Ton That Thuyet Str, Hanoi',
                'price' => '19200000',
                'description' => '90 m2 light pink color',
                'detail' => '1 living room, 3 bedrooms, 3 bathrooms, 1 kitchen',
                'thumbnail' => 'https://novabudapest.com/content/nova-front-17-0698.jpg',
            ],

            [
                'id' => '9',
                'name' => 'Home 9',
                'address' => 'Detect Tower, no.8 Ton That Thuyet Str, Hanoi',
                'price' => '28100000',
                'description' => '90 m2 light pink color',
                'detail' => '1 living room, 3 bedrooms, 3 bathrooms, 1 kitchen',
                'thumbnail' => 'https://media-cdn.tripadvisor.com/media/photo-s/06/26/74/eb/globales-nova-apartamentos.jpg',
            ],

            [
                'id' => '10',
                'name' => 'Home 10',
                'address' => 'Detect Tower, no.8 Ton That Thuyet Str, Hanoi',
                'price' => '32500000',
                'description' => '90 m2 light pink color',
                'detail' => '1 living room, 3 bedrooms, 3 bathrooms, 1 kitchen',
                'thumbnail' => 'https://media-cdn.tripadvisor.com/media/photo-s/0f/1b/85/07/biz-apartment-hammarby.jpg',
            ],

            [
                'id' => '11',
                'name' => 'Home 11',
                'address' => 'Detect Tower, no.8 Ton That Thuyet Str, Hanoi',
                'price' => '20800000',
                'description' => '90 m2 light pink color',
                'detail' => '1 living room, 3 bedrooms, 3 bathrooms, 1 kitchen',
                'thumbnail' => 'https://cdnblog.rentcafe.com/blog/wp-content/uploads/2016/06/Inman-Quarter-Apartments-in-Atlanta-via-RENTCafe.jpg',
            ],

            [
                'id' => '12',
                'name' => 'Home 12',
                'address' => 'Detect Tower, no.8 Ton That Thuyet Str, Hanoi',
                'price' => '20500000',
                'description' => '90 m2 light pink color',
                'detail' => '1 living room, 3 bedrooms, 3 bathrooms, 1 kitchen',
                'thumbnail' => 'http://www4.pictures.lonny.com/mp/WB1HfJVOZVox.jpg',
            ],

            [
                'id' => '13',
                'name' => 'Home 13',
                'address' => 'Detect Tower, no.8 Ton That Thuyet Str, Hanoi',
                'price' => '18000000',
                'description' => '90 m2 light pink color',
                'detail' => '1 living room, 3 bedrooms, 3 bathrooms, 1 kitchen',
                'thumbnail' => 'https://media.brstatic.com/2018/02/15121554/buy-a-home-condo-or-townhouse-first.jpg',
            ],

            [
                'id' => '14',
                'name' => 'Home 14',
                'address' => 'Detect Tower, no.8 Ton That Thuyet Str, Hanoi',
                'price' => '20000000',
                'description' => '90 m2 light pink color',
                'detail' => '1 living room, 3 bedrooms, 3 bathrooms, 1 kitchen',
                'thumbnail' => 'https://s-ec.bstatic.com/images/hotel/max1024x768/406/40670153.jpg',
            ],

            [
                'id' => '15',
                'name' => 'Home 15',
                'address' => 'Detect Tower, no.8 Ton That Thuyet Str, Hanoi',
                'price' => '21500000',
                'description' => '90 m2 light pink color',
                'detail' => '1 living room, 3 bedrooms, 3 bathrooms, 1 kitchen',
                'thumbnail' => 'https://www.visitzakopane.pl/data/modules/apartamenty/840px/apartament_207_9034_Kierpcowka3a.jpg',
            ],

            [
                'id' => '16',
                'name' => 'Home 16',
                'address' => 'Detect Tower, no.8 Ton That Thuyet Str, Hanoi',
                'price' => '18900000',
                'description' => '90 m2 light pink color',
                'detail' => '1 living room, 3 bedrooms, 3 bathrooms, 1 kitchen',
                'thumbnail' => 'https://apartmentshoustonenergycorridor.com/wp-content/uploads/2018/04/Apartment-Rentals-Houston-living-room_cir.jpg',
            ],

            [
                'id' => '17',
                'name' => 'Home 17',
                'address' => 'Detect Tower, no.8 Ton That Thuyet Str, Hanoi',
                'price' => '19500000',
                'description' => '90 m2 light pink color',
                'detail' => '1 living room, 3 bedrooms, 3 bathrooms, 1 kitchen',
                'thumbnail' => 'http://curiouscasa.com/wp-content/uploads/2017/10/The-Nob-Hill-Apartments-B86-In-Modern-Small-Home-Decor-Inspiration-with-The-Nob-Hill-Apartments.jpg',
            ],

            [
                'id' => '18',
                'name' => 'Home 18',
                'address' => 'Detect Tower, no.8 Ton That Thuyet Str, Hanoi',
                'price' => '20000000',
                'description' => '90 m2 light pink color',
                'detail' => '1 living room, 3 bedrooms, 3 bathrooms, 1 kitchen',
                'thumbnail' => 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/carrie-bradshaw-apartment-2018-1528293962.jpg',
            ],

            [
                'id' => '19',
                'name' => 'Home 19',
                'address' => 'Detect Tower, no.8 Ton That Thuyet Str, Hanoi',
                'price' => '25000000',
                'description' => '90 m2 light pink color',
                'detail' => '1 living room, 3 bedrooms, 3 bathrooms, 1 kitchen',
                'thumbnail' => 'https://www.chisinau-apartments.com/uploads/apartment_images/apartment-id-1/4-Chisinau-Apartments.com-Ap_1.jpg',
            ],

            [
                'id' => '20',
                'name' => 'Home 20',
                'address' => 'Detect Tower, no.8 Ton That Thuyet Str, Hanoi',
                'price' => '15000000',
                'description' => '90 m2 light pink color',
                'detail' => '1 living room, 3 bedrooms, 3 bathrooms, 1 kitchen',
                'thumbnail' => 'https://www.byronbayholidayrentals.com/sites/default/files/Quiksilver%20Apartments%20-%20The%20Pass%20-%20apartment.jpg',
            ],
        ]);
    }
}
