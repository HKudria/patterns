Task 1: Simple Factory

Objective: Implement a simple factory that creates objects based on a given type.

Scenario: Imagine you are building a pizza ordering system.

    Implement a Pizza class with a few subclasses like MargheritaPizza, PepperoniPizza, and VeggiePizza.
    Create a PizzaFactory class that has a method create_pizza(type) which returns an instance of the appropriate pizza subclass based on the type string provided.

Bonus: Add a method to each pizza class called prepare() that prints steps for preparing that specific pizza.
Task 2: Extend the Factory with Configurations

Objective: Expand the factory to include more complex object creation logic.

Scenario: Continue with the pizza ordering system, but now customers can specify the size of the pizza and extra toppings.

    Update the Pizza classes to accept parameters like size (small, medium, large) and toppings (a list of extra toppings).
    Modify the PizzaFactory to handle these parameters and return a customized pizza instance.

Bonus: Add validation logic in the factory to ensure only certain toppings are allowed for certain pizza types.