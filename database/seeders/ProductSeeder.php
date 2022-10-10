<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //fack data
        $product = new \App\Models\Product([

'name'=>'product01',
'detail'=> 'detail 01 add product'
        ]);
        $product->save();
        $product = new \App\Models\Product([

            'name'=>'product02',
            'detail'=> 'detail 02 add product'
                    ]);
                    $product->save();
        $product = new \App\Models\Product([

                        'name'=>'product03',
                        'detail'=> 'detail 03 add product'
                                ]);
                                $product->save();
         $product = new \App\Models\Product([

                                    'name'=>'product04',
                                    'detail'=> 'detail 04 add product'
                                            ]);
$product->save();


    }
}
