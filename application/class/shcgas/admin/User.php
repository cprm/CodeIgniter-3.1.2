<?php
namespace shcgas\admin;

class User
{
    private $_ci;

    public function __construct()
    {
        $this->_ci = &get_instance();
    }

    function print() {
        echo "User";

        $this->_ci->load->view('welcome_message');
    }
}
