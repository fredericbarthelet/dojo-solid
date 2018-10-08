<?php

class Index
{
    public function __invoke()
    {
        $cart = [
            'items' => [],
            'total' => 0,
        ];

        return $this->render();
    }

    public function addToCart($object)
    {
        if ($object instanceof Hammer or $object instanceof Screwdriver){
            array_push($cart['items'], $object);
            if ()
            $cart['total'] += $object->getPrice();
        }
    }

    public function removeFromCart($object)
    {
        if (!$object instanceof Hammer or !$object instanceof Screwdriver) {
            return;
        }

        if (empty($cart['items'])) {
            return;
        }

        foreach ($cart['items'] as $item) {
            if ($item->getTitle() === $object->getTitle()) {
                array_shift()
            }
        }
    }
}
