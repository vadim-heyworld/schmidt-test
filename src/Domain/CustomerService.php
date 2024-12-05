<?php

namespace App\Domain;

class CustomerService {
    private string $id;
    private string $name;

    function getCustomer($id) {
        return NULL;
    }

    public function set_status($status): int {
        $this -> status = $status;
    }
}
