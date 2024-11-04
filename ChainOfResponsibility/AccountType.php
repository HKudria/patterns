<?php
    
    namespace App\ChainOfResponsibility;
    
    enum AccountType: string
    {
        case USER = 'user';
        case ADMIN = 'admin';
        case GUEST = 'guest';
    }
