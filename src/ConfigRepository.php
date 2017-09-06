<?php

namespace XavierBaez;

class ConfigRepository
{
    protected $_config = 'test';

    public function __construct($data = array())
    {
        if (!empty($data)) {
            $this->_config = $data;
        } else {
            $this->_config = array("paths", "options");
        }
    }

    /**
     * Determine whether the config array contains the given key
     *
     * @param string $key
     * @return bool
     */
    public function has($key)
    {
        if (isset($this->_config[$key])) {

            return true;

        }

        return false;
    }

    /**
     * Set a value on the config array
     *
     * @param string $key
     * @param mixed  $value
     * @return \XavierBaez\ConfigRepository
     */
    public function set($key, $value)
    {
        $this->_config[$key] = $value;

        return $this;
    }

    /**
     * Get an item from the config array
     *
     * If the key does not exist the default
     * value should be returned
     *
     * @param string     $key
     * @param null|mixed $default
     * @return mixed
     */
    public function get($key, $default = null)
    {
        echo 'get'  . "\n";
        if (isset($this->_config[$key])) {

            return $this->_config[$key];

        }

        return $default;
    }

    /**
     * Remove an item from the config array
     *
     * @param string $key
     * @return \XavierBaez\ConfigRepository
     */
    public function remove($key)
    {
        echo 'remove'  . "\n";
        if (isset($this->_config[$key])) {

            unset($this->_config[$key]);

        }

        return $this;
    }

    /**
     * Load config items from a file or an array of files
     *
     * The file name should be the config key and the value
     * should be the return value from the file
     * 
     * @param array|string The full path to the files $files
     * @return void
     */
    public function load($files)
    {
        echo 'load'  . "\n";
        if (!is_array($files)) {
            $files = array($files);
        }
        foreach ($files as $file) {
            if (file_exists($file)) {
                $filename = basename($file);
                $this->_config[$filename] = require($file);
            }
        }
    }
}