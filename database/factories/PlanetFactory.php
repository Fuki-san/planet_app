<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Planet>
 */
class PlanetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //::で前置きしたlaravelフレームワークのFactoryクラスにアクセスして静的メソッドであるcreateを使用している
        //つまり下記の構文はFactoryクラスのすべての機能(ロケールだけ日本語バージョン)の設計図由来の$fakerインスタンスを生成しているってこと
        $faker = \Faker\Factory::create('ja_JP');
        return [
            'name' => $faker->name(),
            'en_name' => $faker->name(),
            'radius' => $faker->numberBetween(1,100),
            'weight' => $faker->numberBetween(1,100),
        ];
    }
}
