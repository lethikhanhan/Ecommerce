<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('banners')->insert( [
            [
                'banner_title'=>'title 1',
                'banner_url'=> 'https://unsplash.com/',
                'banner_image'=> 'https://picsum.photos/200/300.jpg',
            ],
            [
                'banner_title'=>'title 2',
                'banner_url'=> 'https://unsplash.com/',
                'banner_image'=> 'https://picsum.photos/200/300.jpg',
            ],
            [
                'banner_title'=>'title 3',
                'banner_url'=> 'https://unsplash.com/',
                'banner_image'=> 'https://picsum.photos/200/300.jpg',
            ],
            [
                'banner_title'=>'title 4',
                'banner_url'=> 'https://unsplash.com/',
                'banner_image'=> 'https://picsum.photos/200/300.jpg',
            ],
            [
                'banner_title'=>'title 5',
                'banner_url'=> 'https://picsum.photos/200',
                'banner_image'=> 'https://picsum.photos/seed/picsum/200/300',
            ],
        ]);
    }
}
