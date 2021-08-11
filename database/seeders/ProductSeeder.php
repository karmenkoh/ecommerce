<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $products = [
          [
              'name' => 'Casio G-SHOCK',
              'description' => 'Casio G-SHOCK',
              'image' => 'https://www.laguardajoiers.com/media/catalog/product/cache/3/image/3c39554054c21533f2a8cc939c033642/g/w/gw-b5600bc-1ber.jpg',
              'price' => 153
          ],
          [
              'name' => 'Fossil',
              'description' => 'Leather Watch For Men',
              'image' => 'https://fossil.scene7.com/is/image/FossilPartners/ME3098-alt?$sfcc_fos_medium$',
              'price' => 500
          ],
          [
              'name' => 'Apple Watch Nike Series 6',
              'description' => '44mm Silver Aluminium Case',
              'image' => 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/44-alum-silver-sport-platinum-nike-6s-nc?wid=2000&hei=2000&fmt=jpeg&qlt=95&.v=1599811571000',
              'price' => 800
          ],
          [
              'name' => 'Mi Band 6',
              'description' => 'Mi Band 6',
              'image' => 'https://m.media-amazon.com/images/I/51cB1FKYhML._AC_SY606_.jpg',
              'price' => 80
          ]
      ];

      foreach ($products as $key => $value) {
          Product::create($value);
      }
    }
}
