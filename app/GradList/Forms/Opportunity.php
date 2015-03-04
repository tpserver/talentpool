<?php

namespace GradList\Forms;

class Opportunity extends FormValidator {

    /**
     * Validation rules for creating an opportunity
     *
     * @var array
     */
    protected $rules = [
        'name' => 'required',
        'work-type' => 'required'
    ];

}
