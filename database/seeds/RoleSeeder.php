<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


          // this is for create  Users  permissions 
        Permission::create(['name' => 'Users.Create']);
        Permission::create(['name' => 'Users.Delete']);
        Permission::create(['name' => 'Users.Update']);
        Permission::create(['name' => 'Users.Decative']);



         // this is for create  Tickets  permissions 
        Permission::create(['name' => 'Ticket.Create']);
        Permission::create(['name' => 'Ticket.Delete']);
        Permission::create(['name' => 'Ticket.Update']);
        Permission::create(['name' => 'Ticket.Decative']);


         // this is for Bot  Tickets  permissions 
        Permission::create(['name' => 'Bot.Create']);
        Permission::create(['name' => 'Bot.Delete']);
        Permission::create(['name' => 'Bot.Update']);
        Permission::create(['name' => 'Bot.Decative']);





        Role::create(['name' => 'supperAdmin']);
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'User']);


    }
}
