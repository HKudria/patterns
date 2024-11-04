<?php
    
    namespace App\ChainOfResponsibility\Handler;
    
    use App\ChainOfResponsibility\LoginRequest;
    
    interface LoginHandlerInterface
    {
        public function handle(LoginRequest $request): ?LoginRequest;
        
        public function setNext(LoginHandlerInterface $handler): ?LoginHandlerInterface;
    }