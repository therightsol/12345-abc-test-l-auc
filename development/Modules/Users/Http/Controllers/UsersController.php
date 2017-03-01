<?php

namespace Modules\Users\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Users\Entities\UserModel;
use Modules\Users\Filters\Table\UsersFilters;

class UsersController extends Controller
{
    use ValidatesRequests;
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request, UsersFilters $filters)
    {
        $limit = ($request->has('limit')) ? $request->input('limit') : 10;
        $users = UserModel::Filter($filters)
            ->paginate($limit);

        $perPage = $users->perPage();
        return view('users::index', compact('users','perPage'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('users::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('users::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $user = UserModel::where('id', $id)->get();

        $userroles = ['admin', 'staff', 'auctioneer', 'bidder'];
        $statuses = ['open', 'closed'];

        if (isset($user[0]))
            $user = $user[0];

        $featured_img = $user->picture;
        return view('users::edit', compact('user', 'userroles', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {

        $validationArr = [
            'username'         => 'required|max:60|min:3|unique:users,username,'.$id,
            'full_name'     => 'required|max:255|min:2',
            'email'            => 'required|max:255|email|unique:users,email,'.$id,
            'status'            => 'required',
            'cnic'              => 'required|max:15',
            'profile_picture'   =>  'max:255',
            'contact_number'    =>  'required|max:255',
            'user_role'         => 'required',
            'password'         => 'max:60|same:confirm_password',
            'confirm_password' => 'max:60|same:password',
            'url'              => 'max:255'

        ];


        // validating input form
        $this->validate($request, $validationArr);



        $data = $request->all();


        $data['updated_by'] = \Auth::id();

        return $data;

        /*$path = public_path('images/users');
        $filename = '';
        if ($picture = $request->file('picture')){
            $name = $picture->getClientOriginalName();
            $filename = time().'-'.$name;
            $target = $picture->move($path, $filename );
        }*/

        $data['picture']    = $request->input('picture');


        $user = User::find($id);

        $user->username        = strtolower($data['username']);
        $user->firstname       = $data['firstname'];
        $user->lastname        = $data['lastname'];
        $user->sex             = strtolower($request->gender);
        $user->display_name    = $data['display_name'];
        $user->email           = strtolower($data['email']);

        if (!empty($data['password']))
            $user->password        = bcrypt($data['password']);

        $user->url             = strtolower($data['url']);
        $user->picture         = $data['picture'];
        $user->user_role_id    = (int) $data['user_role_id'];


        $isUpdated = $user->update();

        $isUpdated = $isUpdated ? 'update' : '';


        $userroles = User_Role::all();

        return back()->with('isUpdated', $isUpdated);
        //return view('admin.users.edit-user', compact('isUpdated', 'userroles', 'user'));

    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
