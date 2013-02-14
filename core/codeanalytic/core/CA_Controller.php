<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CA Controller
 *
 * @package     CodeAnalytic\Core
 * @author      CodeAnalytic Dev Team
 * @copyright   Copyright (c) 2013, CodeAnalytic
 * @license     http://codeanalytic.com/license
 * @version     Version 2.0.0
 */
class CA_Controller extends MX_Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();

        // Checking installation
        $this->_checking_installation();
    }

    /**
     * Check installation
     * @return void
     */
    private function _checking_installation()
    {
        /*
    	$option = $this->option->get('install');
        $uri    = $this->uri->segment(1);

        if(!$option)
        {
            if($uri != 'install'){ redirect('install'); }
        }

        if($uri == 'install'){ show_404(); }
        */
    }
}