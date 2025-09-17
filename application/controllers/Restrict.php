<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Restrict extends CI_Controller
{
    public function index()
    {
        //echo password_hash("meymey12", PASSWORD_DEFAULT);
        $this->template->show("login");
    }
}
