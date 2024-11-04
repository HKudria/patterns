<?php
    
    namespace App\Strategy;
    
    class Client
    {
        public function __construct(private PaymentMethod $wallet)
        {
        }
        
        public function getWallet(): PaymentMethod
        {
            return $this->wallet;
        }
        
        public function setWallet(PaymentMethod $wallet): void
        {
            $this->wallet = $wallet;
        }
    }