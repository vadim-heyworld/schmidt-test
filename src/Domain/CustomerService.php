<?php

namespace App\Domain;

class CustomerService {
    private int $id;
    private string $name;

    function getCustomer(int $id): ?Customer {
        return NULL;
    }

    public function set_status($status): int {
        $this -> status = $status;
    }
}
