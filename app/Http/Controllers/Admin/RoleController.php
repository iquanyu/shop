<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Role $role)
    {
		$roles = $role->paginate();
	    return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Role $role)
    {
        $permission = new Permission();
        //$permissions = $permission->pluck('description', 'id')->all();
        $permissions = $permission->all();
        return view('admin.roles.create_and_edit', compact('permissions', 'role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only('description', 'name');

        $validatedData = $request->validate([
            'name' => 'required|unique:roles|max:255',
            'description' => 'required',
        ]);
		
		DB::beginTransaction();

        $role = Role::create($data);

		if($request->has('permission')){
			$role->syncPermissions($request->permission) ? DB::commit() : DB::rollBack();
		}else{
			DB::commit();
		}

        return redirect()->route('admin.roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('admin.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role, Permission $permission)
    {
      $permissions = $permission->all();
      $role_permissions = $role->permissions->pluck('id')->toArray();

      return view('admin.roles.create_and_edit', compact('role', 'permissions', 'role_permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role, Permission $permission)
    {
      $role->update($request->only(['name', 'description']));

      if($request->has('permission')){
        $request_permissions = $request->permission;
        $permissions = $permission->whereIn('id', $request_permissions)->get();
        $role->syncPermissions($permissions);
      }
      return redirect()->route('admin.roles.show', $role->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
