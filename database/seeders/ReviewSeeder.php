<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            [
                'name' => 'Полянский Гурген',
                'message' => 'Очень хороший сайт, нашел много полезного!',
                'is_active' => false,
                'is_featured' => false,
            ],
            [
                'name' => 'Смирнов Николай',
                'message' => 'Я всегда мечтал заняться ремонтом своего выхлопа в автомобиле. Этот сайт помог мне найти все необходимое!',
                'is_active' => true,
                'is_featured' => false,
            ],
            [
                'name' => 'Денис Кипа Сагаевич',
                'message' => 'В машинах я не разбираюсь, но детали от некоторых марок подходят и для БПЛА',
                'is_active' => true,
                'is_featured' => true,
            ],
            [
                'name' => 'Крылова Александра Гугеновна',
                'message' => 'Искала машину, чтобы перевозить собак. Этот сайт помог выбрать просторную машину и теперь я вожу на ней пиво.',
                'is_active' => true,
                'is_featured' => true,
            ],
        ];

        foreach($reviews as $review) {
            Review::create($review);
        }
    }
}
