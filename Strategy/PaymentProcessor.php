<?php
    
    namespace App\Strategy;
    
    use App\Strategy\PaymentStrategy\BitcoinPayment;
    use App\Strategy\PaymentStrategy\CreditCardPayment;
    use App\Strategy\PaymentStrategy\PaymentStrategy;
    use App\Strategy\PaymentStrategy\PayPalPayment;
    
    class PaymentProcessor
    {
        /** @var PaymentStrategy[] */
        private array $strategies;
        
        public function __construct(private readonly Client $client, private readonly float $amount)
        {
            $this->strategies = [
                new CreditCardPayment(),
                new PayPalPayment(),
                new BitcoinPayment(),
            ];
        }
        
        public function processPayment(): void
        {
            foreach ($this->strategies as $strategy) {
                if ($strategy->isSupport($this->client)) {
                    $strategy->pay($this->amount);
                    return;
                }
            }
            
            echo "No valid payment method found." . PHP_EOL;
        }
    }