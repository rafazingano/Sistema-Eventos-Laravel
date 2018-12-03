<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        App\User::insert([
            'name' => 'Rafael Zingano',
            'email' => 'rafael@zingano.com',
            'email_verified_at' => now(),
            'password' => bcrypt('secret123'),
            'remember_token' => str_random(10)
        ]);

        $this->command->info('User: rafael@zingano.com created');
        $this->command->info('Password: secret123 created');

        $this->command->info('Agora aguarde alguns instantes pois vamos criar alguns eventos fake para testes');
        factory(App\Event::class, 12)->create();
    }
}
