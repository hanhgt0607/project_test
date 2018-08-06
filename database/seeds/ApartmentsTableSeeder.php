<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'id'=>1,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>'2000000000000',
                'general_information'=>'Nhà đẹp giá rẻ',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyTiuLen-EBZaNXrUgNDXgoLVQDysl1jIAUKdpu3YGHyQ7sK-O0w',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id'=>2,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>'2000000000000',
                'general_information'=>'Nhà đẹp giá rẻ',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyTiuLen-EBZaNXrUgNDXgoLVQDysl1jIAUKdpu3YGHyQ7sK-O0w',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id'=>3,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>'2000000000000',
                'general_information'=>'Nhà đẹp giá rẻ',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyTiuLen-EBZaNXrUgNDXgoLVQDysl1jIAUKdpu3YGHyQ7sK-O0w',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id'=>4,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>'2000000000000',
                'general_information'=>'Nhà đẹp giá rẻ',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyTiuLen-EBZaNXrUgNDXgoLVQDysl1jIAUKdpu3YGHyQ7sK-O0w',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id'=>5,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>'2000000000000',
                'general_information'=>'Nhà đẹp giá rẻ',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyTiuLen-EBZaNXrUgNDXgoLVQDysl1jIAUKdpu3YGHyQ7sK-O0w',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id'=>6,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>'2000000000000',
                'general_information'=>'Nhà đẹp giá rẻ',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyTiuLen-EBZaNXrUgNDXgoLVQDysl1jIAUKdpu3YGHyQ7sK-O0w',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id'=>7,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>'2000000000000',
                'general_information'=>'Nhà đẹp giá rẻ',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyTiuLen-EBZaNXrUgNDXgoLVQDysl1jIAUKdpu3YGHyQ7sK-O0w',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id'=>8,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>'2000000000000',
                'general_information'=>'Nhà đẹp giá rẻ',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyTiuLen-EBZaNXrUgNDXgoLVQDysl1jIAUKdpu3YGHyQ7sK-O0w',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id'=>9,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>'2000000000000',
                'general_information'=>'Nhà đẹp giá rẻ',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyTiuLen-EBZaNXrUgNDXgoLVQDysl1jIAUKdpu3YGHyQ7sK-O0w',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id'=>10,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>'2000000000000',
                'general_information'=>'Nhà đẹp giá rẻ',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyTiuLen-EBZaNXrUgNDXgoLVQDysl1jIAUKdpu3YGHyQ7sK-O0w',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id'=>11,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>'2000000000000',
                'general_information'=>'Nhà đẹp giá rẻ',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyTiuLen-EBZaNXrUgNDXgoLVQDysl1jIAUKdpu3YGHyQ7sK-O0w',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id'=>12,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>'2000000000000',
                'general_information'=>'Nhà đẹp giá rẻ',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyTiuLen-EBZaNXrUgNDXgoLVQDysl1jIAUKdpu3YGHyQ7sK-O0w',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id'=>13,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>'2000000000000',
                'general_information'=>'Nhà đẹp giá rẻ',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyTiuLen-EBZaNXrUgNDXgoLVQDysl1jIAUKdpu3YGHyQ7sK-O0w',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id'=>14,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>'2000000000000',
                'general_information'=>'Nhà đẹp giá rẻ',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyTiuLen-EBZaNXrUgNDXgoLVQDysl1jIAUKdpu3YGHyQ7sK-O0w',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id'=>15,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>'2000000000000',
                'general_information'=>'Nhà đẹp giá rẻ',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyTiuLen-EBZaNXrUgNDXgoLVQDysl1jIAUKdpu3YGHyQ7sK-O0w',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id'=>16,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>'2000000000000',
                'general_information'=>'Nhà đẹp giá rẻ',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyTiuLen-EBZaNXrUgNDXgoLVQDysl1jIAUKdpu3YGHyQ7sK-O0w',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id'=>17,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>'2000000000000',
                'general_information'=>'Nhà đẹp giá rẻ',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyTiuLen-EBZaNXrUgNDXgoLVQDysl1jIAUKdpu3YGHyQ7sK-O0w',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id'=>18,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>'2000000000000',
                'general_information'=>'Nhà đẹp giá rẻ',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyTiuLen-EBZaNXrUgNDXgoLVQDysl1jIAUKdpu3YGHyQ7sK-O0w',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id'=>19,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>'2000000000000',
                'general_information'=>'Nhà đẹp giá rẻ',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyTiuLen-EBZaNXrUgNDXgoLVQDysl1jIAUKdpu3YGHyQ7sK-O0w',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id'=>20,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>'2000000000000',
                'general_information'=>'Nhà đẹp giá rẻ',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'data:image/jpeg;base64,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',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
        ]);
    }
}
