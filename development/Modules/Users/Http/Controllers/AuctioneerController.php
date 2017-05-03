<?php

namespace Modules\Users\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\CommonBackend\Http\Filters;
use Modules\Users\Entities\UserModel;

class AuctioneerController extends Controller
{
    use ValidatesRequests;

    public $max_file_size;


    public function __construct ()
    {
        $maxFileSize = ini_get('upload_max_filesize');
        $maxFileSize = str_replace('M', '', $maxFileSize);

        $this->max_file_size = $maxFileSize;
    }


    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        $user = \Auth::user();


        if (isset($user[0]))
            $user = $user[0];

        $featured_img = $user->picture;
        $updateRoute = route('account.auctioneerProfileUpdate');
        return view('users::edit', compact('user', 'featured_img', 'updateRoute'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {

        $id = \Auth::id();
        $validationArr = [
            'username'         => 'required|max:60|min:3|unique:users,username,' . $id,
            'full_name'        => 'required|max:255|min:2',
            'email'            => 'required|max:255|email|unique:users,email,' . $id,
            'cnic'             => 'required|max:15',
            'picture'          => 'max:255',
            'contact_number'   => 'required|max:255',
            'password'         => 'max:60|same:confirm_password',
            'confirm_password' => 'max:60|same:password',
            'url'              => 'max:255'

        ];


        // validating input form
        $this->validate($request, $validationArr);



        $data = $request->all();


        $data['updated_by'] = \Auth::id();


        $data['picture']    = $request->input('picture');


        $user = \Auth::user();

        $user->username = strtolower($data['username']);
        $user->full_name = $data['full_name'];
        $user->cnic = $data['cnic'];
        $user->email = strtolower($data['email']);
        $user->url = strtolower($data['url']);
        $user->picture = $data['picture'];
        $user->contact_number = $data['contact_number'];

        if (!empty($data['password']))
            $user->password = bcrypt($data['password']);


        $isUpdated = $user->update();

        $isUpdated = $isUpdated ? 'update' : '';



        return back()->with('isUpdated', $isUpdated);
        //return view('admin.users.edit-user', compact('isUpdated', 'userroles', 'user'));

    }

}
