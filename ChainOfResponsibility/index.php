<?php
    
    use App\ChainOfResponsibility\Handler\AuthenticationHandler;
    use App\ChainOfResponsibility\Handler\AuthorizationHandler;
    use App\ChainOfResponsibility\Handler\ProcessingHandler;
    use App\ChainOfResponsibility\Handler\ValidationHandler;
    use App\ChainOfResponsibility\LoginRequest;
    
    require __DIR__ . '/../vendor/autoload.php';
    
    $authentication = new AuthenticationHandler();
    $validation = new ValidationHandler();
    $authorization = new AuthorizationHandler();
    $processing = new ProcessingHandler();
    
    $authentication
        ->setNext($validation)
        ->setNext($authorization)
        ->setNext($processing);
    
    $user1 = new LoginRequest('{
        "username": "john_doe",
        "password": "secure123",
        "account_type": "user"
    }');
    
    $user2 = new LoginRequest('{
        "username": "demo",
        "password": "Secure123$",
        "account_type": "admin"
    }');


    try {
        $authentication->handle($user1);
    } catch (Exception $exception) {
        echo $exception->getMessage() . PHP_EOL;
    }
    
    try {
        $authentication->handle($user2);
    } catch (Exception $exception) {
        echo $exception->getMessage() . PHP_EOL;
    }
