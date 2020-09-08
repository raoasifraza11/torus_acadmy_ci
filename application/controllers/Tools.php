<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tools extends TTT_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct() {
        parent::__construct();
    }

    public function help()
	{
        echo "Hello! sorry help is not yet setup.".PHP_EOL;
	}

    /**
     * Clear all cache from cache directory
     * EscapeColorsList: https://github.com/box/bart/blob/master/src/Bart/EscapeColors.php
     */
    public function clear_cache()
    {
        $CI =& get_instance();
        $path = $CI->config->item('cache_path');

        $cache_path = ($path == '') ? APPPATH.'cache/' : $path;

        $handle = opendir($cache_path);
        while (($file = readdir($handle))!== FALSE)
        {
            //Leave the directory protection alone
            if ($file != '.htaccess' && $file != 'index.html')
            {
                @unlink($cache_path.'/'.$file);
            }
        }
        closedir($handle);

        echo "\033[01;32m Cache has been cleared! \033[0m ".PHP_EOL;
    }

    /**
     * Serve the application on localhost
     * For MacOSX Port 8000
     */
    public function serve(){
        echo "\033[01;32m Application running on http://localhost:8000 \033[0m ".PHP_EOL;
        exec('php -S localhost:8000');
    }

    /**
     * CLI ONLY FOR TESTING PURPOSE
     *
     * NOT TO USE IN PRODUCTION
     */
    public function test($a){
        echo $a ;
    }


}
