<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
        'my_list' => 'errors/errors_list',

    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    public $userRegister = [
        'name' => 'required',
        'password' => 'required',
        //'passconf' => 'required|matches[password]',
        'email'    => 'valid_email|is_unique[users.email]',

    ];


    public $userLogin = [
        'email'    => 'required',
        'password' => 'required',

    ];



}
