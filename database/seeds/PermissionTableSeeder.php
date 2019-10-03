<?php

use Illuminate\Database\Seeder;

// KDL - Use the Spatie Permissions class
use Spatie\Permission\Models\Permission;

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
                // KDL - We only need permission for creating new blog-creators
                // and creating new posts
                $permissions = [
                        'create new blog-creator',
                        'create new post'
                ];

                // KDL - create the new permissions
                foreach ($permissions as $permission) {
                        Permission::create(['name' => $permission]);
                }
    }
}
