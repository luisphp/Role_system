<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;


class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            	//Users
        Permission::create([
        	'name' 		  => 'Navegar usuarios',
        	'slug' 		  => 'users.index',
        	'description' => 'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
        	'name' 		  => 'Ver detalle usuario',
        	'slug' 		  => 'users.show',
        	'description' => 'Ver en detalle cada usuario del sistema',
        ]);

        Permission::create([
        	'name' 		  => 'Edicion de usuarios',
        	'slug' 		  => 'users.edit',
        	'description' => 'Edita los usuarios del sistema',
        ]);

        Permission::create([
        	'name' 		  => 'Eliminar usuario',
        	'slug' 		  => 'users.destroy',
        	'description' => 'Elimina los usuarios del sistema',
        ]);

        
        //Roles
        Permission::create([
        	'name' 		  => 'Navegar roles',
        	'slug' 		  => 'roles.index',
        	'description' => 'Lista y Navega todos los roles del sistema',
        ]);

        Permission::create([
        	'name' 		  => 'Ver detalle de rol',
        	'slug' 		  => 'roles.show',
        	'description' => 'Lista y Navega todos los roles del sistema',
        ]);

        Permission::create([
        	'name' 		  => 'Creacion de roles',
        	'slug' 		  => 'roles.create',
        	'description' => 'Ver en detalle cada role del sistema',
        ]);

        Permission::create([
        	'name' 		  => 'Edicion de roles',
        	'slug' 		  => 'roles.edit',
        	'description' => 'Edita los roles del sistema',
        ]);

        Permission::create([
        	'name' 		  => 'Eliminar rol',
        	'slug' 		  => 'roles.destroy',
        	'description' => 'Elimina los roles del sistema',
        ]);


        //Productos
        Permission::create([
        	'name' 		  => 'Navegar productos',
        	'slug' 		  => 'products.index',
        	'description' => 'Lista y Navega todos los productos del sistema',
        ]);

        Permission::create([
        	'name' 		  => 'Ver detalle de producto',
        	'slug' 		  => 'products.show',
        	'description' => 'Lista y Navega todos los productos del sistema',
        ]);

        Permission::create([
        	'name' 		  => 'Creacion de productos',
        	'slug' 		  => 'products.create',
        	'description' => 'Ver en detalle cada role del sistema',
        ]);

        Permission::create([
        	'name' 		  => 'Edicion de productos',
        	'slug' 		  => 'products.edit',
        	'description' => 'Edita los productos del sistema',
        ]);

        Permission::create([
        	'name' 		  => 'Eliminar producto',
        	'slug' 		  => 'products.destroy',
        	'description' => 'Elimina los productos del sistema',
        ]);

    }
}
