<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\CategoryArticle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = CategoryArticle::all();
        $posts = [
            [
                'name' => 'Ожидается повышение цен на бензин',
                'small_text' => 'В Волгоградской области объявили о повышении цен на бензин',
                'content' => 'В Волгоградской области объявили о повышении цен на бензин',
                'image' => null,
                'is_active' => true,
                'is_featured' => false,
                'is_banner' => true,
            ],
            [
                'name' => 'Ожидается повышение цен на автомобили Lada',
                'small_text' => 'В Волгоградской области объявили о повышении цен на автомобили Lada',
                'content' => 'В Волгоградской области объявили о повышении цен на автомобили Lada',
                'image' => null,
                'is_active' => false,
                'is_featured' => false,
                'is_banner' => false,
            ],
            [
                'name' => 'Ожидается повышение цен на автомобили марки Haval',
                'small_text' => 'В Волгоградской области объявили о повышении цен на автомобили марки Haval',
                'content' => 'В Волгоградской области объявили о повышении цен на автомобили марки Haval',
                'image' => null,
                'is_active' => true,
                'is_featured' => true,
                'is_banner' => false,
            ],
        ];
        foreach($posts as $post) {
            Article::create([
                'category_article_id' => 1,
                'name' => $post['name'],
                'small_text' => $post['small_text'],
                'content' => $post['content'],
                'image' => $post['image'],
                'is_active' => $post['is_active'],
                'is_featured' => $post['is_featured'],
                'is_banner' => $post['is_banner'],
            ]);
        }
    }
}
