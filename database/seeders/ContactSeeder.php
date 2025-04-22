<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
          [
              'name' => 'Гурген',
              'email' => 'gigachat@gmail.com',
              'telegram' => '@sigmaboy',
              'message' => 'Пожалуйста, позвоните мне. Меня держат в заложниках и я нашел ваш сайт, чтобы хоть с кем-то связаться, пока у меня не сел телефон, иначе они отрежут мой нос и вставят мне его прямо в....',
              'status' => 'cancel'
          ],
          [
              'name' => 'Андрей Ракообразный',
              'email' => 'andrey200gruz@gmail.com',
              'telegram' => '@lupa',
              'message' => null,
              'status' => 'completed'
          ],
          [
              'name' => 'Дристун Дристуныч',
              'email' => 'dristun228@gmail.com',
              'telegram' => '@dristan',
              'message' => null,
              'status' => 'waiting'
          ],
        ];

        foreach($contacts as $contact) {
            Contact::create($contact);
        }
    }
}
