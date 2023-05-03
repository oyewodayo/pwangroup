<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $president = Role::create([
            'name'          => 'President',
            'slug'          =>'president',
            'permissions'    => json_encode([
                'create_role'           =>true,
            	'update_role'       	=> true,
        		'delete_role'			=> true,
                'view_role'       		=> true,
                'approve_role'     	    => true,
                'create_user'           =>true,
            	'update_user'       	=> true,
        		'delete_user'			=> true,
                'view_user'       		=> true,
                'approve_user'     	    => true,
                'suspend_user'     	    => true,
         
            ]),
        ]);


        $coo = Role::create([
        	'name' 			=> 'Chief Operating Officer',
        	'slug'			=> 'coo',
        	'permissions'	=>json_encode([
                'create_role'           =>true,
            	'update_role'       	=> true,
        		'delete_role'			=> true,
                'view_role'       		=> true,
                'approve_role'     	    => true,
                'create_user'           =>true,
            	'update_user'       	=> true,
        		'delete_user'			=> true,
                'view_user'       		=> true,
                'approve_user'     	    => true,
                'suspend_user'     	    => true,
        	]),
        ]);

        $headhr = Role::create([
        	'name' 			=> 'Head of Human Resources',
        	'slug'			=> 'headhr',
        	'permissions'	=>json_encode([
                
                'create_user'           =>true,
            	'update_user'       	=> true,
        		'delete_user'			=> true,
                'view_user'       		=> true,
                'approve_user'     	    => true,
                'suspend_user'     	    => true,
        	]),
        ]);

        $hr = Role::create([
        	'name' 			=> 'Human Resource',
        	'slug'			=> 'hr',
        	'permissions'	=>json_encode([
                'create_user'           =>true,
            	'update_user'       	=> true,
                'view_user'       		=> true,
                'approve_user'     	    => true,
        	]),
        ]);


        $hod = Role::create([
        	'name' 			=> 'Head of Department',
        	'slug'			=> 'hod',
        	'permissions'	=>json_encode([
                'view_user'       		=> true,
                'approve_user'     	    => true,
        	]),
        ]);
    }
}
