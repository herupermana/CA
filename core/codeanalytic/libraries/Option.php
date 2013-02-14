<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Option library
 *
 * @package     CodeAnalytic\Library
 * @author      CodeAnalytic Dev Team
 * @copyright   Copyright (c) 2013, CodeAnalytic
 * @license     http://codeanalytic.com/license
 * @version     Version 2.0.0
 */
class Option
{
    /**
     * File option
     * @var string
     */
    protected $_file = 'option.yml';

    /**
     * Get option from module
     * @param  string $module
     * @return mixed
     */
    public function get($module = NULL)
    {
        $option = Modules::find($this->_file, $module, 'config/');

        if($option[0])
        {
            $yaml   = new Symfony\Component\Yaml\Parser();
            $file   = $option[0].$option[1];
            
            return $yaml->parse(file_get_contents($file));
        }

        return FALSE;
    }

    /**
     * Save option from module
     * @param  string $module
     * @param  array  $data
     * @param  array  $required
     * @return boolean
     */
    public function save($module = NULL, $data = array(), $required = array())
    {
        $option = Modules::find($this->_file, $module, 'config/');

        if($option[0])
        {
            $yaml   = new Symfony\Component\Yaml\Parser();
            $dumper = new Symfony\Component\Yaml\Dumper();
            $data   = $required ? elements($required, $data, NULL) : $data;
            $save   = $dumper->dump($data);
            $file   = $option[0].$option[1];
            
            file_put_contents($file, $save);
            return TRUE;
        }

        return FALSE;
    }
}