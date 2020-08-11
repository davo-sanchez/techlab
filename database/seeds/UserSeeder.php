<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sa = Role::create(['name' => 'super-admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user = Factory(App\User::class)->create([
            'name' => 'Administrador',
            'email' => 'admin@techlab.app',
            'password' => bcrypt('tech1234')
        ]);

        $user->assignRole($sa);
        
       /* $user = User::create([
            'name' => 'Root',
            'email' => 'root@techlab.app',
            'password' => bcrypt('tech1234')
        ]);

        Role::create(['name' => 'Root']);

        $user->assignRole('Root');*/

    }
}
