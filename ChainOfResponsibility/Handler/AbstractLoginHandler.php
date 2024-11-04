<?php
    
    namespace App\ChainOfResponsibility\Handler;
    
    use App\ChainOfResponsibility\LoginRequest;
    
    abstract class AbstractLoginHandler implements LoginHandlerInterface
    {
        private ?LoginHandlerInterface $nextHandler = null;
        
        public function setNext(LoginHandlerInterface $handler): ?LoginHandlerInterface
        {
            $this->nextHandler = $handler;
            return $this->nextHandler;
        }
        
        public function handle(LoginRequest $request): ?LoginRequest
        {
            if ($this->nextHandler) {
                return $this->nextHandler->handle($request);
            }
            return $request;
        }
    }