<?php

class UserController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function all() {

        $users = User::paginate(20);
        return View::make('user.all', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {

        return View::make('user.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {

        $formData = array(
            'name'             => Input::get('name'),
            'email'            => Input::get('email'),
            'password'         => Input::get('password'),
            'confirm-password' => Input::get('confirm_password')
        );

        $rules = array(
            'name'             => 'required|min:3',
            'email'            => 'required|email|unique:users,email',
            'password'         => 'required|min:4',
            'confirm-password' => 'required|same:password'
        );

        $validation = Validator::make($formData, $rules);

        if ($validation->fails()) {

            return Redirect::action('UserController@create')->withErrors($validation)->withInput();
        }

        $user = Sentry::createUser(array(
            'email'     => $formData['email'],
            'password'  => $formData['password'],
            'name'      => $formData['name'],
            'activated' => 1,
        ));

        $adminGroup = Sentry::findGroupById(1);
        $user->addGroup($adminGroup);

        Notification::success('Kayıt işlemi başarıyla tamamlandı');

        return Redirect::action('UserController@create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return Response
     */
    public function edit() {

        $user = Sentry::getUser();
        return View::make('user.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return Response
     */
    public function update() {

        $formData = array(
            'username'     => Input::get('username'),
            'email'        => Input::get('email'),
            'name'         => Input::get('name'),
            'birthday'     => Input::get('birthday'),
            'location'     => Input::get('location'),
            'web_site_url' => Input::get('web_site_url'),
            'biography'    => Input::get('biography')
        );

        /*
        $rules = array(
            'username' => 'required|min:3|unique:users,username',
            'name'     => 'required|min:3',
            'email'    => 'required|email|unique:users,email'

        );
        */

        $rules = array(
            'name' => 'required|min:3'
        );

        $validation = Validator::make($formData, $rules);

        if ($validation->fails()) {

            return Redirect::action('UserController@edit')->withErrors($validation)->withInput();
        }

        $user = Sentry::findUserById(Sentry::getUser()->id);
        $user->username = $formData['username'];
        $user->email = $formData['email'];
        $user->birthday = $formData['birthday'];
        $user->web_site_url = $formData['web_site_url'];
        $user->location = $formData['location'];
        $user->biography = $formData['biography'];

        $user->save();

        Notification::success('Üye bilgileri başarıyla güncellendir');

        return Redirect::action('UserController@profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

    public function profile() {

        $userId = Sentry::getUser()->id;
        $user = User::find($userId);

        return View::make('user.profile')->with('user', $user);
    }
}