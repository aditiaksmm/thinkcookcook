<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Home;
use App\About;
use App\Lainnya;
use App\Store;
use App\Jamker;
use App\kategori;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
$kategori = kategori::create([
            'nama_kategori' => 'Pants']);

$kategori = kategori::create([
            'nama_kategori' => 'Bag']);

$kategori = kategori::create([
            'nama_kategori' => 'T-Shirt']);

$kategori = kategori::create([
            'nama_kategori' => 'Caps']);

$kategori = kategori::create([
            'nama_kategori' => 'Jacket']);






    $Product1 = Product::create([
            'kategori_id' => '3',
            'nama_product' =>'Bicycat ',
            'bahan'=>' Catton',
            'ukuran'=>' L',
            'warna'=>'Navy',
            'cover'=>'e49ed9716052a8a5250dccea005dbf75.jpg'
            ]);

    $Product2 = Product::create([
            'kategori_id' => '3',
            'nama_product' =>'El Drago ',
            'bahan'=>'Catton ',
            'ukuran'=>'L ',
            'warna'=>'Navy',
            'cover'=>'d78a7a46867d748fa3f48d049e324d83.jpg'
            ]);


    $Product3= Product::create([
            'kategori_id' => '3',
            'nama_product' =>' Asteroid Owl',
            'bahan'=>' Catton',
            'ukuran'=>' L',
            'warna'=>'Black',
            'cover'=>'66788615a9ec0c0e4fc1546bae8c5f34.jpg'
            ]);


    $Product4 = Product::create([
            'kategori_id' => '5',
            'nama_product' =>' Supreme x Rip N Dip',
            'bahan'=>' Cotton Combed',
            'ukuran'=>' M',
            'warna'=>'Black',
            'cover'=>'97698801de658a2055269f018cfaa622.jpg'
            ]);


    $Product5 = Product::create([
            'kategori_id' => '5',
            'nama_product' =>' Nermal S.Tompson',
            'bahan'=>' Cotton Combed',
            'ukuran'=>'L ',
            'warna'=>'Yellow',
            'cover'=>'7eec602153745e5d20379d9a8fff80f8.jpg'
            ]);


    $Product6 = Product::create([
            'kategori_id' => '2',
            'nama_product' =>' Load Nermal',
            'bahan'=>'Kanvas ',
            'ukuran'=>'30cm - 60 cm ',
            'warna'=>'Black and Brown',
            'cover'=>'dbd4674212de1a47cf1e76bc1bfd29c9.jpg'
            ]);


    $Product7 = Product::create([
            'kategori_id' => '2',
            'nama_product' =>' Tote Bag Dip',
            'bahan'=>'Kanvas ',
            'ukuran'=>'30cm - 60 cm ',
            'warna'=>'Cream',
            'cover'=>'db08b69fa04734d0190725f3f8f5fb6f.jpg'
            ]);


    $Product8 = Product::create([
            'kategori_id' => '2',
            'nama_product' =>'Castanza Duffle Bag ',
            'bahan'=>'Cotton Kanvas ',
            'ukuran'=>' 30cm - 60 cm',
            'warna'=>'Black',
            'cover'=>'ada213793a262efccfb9778ce14e16d3.jpg'
            ]);


    $Product9 = Product::create([
            'kategori_id' => '4',
            'nama_product' =>'Rip N Dip Flower ',
            'bahan'=>'Drill ',
            'ukuran'=>'7 ',
            'warna'=>'Pink',
            'cover'=>'6e8bc3ef84c1e8086c3df937d7cc0921.jpg'
            ]);


    $Product10 = Product::create([
            'kategori_id' => '4',
            'nama_product' =>'Five Panel Army ',
            'bahan'=>' Drill',
            'ukuran'=>'7 ',
            'warna'=>'Navy',
            'cover'=>'ef629772e69abf0aa5a88aff028311b7.jpg'
            ]);


    $Product11 = Product::create([
            'kategori_id' => '4',
            'nama_product' =>'Trucky Typo ',
            'bahan'=>'Drill ',
            'ukuran'=>' 7',
            'warna'=>'Black and White',
            'cover'=>'f261fe546794f64153c814d5789b096c.jpg'
            ]);




    $Product12 = Product::create([
            'kategori_id' => '1',
            'nama_product' =>'Camo Sweet',
            'bahan'=>'Cotton Kanvas ',
            'ukuran'=>' 41',
            'warna'=>'Purple',
            'cover'=>'e436cdb8ead884404787aff5452afb5b.jpg '
            ]);



    $Product13 = Product::create([
            'kategori_id' => '1',
            'nama_product' =>'Peek A Nermal',
            'bahan'=>'Cotton ',
            'ukuran'=>' 41',
            'warna'=>' Gray',
            'cover'=>'3056ee010618e161b2c867f0259e50a2.jpg '
            ]);

    $Product14 = Product::create([
            'kategori_id' => '5',
            'nama_product' =>' Rip N Dip Denim',
            'bahan'=>'Jeans ',
            'ukuran'=>'L ',
            'warna'=>'Black',
            'cover'=>'2d6e55a74ebfcaef26ae5ab851701821.jpg'
            ]);




             $Home = Home::create([
            'textkecilhd' => 'WELCOME',
            'textbesarhd' =>'THINKCOOKCOOK',
            'cover'=>'8e6b9c063673d92e5ce896738d348074.jpg',
            'textkecilboldbd'=>'CLOTHHINGANS',
            'textbesarbd'=>'THINKCOOKCOOK',
            'textkecilbd'=>'<!DOCTYPE html>
							<html>
							<head>
							</head>
							<body>
							<p>Every cup of our quality artisan coffee starts with locally sourced, hand picked ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning routine - we guarantee it!</p>
								</body>
								</html>',
            'textkecilboldft'=>'FREE SHIPPING WORLDWIDE WHEN YOU JOIN OUR MAILING LIST',
            'textbesarft'=>'DISC 20% ',
            'textkecilft'=>'<!DOCTYPE html>
                            <html>
                            <head>
                            </head>
                            <body>
                            <p>WE LOVE T-Shirt</p>
                            </body>
                            </html>'
            ]);



                $About = About::create([
            'cover'=>'3cbc478ce406d405c1da3c5e7d7d3813.jpg',
            'textkecilbold' => 'About Our Distro',
            'textbesar' => 'Thinkcookcook',
            'textkecil' => '<!DOCTYPE html>
							<html>
							<head>
							</head>
							<body>
							<p>“Eventually we grew to something unexpected, something amazing, and what we consider the next level for our business with raving reviews, and realized our calling was definitely T-shirts.”</p>
							<p class="mb-0">We guarantee that you will fall in&nbsp;<em>lust</em>&nbsp;with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.</p>
							</body>
							</html>'
            ]);


                 $Store = Store::create([
            'textkecilatas'=>'KUY',
            'textbesaratas'=>'WE ARE OPEN',
            'Senin'=>'09.00–20.00',
            'Selasa'=>'09.00–20.00',
            'Rabu'=>'09.00–20.00',
            'Kamis'=>'09.00–20.00',
            'Jumat'=>'Closed',
            'Sabtu'=>'09.00–20.00',
            'Minggu'=>'09.00–20.00',
            'cover'=>'6de06d1dc373fafa0f0d78327b6e43c2.jpg',
            'textkecilbold' => 'quality is number ONE',
            'textbesar' => 'ABOUT US',
            'textkecil' => '<!DOCTYPE html>
							<html>
							<head>
							</head>
							<body>
							<p>Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.</p>
							<p class="mb-0">We guarantee that you will fall in <em>lust</em> with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time</p>
							</body>
							</html>'
            ]);


                 $Lainnya = Lainnya::create([
            'cover'=>'6978304e8825a510b7bc0c9cdbd69627.jpg ',
            'notlp'=>'(022) 9090-9292 ',
            'line' => '@thinkcookcook (Dont Forget To Use @)',
            'email' => 'thinkcookcookworld@gmail.com',
            'alamat' => 'Jl. Pejompongan Baru No.35, Bend. Hilir, Tanah Abang,Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10210'
            ]);


    }
}
