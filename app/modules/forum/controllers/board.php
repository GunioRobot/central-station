<?php

/**
* Open Cook Book
*
* Open Cook Book is a simple CodeIgniter based cooking application that stores recipes.
*
* @package		OpenCookBook
* @version		1.0
* @author		Derek Stegelman <fotochest.com|stegelman.com>
* @license		Apache License v2.0
* @copyright		2010 OpenCookBook
*/

// ----------------------------------------------------------------

/**
* Recipes Controller
*
* @package		OpenCookBook
* @category		Controllers
* @author		Derek Stegelman
*/

class Board extends CI_Controller {
    //put your code here

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->template->write_view('content', 'boards');
        $this->template->render();
        //$this->load->view('boards');
    }
}
?>
