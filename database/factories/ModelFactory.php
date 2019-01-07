<?php

use Faker\Generator as Faker;
/*
$factory->define(Model::class, function (Faker $faker) {
    return [
        //
    ];
});
*/

$factory->define(App\Post::class, function (Faker $faker) {
    //球类的实例对象
    return [

        'title'=> $faker->sentence(5),
        'content' => $faker->paragraph(10),
        'user_id' => $faker->numberBetween(1,10),
        'type_id' => $faker->numberBetween(1,8),
        'created_at' => $faker->dateTimeBetween('-30 years','-10 years'),
        'updated_at' => $faker->dateTimeBetween('-10 years', 'now')
    ];

});