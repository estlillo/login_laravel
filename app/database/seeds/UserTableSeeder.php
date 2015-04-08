<?php

Class UserTableSeeder extends Seeder{
    
    public function run(){
        
       
        DB::table('users')->insert(array(
            'role_id'     => 0,
            'name'        => 'Esteban',
            'last_name'   => 'Lillo',
            'email'       => 'estebanlilloc@gmail.com',
            'address'     => 'Gregorio Mira 403',
            'phone'       =>  88212811,
            'username'    => 'estlillo',
            'password'    => Hash::make('xder555'),
            'active'      => 1
        ));
        
        DB::table('users')->insert(array(
            'role_id'     => 0,
            'name'        => 'Admin',
            'last_name'   => 'Admin',
            'email'       => 'admin@mail.com',
            'address'     => 'test',
            'phone'       =>  1111111,
            'username'    => 'admin',
            'password'    => Hash::make('123'),
            'active'      => 1
        ));
        
        DB::table('users')->insert(array(
            'role_id'     => 1,
            'name'        => 'Normal',
            'last_name'   => 'Normal',
            'email'       => 'normal@mail.com',
            'address'     => 'test',
            'phone'       =>  1111111,
            'username'    => 'normal',
            'password'    => Hash::make('123'),
            'active'      => 1
        ));
        
        DB::table('users')->insert(array(
            'role_id'     => 2,
            'name'        => 'Sin_permisos',
            'last_name'   => 'Sin_permisos',
            'email'       => 'sin_permisos@mail.com',
            'address'     => 'test',
            'phone'       =>  1111111,
            'username'    => 'sin_permisos',
            'password'    => Hash::make('123'),
            'active'      => 1
        ));
     
    }
}