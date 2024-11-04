<?php
    
    namespace App\ChainOfResponsibility\Handler;
    
    use App\ChainOfResponsibility\AccountType;
    use App\ChainOfResponsibility\LoginRequest;
    use InvalidArgumentException;
    
    class ValidationHandler extends AbstractLoginHandler
    {
        public function handle(LoginRequest $request): ?LoginRequest
        {
            if (!AccountType::tryFrom($request->getAccountType())) {
                throw new InvalidArgumentException(sprintf('Invalid account type: %s', $request->getAccountType()));
            }
            
            echo "Request is valid for " . $request->getAccountType() . PHP_EOL;
            return parent::handle($request);
        }
    }