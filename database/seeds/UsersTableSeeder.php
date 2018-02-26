<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::create([
            'name'      => 'Dinush Jayakody',
            'email'     => 'dinush@test.com',
            'password'  =>  bcrypt('password'),
            'admin'     => 1
        ]);

        \App\Profile::create([
            'user_id'      => $user->id,
            'avatar' => 'uploads/avatars/avatar.png',
            'about'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan tortor tortor, vitae egestas libero placerat et. Vivamus ut ipsum sed sapien sagittis varius sed a eros. Nunc vel vulputate ligula. Vivamus efficitur a lorem nec malesuada. Nullam ultrices ullamcorper hendrerit. Nulla fermentum metus purus, eget varius mi vestibulum auctor. Ut sollicitudin justo ac eros tincidunt, id venenatis lectus auctor. Praesent quis vehicula sem. Pellentesque commodo efficitur interdum. Sed ligula neque, consectetur id hendrerit nec, gravida ac justo. Praesent lobortis vel quam ornare accumsan. Etiam mollis mauris vel ipsum blandit pellentesque at ut massa. Pellentesque placerat tincidunt consequat.',
            'facebook'  =>  'facebook.com',
            'youtube'     => 'youtube.com'
        ]);
    }
}
