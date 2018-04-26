<?php

namespace App\Library\Services;

use Vendor\stackphp\src\api as api;

class StackOverflow
{
    function __construct() {
        $this->$stackoverflow = API::Site('stackoverflow');
    }

    public function questions($num){
        $question = $this->$stackoverflow->Questions($num)->Exec()->Fetch();
        return $question;
    }
}
