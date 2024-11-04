Task: Implement a Payment Processing System using the Strategy Design Pattern
Requirements:

    Payment Methods:
        Implement different payment strategies such as Credit Card, PayPal, and Bitcoin.

    Create Strategy Interface:
        Define an interface PaymentStrategy that has a method pay(amount: float).

    Concrete Strategies:
        Implement concrete classes for each payment method (e.g., CreditCardPayment, PayPalPayment, BitcoinPayment) that implement the PaymentStrategy interface and handle payments in their specific way.

    Payment Processor:
        Create a PaymentProcessor class that accepts a PaymentStrategy and processes the payment based on the selected strategy.

    Client Code:
        Write code that allows users to choose a payment method and process an order using the selected payment strategy.

    Extensions (Optional):
        Add more payment methods (e.g., Apple Pay, Google Pay).
        Add support for validating payment information before processing.

Objective:

Understand how the Strategy Design Pattern allows you to choose and change algorithms (payment methods) at runtime without modifying the client code, promoting flexibility and scalability.