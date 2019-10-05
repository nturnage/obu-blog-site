<?php

use Illuminate\Database\Seeder;

// KDL - Use the Spatie Permissions class
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

// KDL - A seeder to create permissions for the blog
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//KDL - I lifted this code from the spate demo project
		//Reset cached roles and permission
		app()[PermissionRegistrar::class]->forgetCachedPermissions();

		//KDL - Create permissions
		Permission::create(['name' => 'create new post']);
		Permission::create(['name' => 'create new blog-creator']);

		//KDL - Create blog-creator role and give it permission to create
		// posts and blog-creators 
		$role = Role::create(['name' => 'blog-creator']);
		$role->givePermissionTo('create new post');
		$role->givePermissionTo('create new blog-creator');

		//KDL - Create a default user
		$user = Factory(App\User::class)->create([
			'name' => 'Bugs Bunny',
			'email' => 'bugs@bunny.com',
			// factory default password is 'secret'
		]);
		$user->assignRole($role);
    }
}
