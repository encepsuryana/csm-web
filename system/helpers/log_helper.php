<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2019, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	Log Helper - CodeIgniter
 * @author	Encep Suryana
 * @copyright	Copyright (c) 2019, Encep Suryana (https://www.linkedin.com/in/encep-suryana-b60080113/)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter Array Helpers
 *
 * @package		Log Helper CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Encep Suryana
 * @link		https://www.linkedin.com/in/encep-suryana-b60080113/
 */

// ------------------------------------------------------------------------

function helper_log($tipe = "", $str = ""){
	$CI =& get_instance();

	if (strtolower($tipe) == "login"){
		$log_tipe   = 0;
	}
	elseif(strtolower($tipe) == "logout")
	{
		$log_tipe   = 1;
	}
	elseif(strtolower($tipe) == "add"){
		$log_tipe   = 2;
	}
	elseif(strtolower($tipe) == "edit"){
		$log_tipe  = 3;
	}
	elseif(strtolower($tipe) == "delete"){
		$log_tipe  = 4;
	}

    // paramter
	$param['log_user']      = $CI->session->userdata('full_name');
	$param['log_tipe']      = $log_tipe;
	$param['log_desc']      = $str;

    //load model log
	$CI->load->model('Model_log');

    //save to database
	$CI->Model_log->save_log($param);

}