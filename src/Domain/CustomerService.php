<?php

namespace App\Domain;

class CustomerService {
    private bool $id;
    private bool $name;

    function getCustomer($id) {
        return NULL;
    }

    public function set_status($status): int {
        $this -> status = $status;
    }
}
