<?php

namespace App\Http\Controllers;

use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $roles = Role::orderBy('id','desc')->paginate(10);

        return view ('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //Le pasamos a la vista todos los permisos que estan en el modelo Shinobi
        $permissions = Permission::all();

        return view ('roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            //Guardamos el role 
            $role = Role::create($request->all());

             //Guardamos los permisos asociados
            $role->permissions()->sync($request->get('permissions'));
        
            //Nos vamos a la vista edicion con un mensaje de guardado exitoso
        return redirect()->route('roles.edit', $role->id)->with('info', 'Role creado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view ('roles.show',compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //Le pasamos a la vista todos los permisos que estan en el modelo Shinobi
        $permissions = Permission::all();

        return view ('roles.edit',compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //Actualiza el usuario
        $role->update($request->all());


        //Actualizo Roles
        $role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.edit', $role->id)->with('info', 'Role editado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Encuentro el Role por el id y le paso el metodo delete() para borrarlo
        Role::find($id)->delete();

         return redirect()->route('roles.index')->with('info', 'Role eliminado exitosamente!');

    }
}