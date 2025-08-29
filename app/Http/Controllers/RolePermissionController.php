<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Permission;
use Illuminate\Http\Request;

class RolePermissionController extends Controller
{
    /**
     * Display a listing of the package permissions.
     */
    public function index()
    {
        $packagePermissions = Package::with('permissions')->get();
        return view('dashboard.admin.role_permissions.index', compact('packagePermissions'));
    }

    /**
     * Show the form for creating a new package permission.
     */
    public function create()
    {
        $packages = Package::all();
        $permissions = Permission::all();
        return view('dashboard.admin.role_permissions.create', compact('packages', 'permissions'));
    }

    /**
     * Store a newly created package permission.
     */
    public function store(Request $request)
    {
        $request->validate([
            'package_id' => 'required|exists:packages,id',
            'permission_id' => 'required|array',
            'permission_id.*' => 'exists:permissions,id',
        ]);

        $package = Package::findOrFail($request->package_id);
        $package->permissions()->sync($request->permission_id);

        return redirect()->route('role_permissions.index')->with('success', 'Permissions updated successfully.');
    }

    /**
     * Remove a specific permission from a package.
     */
    public function destroy($id)
    {
        $package = Package::findOrFail($id);
        $package->permissions()->detach();
        return redirect()->route('role_permissions.index')->with('success', 'Permissions removed successfully.');
    }

    public function detachPermission($package_id, $permission_id)
    {
        $package = Package::findOrFail($package_id);
        $package->permissions()->detach($permission_id);
        return back()->with('success', 'Permission removed successfully.');
    }

    /**
     * Fetch permissions for a given package (AJAX).
     */
    public function getPermissions(Request $request)
    {
        $package = Package::findOrFail($request->package_id);
        $all_permissions = Permission::all();

        // Fix ambiguous column issue
        $permissions = $package->permissions()->get(['permissions.id', 'permissions.display_name']);

        $html = '<select id="permission_id" name="permission_id[]" class="form-control select2" multiple required>';
        foreach ($all_permissions as $permission) {
            $selected = $permissions->contains('id', $permission->id) ? 'selected' : '';
            $html .= '<option value="' . $permission->id . '" ' . $selected . '>' . $permission->display_name . '</option>';
        }
        $html .= '</select>';

        return response()->json(['html' => $html]);
    }
}
