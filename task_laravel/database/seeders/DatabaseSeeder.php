<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\MenuItem;
use App\Models\Priority;
use App\Models\Role;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Task::factory(20)->create();
        // \App\Models\Task_File::factory(30)->create();

        $roles = [
            [
                'id' => 1,
                'role_type' => 'User'
            ],
            [
                'id' => 2,
                'role_type' => 'Admin'
            ],
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate($role);
        }

        $users = [
            [
                'full_name' => 'Admin',
                'username' => 'Admin',
                'password' => bcrypt('Admin'),
                'role_id' => 2,
            ],
            [
                'full_name' => 'User',
                'username' => 'User',
                'password' => bcrypt('User'),
                'role_id' => 1,
            ],
            // Add more user arrays here if needed
        ];

        foreach ($users as $user) {
            User::firstOrCreate(['username' => $user['username']], $user);
        }


        $statuses = [
            ['status_name' => 'Created'],
            ['status_name' => 'In Development'],
            ['status_name' => 'Staging'],
            ['status_name' => 'Pre-Prod'],
            ['status_name' => 'Prod'],
        ];

        foreach ($statuses as $status) {
            Status::firstOrCreate($status);
        }
        $categories = [
            ['category_type' => 'Development'],
            ['category_type' => 'Design'],
            ['category_type' => 'Management'],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate($category);
        }

        // \App\Models\Task::factory()->create([
        //     'title' => 'Test User',
        //     'description' => 'Admin',
        //     'category_id' => 2,
        //     'priority_id' => 1,
        //     'user_id' => 2,
        //     'deadline' => '12-04-2024'
        // ]);

        $priorities = [
            ['priority_level' => 'High'],
            ['priority_level' => 'Medium'],
            ['priority_level' => 'Low'],
        ];

        foreach ($priorities as $priority) {
            Priority::firstOrCreate($priority);
        }

        $menuItems = [

            ['label' => 'Dashboard', 'link' => 'dashboard', 'role_id' => 1],
            ['label' => 'My tasks', 'link' => 'my_tasks', 'role_id' => 1],
            [
                'label' => 'Dashboard',
                'link' => 'dashboard',
                'role_id' => 2
            ],
            [
                'label' => 'Users',
                'link' => 'users',
                'role_id' => 2
            ],
            ['label' => 'All tasks', 'link' => 'all_tasks', 'role_id' => 2],
            ['label' => 'Create Post', 'link' => 'create_task', 'role_id' => 2],


        ];
        foreach ($menuItems as $menuItem) {
            MenuItem::firstOrCreate($menuItem);
        }
    }
}
