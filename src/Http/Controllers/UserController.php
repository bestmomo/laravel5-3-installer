<?php

namespace Bestmomo\Installer\Http\Controllers;

use RegisterController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class UserController extends RegisterController
{
    /**
     * Show form.
     *
     * @return \Illuminate\View\View
     */
    public function createUser()
    {
        $fields = config('installer.fields');

        return view('vendor.installer.register', compact('fields'));
    }

    /**
     * Manage form submission.
     *
     * @param  Illuminate\Http\Request $request
     * @return 
     */
    public function storeUser(Request $request)
    {
        $request->merge(['password_confirmation' => $request->password]);

        // Form validation with form request or validator method
        $validator = config('installer.validator');
        if($validator !== null) {
            app($validator);
        } else {
            $validator = $this->validator($request->all());
            if($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
        }

        // Administrator creation
        $class = config('installer.creator.class');
        if($class !== null) {
            $class = app($class);
            $method = config('installer.creator.method');
            $user = $class->{$method}($request->all());
        } else {
            $user = $this->create($request->all());
        }

        if(method_exists($this, 'userAddValues')) {
            return $this->userAddValues($user);
        }

        return redirect('install/end');
    }

}