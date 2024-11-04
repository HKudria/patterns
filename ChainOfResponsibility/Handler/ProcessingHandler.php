<?php
    
    namespace App\ChainOfResponsibility\Handler;
    
    use App\ChainOfResponsibility\AccountType;
    use App\ChainOfResponsibility\LoginRequest;
    
    class ProcessingHandler extends AbstractLoginHandler
    {
        public function handle(LoginRequest $request): ?LoginRequest
        {
            if ($request->getAccountType() === AccountType::ADMIN->value) {
                echo "Admin can perform all operations." . PHP_EOL;
            } elseif ($request->getAccountType() === AccountType::USER->value) {
                echo "User can perform limited operations." . PHP_EOL;
            } elseif ($request->getAccountType() === AccountType::GUEST->value) {
                echo "Guest has read-only access." . PHP_EOL;
            }
            
            return parent::handle($request);
        }
    }