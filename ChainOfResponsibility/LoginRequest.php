<?php
    
    namespace App\ChainOfResponsibility;
    
    use InvalidArgumentException;
    
    class LoginRequest
    {
        private string $username;
        private string $password;
        private string $accountType;
        private ?string $hash = null;
        
        public function __construct(string $json)
        {
            $decode = json_decode($json, true);
            
            if (!isset($decode['account_type'], $decode['username'], $decode['password'])) {
                throw new InvalidArgumentException('Invalid request format');
            }
            
            $this->accountType = $decode['account_type'];
            $this->username = $decode['username'];
            $this->password = $decode['password'];
        }
        
        public function getUsername(): string
        {
            return $this->username;
        }
        
        public function getPassword(): string
        {
            return $this->password;
        }
        
        public function getAccountType(): string
        {
            return $this->accountType;
        }
        
        public function getHash(): ?string
        {
            return $this->hash;
        }
        
        public function setHash(?string $hash): void
        {
            $this->hash = $hash;
        }
    }