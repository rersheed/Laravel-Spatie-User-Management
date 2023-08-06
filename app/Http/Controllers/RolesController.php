<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('admin.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'role' => ['required', 'string', 'max:255'],
            'permissions' => ['required', 'array'],
        ]);

        $role = Role::create(['name' => $request->role]);
        $role->givePermissionTo($request->permissions);

        return redirect()->route('admin.roles.index')->with('msg', 'Role Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::all();

        return view('admin.roles.edit', compact(['role', 'permissions']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $role = Role::findOrFail($id);

        $request->validate([
            'role' => ['required', 'string', 'max:255'],
            'permissions' => ['required', 'array'],
        ]);

        $role->update(['name' => $request->role]);
        $role->syncPermissions($request->permissions, []);

        return redirect()->route('admin.roles.index')->with('msg', 'Role Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        $role->revokePermissionTo($role->permissions);

        return redirect()->route('admin.roles.index')->with('msg', 'Role Deleted Successfully');
    }
}
