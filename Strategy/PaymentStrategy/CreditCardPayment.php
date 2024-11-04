<?php
    
    namespace App\Strategy\PaymentStrategy;
    
    use App\Strategy\Client;
    use App\Strategy\PaymentMethod;
    
    class CreditCardPayment implements PaymentStrategy
    {
        public function isSupport(Client $client): bool
        {
            return $client->getWallet() === PaymentMethod::CARD;
        }
        
        public function pay(float $amount): void
        {
            echo "$amount was paid by " . PaymentMethod::CARD->value . PHP_EOL;
        }
    }