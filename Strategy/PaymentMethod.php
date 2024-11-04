<?php
    namespace App\Strategy;
    
    enum PaymentMethod: string
    {
        case BITCOIN = 'bitcoin';
        case PAYPAL = 'paypal';
        case CARD = 'card';
    }