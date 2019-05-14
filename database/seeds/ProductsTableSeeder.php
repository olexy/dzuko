<?php

use dzuko\User;
use dzuko\Product;
use dzuko\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_1 = Category::create([
            'name' => 'Fashion'
        ]);
        $category_2 = Category::create([
            'name' => 'Phones and Computers'
        ]);
        $category_3 = Category::create([
            'name' => 'Food and Groceries'
        ]);
        $category_4 = Category::create([
            'name' => 'Beauty and Health'
        ]);
        $category_5 = Category::create([
            'name' => 'Automotive'
        ]);
        $category_6 = Category::create([
            'name' => 'Interiors and Home'
        ]);
        $category_7 = Category::create([
            'name' => 'Books and Audible'
        ]);
        $category_8 = Category::create([
            'name' => 'Toys, Kids and Baby'
        ]);
        $category_9 = Category::create([
            'name' => 'Services'
        ]);
        $category_10 = Category::create([
            'name' => 'Sports and Outdoor'
        ]);

        $buyer_1 = User::create([
            'name' => 'John Smith',
            'email' => 'jsmith@fake.com',
            'password' => Hash::make('password'),
            'role' => 'buyer'
        ]);

        $buyer_2 = User::create([
            'name' => 'Robert E. Lee',
            'email' => 'rlee@fake.com',
            'password' => Hash::make('password'),
            'role' => 'buyer'
        ]);

        $buyer_3 = User::create([
            'name' => 'Andrew Miller',
            'email' => 'amiller@fake.com',
            'password' => Hash::make('password'),
            'role' => 'buyer'
        ]);

        $buyer_4 = User::create([
            'name' => 'Kaddy Steve',
            'email' => 'ksteve@fake.com',
            'password' => Hash::make('password'),
            'role' => 'buyer'
        ]);

        $buyer_5 = User::create([
            'name' => 'Dembe Raymond',
            'email' => 'draymond@fake.com',
            'password' => Hash::make('password'),
            'role' => 'buyer'
        ]);




        $product_1 = Product::create([
            'name' => 'FERO A4001 PLUS',

            'category_id' => $category_2->id,

            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',

            'price' => 11000,

            'image' => 'storage/products/product_1.jpg'
        ]);

        $product_2 = Product::create([
            'name' => 'INDIGO RD SUEDE, DARK BROWN BLOCK HEEL SANDALS ',

            'category_id' => $category_1->id,

            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',

            'price' => 21000,

            'image' => 'storage/products/product_2.jpg'
        ]);

        $product_3 = Product::create([
            'name' => 'Rainbow Rolls Salmon & Avocado Sushi',

            'category_id' => $category_3->id,

            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',

            'price' => 2500,

            'image' => 'storage/products/product_3.png'
        ]);

        $product_4 = Product::create([
            'name' => 'Botanics Organic Facial Oil - 100% Organic',

            'category_id' => $category_4->id,

            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',

            'price' => 115000,

            'image' => 'storage/products/product_4.jpg'
        ]);

        $product_5 = Product::create([
            'name' => 'Car Scratch Remover Repair Polishing Wax Paint Care',

            'category_id' => $category_5->id,

            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',

            'price' => 8000,

            'image' => 'storage/products/product_5.png'
        ]);

        $product_6 = Product::create([
            'name' => 'SYINIX CHEST FREEZER - 200L - Fz60f01-w',

            'category_id' => $category_6->id,

            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',

            'price' => 76499,


            'image' => 'storage/products/product_6.png'
        ]);

        $product_7 = Product::create([
            'name' => 'How To Get The Best From That Book',

            'category_id' => $category_7->id,

            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',

            'price' => 500,

            'image' => 'storage/products/product_7.png'
        ]);

        $product_8 = Product::create([
            'name' => 'Nickelodeon Little Boys Tmnt Weapon 2 PC Set',

            'category_id' => $category_8->id,

            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',

            'price' => 6200,

            'image' => 'storage/products/product_8.jpg'
        ]);

        $product_9 = Product::create([
            'name' => 'Small Chops for 50 Guests',

            'category_id' => $category_9->id,

            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',

            'price' => 35000,

            'image' => 'storage/products/product_9.jpg'
        ]);

        $product_10 = Product::create([
            'name' => '2018 World Cup Nigeria Home & Away Jerseys',

            'category_id' => $category_10->id,

            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',

            'price' => 9999,

            'image' => 'storage/products/product_10.jpg'
        ]);
    }
}
