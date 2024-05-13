<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;
class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create([
            'name_uz' => 'Asosiy',
            'name_en' => 'Home',
            'name_ru' => 'Главный',
        ]);

        Menu::create([
            'name_uz' => 'Portfolio',
            'name_en' => 'Portfolio',
            'name_ru' => 'Портфолио',
        ]);

        Menu::create([
            'name_uz' => 'Sharhlar',
            'name_en' => 'Reviews',
            'name_ru' => 'Отзывы',
        ]);

        Menu::create([
            'name_uz' => 'Blog',
            'name_en' => 'Blog',
             'name_ru' => 'Блог'
        ]);

        Menu::create([
            'name_uz' => 'Aloqa',
            'name_en' => 'Contact',
            'name_ru' => 'Контакт',
        ]);
    }
}
