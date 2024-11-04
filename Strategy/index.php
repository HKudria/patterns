<?php
    
    require __DIR__ . '/../vendor/autoload.php';
    
    use App\Strategy\Client;
    use App\Strategy\PaymentMethod;
    use App\Strategy\PaymentProcessor;
    
    $client = new Client(PaymentMethod::PAYPAL);
    $paymentProcessor = new PaymentProcessor($client, 100.00);
    $paymentProcessor->processPayment();
    
    $client->setWallet(PaymentMethod::CARD);
    $paymentProcessor->processPayment();
    
    $client->setWallet(PaymentMethod::BITCOIN);
    $paymentProcessor->processPayment();