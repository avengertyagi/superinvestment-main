<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Permission;
use App\Models\Role;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{
    public function index()
    {
        //$this->authorize('view_users');

        $result = Admin::latest()->paginate();
        return view('admin.user.index', compact('result'));
    }

    public function create()
    {
        //$this->authorize('add_users');

        $roles = Role::pluck('name', 'id');
        return view('admin.user.new', compact('roles'));
    }

    public function store(Request $request)
    {
        $this->authorize('add_users');

        $this->validate($request, [
            'first_name'     => 'bail|required|min:2|max:20',
            'last_name'     => 'bail|required|min:2|max:20',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role'    => 'required|min:1'
        ]);

        // hash password
        $request->merge(['password' => bcrypt($request->get('password'))]);

        // Create the user
        if ( $user = Admin::create($request->except('role', 'permissions')) ) {
            $this->syncPermissions($request, $user);
        } else {
            return back()->withErrors(['failed', 'User could not created']);
        }
        request()->session()->flash('status','User '. $user->full_name .' has been created.');


        return redirect()->back();
    }

    public function edit($id)
    {
        $this->authorize('view_users');

        $user = Admin::find($id);
        $roles = Role::pluck('name', 'id');
        $permissions = Permission::all('name', 'id');

        return view('admin.user.edit', compact('user', 'roles', 'permissions'));
    }

    public function update(Request $request, $id)
    {
        $this->authorize('edit_users');

        $this->validate($request, [
            'first_name'     => 'bail|required|min:2|max:20',
            'last_name'     => 'bail|required|min:2|max:20',
            'email' => 'required|email|unique:users,email,' . $id,
            'role'    => 'required|min:1'
        ]);

        // Get the user
        $user = Admin::findOrFail($id);

        // Update user
        $user->fill($request->except('roles', 'permissions', 'password'));

        // check for password change
        if($request->get('password')) {
            $user->password = bcrypt($request->get('password'));
        }

        // Handle the user roles
        $this->syncPermissions($request, $user);

        $user->save();
        request()->session()->flash('status','User '. $user->full_name .' has been updated.');

        return redirect()->back();
    }

    public function destroy($id)
    {
        $this->authorize('delete_users');

        if ( Auth::user()->id == $id ) {
            request()->session()->flash('warning','Deletion of currently logged in user is not allowed ');
            return redirect()->back();
        }

        if( Admin::findOrFail($id)->delete() ) {
            request()->session()->flash('status','User has been deleted');
        } else {
            request()->session()->flash('status','User not deleted');
        }

        return redirect()->back();
    }

    private function syncPermissions(Request $request, $user)
    {
        // Get the submitted roles
        $roles = $request->get('role', []);
        $permissions = $request->get('permissions', []);

        // Get the roles
        $roles = Role::find($roles);

        // check for current role changes
        if( ! $user->hasAllRoles( $roles ) ) {
            // reset all direct permissions for user
            $user->permissions()->sync([]);
        } else {
            // handle permissions
            $user->syncPermissions($permissions);
        }

        $user->syncRoles($roles);
        return $user;
    }

}
