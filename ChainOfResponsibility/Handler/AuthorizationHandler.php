<?php
    
    namespace App\ChainOfResponsibility\Handler;
    
    use App\ChainOfResponsibility\LoginRequest;
    use LogicException;
    
    class AuthorizationHandler extends AbstractLoginHandler
    {
        public function handle(LoginRequest $request): ?LoginRequest
        {
            if (!$this->checkPassword($request->getPassword())) {
                throw new LogicException('Invalid password');
            }
            
            $request->setHash($this->createHash($request->getPassword()));
            echo "Hash generated: " . $request->getHash() . PHP_EOL;
            
            return parent::handle($request);
        }
        
        private function checkPassword(string $password): bool
        {
            return preg_match('/^(?=.*[A-Z])(?=.*[!@#$%^&*(),.?":{}|<>]).+$/', $password);
        }
        
        private function createHash(string $password): string
        {
            return hash('sha256', $password);
        }
    }