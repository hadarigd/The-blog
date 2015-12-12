<?php

require_once "base.php";

class Team extends Base {
    function __construct() {
        $data['logged'] = (isset($_SESSION['logged']) && $_SESSION['logged'] == true);
        $data['username'] = (isset($_SESSION['username'])) ? '<div class="username"><span>Hello, '.  $_SESSION['username'].'</span></div>' : "";
        $data['title'] = "Team";
        echo $this->render2($data,'top.php');
        echo $this->render2($data,'team.php');
        echo $this->render2($data,'bottom.php');
    }
    
}
