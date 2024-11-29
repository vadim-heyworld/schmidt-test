<?php

namespace App\Domain;

class CustomerService {
    private $id;
    private $Name;

    function getCustomer($id) {
        return NULL;
    }

    public function set_status($status) {
        $this -> status = $status;
    }
}
