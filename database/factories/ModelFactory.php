<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'last_login_at' => $faker->dateTime,
        
    ];
});/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Portofolio::class, static function (Faker\Generator $faker) {
    return [
        'nama project' => $faker->sentence,
        'slug' => $faker->unique()->slug,
        'text' => $faker->text(),
        'published_at' => $faker->date(),
        'enabled' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Team::class, static function (Faker\Generator $faker) {
    return [
        'nama' => $faker->sentence,
        'slug' => $faker->unique()->slug,
        'biodata' => $faker->text(),
        'published_at' => $faker->date(),
        'enabled' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Portofolio::class, static function (Faker\Generator $faker) {
    return [
        'nama_project' => $faker->sentence,
        'slug' => $faker->unique()->slug,
        'text' => $faker->text(),
        'published_at' => $faker->date(),
        'enabled' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Portofolio::class, static function (Faker\Generator $faker) {
    return [
        'project' => $faker->sentence,
        'slug' => $faker->unique()->slug,
        'text' => $faker->text(),
        'published_at' => $faker->date(),
        'enabled' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Pegawai::class, static function (Faker\Generator $faker) {
    return [
        'nama_pegawai' => $faker->sentence,
        'no_telpon' => $faker->sentence,
        'alamat' => $faker->text(),
        'tanngal_lahir' => $faker->date(),
        'status_karyawan' => $faker->sentence,
        'jabatan' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
