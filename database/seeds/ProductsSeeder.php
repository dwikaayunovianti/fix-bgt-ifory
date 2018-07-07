<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $sapta = Category::create(['title'=>'Sapta']);
        $sapta->childs()->saveMany([
            new Category(['title'=>'Makanan']),
            new Category(['title'=>'Minuman'])
        ]);

        $stevia = Category::create(['title'=>'Stevia']);
        $stevia->childs()->saveMany([
            new Category(['title'=>'Food']),
            new Category(['title'=>'Drink'])
        ]);

        //simple product
        $makanan = Category::where('title', 'Makanan')->first();
        $minuman = Category::where('title', 'Minuman')->first();
        $sapta1 = Product::create([
            'name'=> 'Mie Ayam',
            'model'=> 'Mie ayam dengan bakso yang lezat',
            'weight'=>rand(1,3) *1000,
            'photo'=>'mie.jpg',
            'price'=> 12000]);


        $sapta2 = Product::create([
            'name'=> 'Gorengan',
            'model'=> 'tahu, tempe, molen, pisang yang gurih',
            'weight'=>rand(1,3) *1000,
            'photo'=>'gorengan.jpg',
            'price'=> 1000]);

        $sapta3 = Product::create([
            'name'=> 'Bom-Bom Bento',
            'model'=> 'aneka bento',
            'weight'=>rand(1,3) *1000,
            'photo'=>'bento.jpg',
            'price'=> 15000]);
        $sapta4 = Product::create([
            'name'=> 'Fresh Milk',
            'model'=> 'Minuman susu segar',
            'weight'=>rand(1,3) *1000,
            'photo'=>'freshmilk.png',
            'price'=> 10000]);
        $sapta5 = Product::create([
                'name'=> 'Your tea',
                'model'=> 'Your tea original, thai tea, green tea laltte segar',
                'weight'=>rand(1,3) *1000,
                'photo'=>'yourtea.jpg',
                'price'=> 5000]);

        $makanan->products()->saveMany([$sapta1, $sapta2, $sapta3]);
        $minuman->products()->saveMany([$sapta4, $sapta5]);

        $makanan = Category::where('title', 'Food ')->first();
        $minuman = Category::where('title', 'Drink')->first();

        $stevia1 = Product::create([
            'name'=>'Ayam geprek',
            'model'=>'Ayamm geprek rica, ayam geprek lada hitam',
            'photo'=>'geprek.jpg',
            'weight'=>rand(1,3) *1000,
            'price'=>12000]);

        $stevia2 = Product::create([
            'name'=>'Nasi Gudeg',
            'model'=>'Nasi gudeng ayam, nasi gudeg telor',
            'photo'=>'gudeg.jpg',
            'weight'=>rand(1,3) *1000,
            'price'=>13000]);

        $stevia3 = Product::create([
            'name'=>'Juice',
            'model'=>'Jus alpukat, jus jeruk, jus mangga',
            'photo'=>'jus.jpg',
            'weight'=>rand(1,3) *1000,
            'price'=>10000]);
        $stevia4 = Product::create([
            'name'=>'Warunk tea',
            'model'=>'lychee tea, mango tea, blackcurrent',
            'photo'=>'leci.jpg',
            'weight'=>rand(1,3) *1000,
            'price'=>4000]);
  
        $makanan->products()->saveMany([$stevia1, $stevia2]);
        $minuman->products()->saveMany([$stevia3, $stevia4]);

        //copy image simple to public folder
        $from =  database_path(). DIRECTORY_SEPARATOR. 'seeds'. DIRECTORY_SEPARATOR. 'img' .DIRECTORY_SEPARATOR;
        $to = public_path() .DIRECTORY_SEPARATOR. 'img'. DIRECTORY_SEPARATOR;
        File::copy($from. 'geprek.jpg', $to. 'geprek.jpg');
        File::copy($from. 'gudeg.jpg', $to. 'gudeg.jpg');
    }
}
