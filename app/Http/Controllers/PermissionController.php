<?php

namespace App\Http\Controllers;

use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    protected $flasher;

    public function __construct(FlasherInterface $flasher)
    {
        $this->flasher = $flasher;
    }
    public function index(){
        $permissions = Permission::all();
    return view('admin.role-permission.permission.index', compact('permissions'));
    }
    public function create(){
        $permissions = Permission::all();
        return view('admin.role-permission.permission.create', compact('permissions'));

    }

    // public function store(Request $request){

    //     $request->validate([
    //         'name'=>[
    //             'required',
    //             'string',
    //             'unique: permissions, name'
    //         ]
    //     ]);

    //     Permission::newPermission($request);
    //     $this->toastr->success('Permission Created successfully!');
    //     return back();

    // }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|unique:permissions,name',
    ]);

    Permission::create(['name' => $request->name]);
    $this->flasher->addSuccess( 'Permission created successfully!');
    return redirect()->route('permissions.index');
}

    public function edit($id){
        $permission = Permission::findOrFail($id);
        return view('admin.role-permission.permission.edit', compact('permission'));

    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|unique:permissions,name,' . $id,
        ]);

        $permission = Permission::findOrFail($id);
        $permission->update(['name' => $request->name]);
        $this->flasher->addSuccess('Permission updated successfully!');
        return redirect()->route('permissions.index');
        // return redirect()->route('permissions.index')->with('success', 'Permission updated successfully!');
    }

    public function destroy($id)
    {
        $permission = Permission::findOrFail($id);
        $permission->delete();
        $this->flasher->addSuccess('Permission deleted successfully!');
        return redirect()->route('permissions.index');
    }
}
