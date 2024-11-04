Task: Request Validation and Processing System

Imagine you're developing a simple request handling system. Each request goes through multiple stages of validation and processing, with each stage having a specific responsibility. If any stage cannot handle the request, it passes it along the chain to the next stage.

Problem:
You need to design a system to handle incoming user requests, where each request contains some key data (e.g., username, password, and account type). The request needs to go through the following stages:
1. Authentication:

   Check if the user is authenticated (e.g., a valid session or token).
   If authenticated, pass the request to the next handler in the chain.
   If not authenticated, reject the request.

2. Authorization:

   Check if the authenticated user has permission to perform the operation (based on account type: admin, user, or guest).
   If authorized, pass the request to the next handler in the chain.
   If not authorized, reject the request.

3. Validation:

   Ensure the request data (username and password) are valid (e.g., non-empty, correct format).
   If valid, pass the request to the next handler in the chain.
   If invalid, reject the request.

4. Processing:

   If the request is valid, authenticated, and authorized, process the request (e.g., update user data, perform an action, etc.).

Requirements:

    Chain of Responsibility: Each of the stages above (Authentication, Authorization, Validation, Processing) should be implemented as a separate handler in a chain. Each handler will decide if it can handle the request or pass it along to the next handler.

    Extensibility: Your design should allow easy addition of new stages in the future.

Example Scenario:

    A request comes in with the following details:

    json

    {
      "username": "john_doe",
      "password": "secure123",
      "account_type": "user"
    }

    If the user is authenticated, has the right account type, and the request is valid, the system should proceed to processing.

    If any stage fails (e.g., wrong account type, invalid data, or missing authentication), the system should reject the request with an appropriate message.

Hint:

    Create abstract classes/interfaces for the handler and concrete implementations for each stage (AuthenticationHandler, AuthorizationHandler, etc.).
    Ensure that each handler has a reference to the next handler, forming the chain.