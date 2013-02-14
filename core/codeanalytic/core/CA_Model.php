<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CA Model
 *
 * @package     CodeAnalytic\Core
 * @author      CodeAnalytic Dev Team
 * @copyright   Copyright (c) 2013, CodeAnalytic
 * @license     http://codeanalytic.com/license
 * @version     Version 2.0.0
 */
class CA_Model extends CI_Model
{
	public $mongodb;
	
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
    }
}