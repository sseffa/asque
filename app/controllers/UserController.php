<?php

/**
 * Class UserController
 * @author Sefa Karagöz
 */
class UserController extends \BaseController {

    public function __construct() {

        View::share('active', 'user');
    }

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
     * Show the form for editing the specified resource.
     *
     * @return Response
     */
    public function edit() {

        $theme = new Theme();
        $themes = $theme->getThemes();

        $user = Sentry::getUser();
        return View::make('user.edit')->with('user', $user)->with('themes', $themes);
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
            'biography'    => Input::get('biography'),
            'theme'        => Input::get('theme')
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
        $user->theme = $formData['theme'];

        $user->save();

        Notification::success('Üye bilgileri başarıyla güncellendir');

        return Redirect::action('UserController@profile');
    }

    public function profile($id = null) {

        $auth = "logout";

        if ($id === null) {

            if (!Sentry::check())
                return Redirect::route('user.login');

            $id = Sentry::getUser()->id;
            $auth = "login";
        }
        $user = User::find($id);

        // görüntülenme değerini 1 arttıralım
        DB::table('users')->where('id', $id)->increment('view_count', 1);

        return View::make('user.profile')->with('user', $user)->with('auth', $auth);
    }
}