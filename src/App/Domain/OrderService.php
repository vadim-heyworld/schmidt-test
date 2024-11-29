<?php
namespace App\Domain;

class OrderService
{
    public function processOrder($orderId) {  // Missing type hint
        return $this->findOrder($orderId);  // Missing return type
    }

    private function findOrder($id) {  // Missing return type and param type
        if (!$id) {
            return null;  // Inconsistent error handling
        }

        $order = $this->repository->find($id);
        if (!$order) {
            return null;  // Should throw NotFoundException
        }
    }
}