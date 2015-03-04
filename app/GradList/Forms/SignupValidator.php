<?php

namespace GradList\Forms;


class SignupValidator extends FormValidator{

    /**
     * Validation rules for creating profile
     *
     * @var array
     */
    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'work_option' => 'required',
    ];

}