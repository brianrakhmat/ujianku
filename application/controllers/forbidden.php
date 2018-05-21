<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");
/**
 * Created by PhpStorm.
 * User: brianrakhmat
 * Date: 4/15/2018
 * Time: 3:32 PM
 */

class Forbidden extends CI_Controller
{
    public function index() {
        $this->load->view('v_forbidden');
    }
}