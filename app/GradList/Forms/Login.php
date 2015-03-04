<?php

namespace GradList\Forms;

class Login extends FormValidator {

    /**
     * Validation rules for logging in
     *
     * @var array
     */
    protected $rules = [
        'username' => 'required',
        'password' => 'required'
    ];

}
