<?php


use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testOrder() {
        $order = new Order();
        $this->assertTrue($order->isValid());
    }

    public function testOrderStatus() {
        $order = new Order();
        $order->setStatus('pending');
        $this->assertTrue($order->isPending());
    }
}
