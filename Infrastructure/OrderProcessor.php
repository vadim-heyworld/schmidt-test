<?php

namespace App\Infrastructure;

class OrderProcessorInterface {
    private $entityManager;

    public function process() {
        global $config;

        foreach ($this->orders as $order) {
            $this->entityManager->persist($order);
            $this->entityManager->flush();
        }
    }
}