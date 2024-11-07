<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            [
                'code' => '001',
                'name' => 'ТОВ "Екологія"',
                'employees' => 50,
                'industry' => 'Екологія',
                'address' => 'вул. Новий, 1'
            ],
            [
                'code' => '002',
                'name' => 'Приватне підприємство "Технології"',
                'employees' => 75,
                'industry' => 'Технології',
                'address' => 'вул. Сучасна, 12'
            ],
            [
                'code' => '003',
                'name' => 'ЗАТ "Агропром"',
                'employees' => 100,
                'industry' => 'Агропромисловість',
                'address' => 'вул. Сільська, 5'
            ],
            [
                'code' => '004',
                'name' => 'Компанія "Сервіс"',
                'employees' => 30,
                'industry' => 'Сервіс',
                'address' => 'вул. Клієнтська, 3'
            ],
            [
                'code' => '005',
                'name' => 'Корпорація "Будівельник"',
                'employees' => 200,
                'industry' => 'Будівництво',
                'address' => 'вул. Будівельна, 10'
            ],
            [
                'code' => '006',
                'name' => 'ТОВ "ЕКОНОМІЧНА КОМПАНІЯ"',
                'employees' => 120,
                'industry' => 'Економіка',
                'address' => 'вул. Фруктова, 23А'
            ]
        ]);
    }
}
