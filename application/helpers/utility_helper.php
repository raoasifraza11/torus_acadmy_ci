<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Utilities for general purpose
 *
 *  @package		CodeIgniter
 *	@subpackage		Helpers
 *	@category		Helpers
 *	@author			Asif Raza <raoasifraza1@hotmail.com>
 *	@link			#
 */

if ( ! function_exists('asset_url()'))
{
    /**
     *  Translate the assets path
     *
     *  @return    string
     */
    function asset_url($sibling)
    {
        return base_url().'application/public_html/assets_alpha/be_v1/'.$sibling;
    }
}