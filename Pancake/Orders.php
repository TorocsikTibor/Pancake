<?php

class Orders
{
    public array $orders = array();

    public function storeOrder(array $order) {
        foreach ($order as $ord) {
           $this->orders[] = $ord." pancake";
        }
    }

    public function getOrders(): array
    {
        return $this->orders;
    }
}