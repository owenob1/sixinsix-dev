<?php

use Illuminate\Database\Seeder;
use App\User;
use App\UserProfile;
use App\RoleUser;
class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'admin@gmail.com',
            'password' => \Hash::make('1234567'),
            'confirmed' => 1,
            'confirmation_code' =>'k4uygBhpxasW9mvYokBPRcxXZ5vOR4yp1527619421231234'
        ]);
        $user = User::where('email', 'admin@gmail.com')->first();
        UserProfile::create([
            'first_name' =>'admin',
            'last_name' =>'admin',
            'website' =>'http://sixinsix.com',
            'user_id' =>$user->id,
        ]);
        $roleUser = new RoleUser();
        $roleUser->role_id = 2;
        $roleUser->user_id = $user->id;
        $roleUser->save();
    }
}
