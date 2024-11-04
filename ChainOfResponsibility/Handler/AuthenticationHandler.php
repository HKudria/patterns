<?php
    
    namespace App\ChainOfResponsibility\Handler;
    
    use App\ChainOfResponsibility\LoginRequest;
    use LogicException;
    
    class AuthenticationHandler extends AbstractLoginHandler
    {
        public function handle(LoginRequest $request): ?LoginRequest
        {
            if (!$this->getUserByUsername($request->getUsername())) {
                throw new LogicException('User not found');
            }
            
            echo $request->getUsername() . " found." . PHP_EOL;
            return parent::handle($request);
        }
        
        private function getUserByUsername(string $username): bool
        {
            $users = ['john_doe', 'demo', 'admin_user'];
            return in_array($username, $users);
        }
    }