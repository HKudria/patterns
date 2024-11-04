Task Description: Implementing a Pizza Ordering System Using Abstract Factory Pattern

You are tasked with implementing a pizza ordering system using the Abstract Factory Pattern. This system should support different regions (e.g., Poland, Czech) and allow customers to order pizzas with various ingredients and types (e.g., Cheese, Pepperoni).
Requirements:

    Pizza Interface:
        Implement a Pizza interface that all concrete pizza classes must implement.
        The interface should define methods for preparing, baking, cutting, and boxing the pizza.

    Abstract Factory Interface:
        Implement an AbstractPizzaInterface that defines methods to order a pizza based on a region and type.

    Regional Factory:
        Create a RegionalPizza interface that represents pizza factories for different regions. It should define a createPizza() method to create pizzas of specific types.
        Implement concrete regional factories for Poland (PolandPizzaFactory) and Czech (CzechPizzaFactory).
        These factories should be responsible for creating pizzas with region-specific ingredients.

    Pizza Types:
        Implement different types of pizzas, such as Cheese Pizza and Pepperoni Pizza for each region.
        Polish and Czech pizzas should have their own classes (e.g., PolandCheesePizza, CzechCheesePizza, etc.).
        Polish pizzas should use specific ingredients like Mozzarella Cheese and Garlic Sauce, while Czech pizzas use Pepperoni Cheese and Tomato Sauce.

    Ingredient Interface:
        Define an IngredientInterface that declares methods to get components like cheese, sauce, and dough.
        Create concrete implementations for Polish and Czech ingredients (PolandIngredient, CzechIngredient), with each providing region-specific components (e.g., MozzarellaCheese, GarlicSauce, ThinDough, etc.).

    Component Interface:
        All ingredients (cheese, dough, sauce) should implement a ComponentInterface with a getName() method that prints the component's name.

    Abstract Pizza Classes:
        Implement abstract pizza classes for each region: PolandAbstractPizza and CzechAbstractPizza.
        These abstract classes should handle the common functionality (e.g., packing and cutting styles) and allow specific pizzas to extend them.

    Client Implementation:
        Create a Client class that orders pizzas using the RegionalPizzaFactory.
        The client should be able to create pizzas by specifying the region (e.g., Poland, Czech) and type (e.g., Cheese, Pepperoni).

Example Usage:

php

new Client('Poland', 'Cheese');
new Client('Czech', 'Pepperoni');

The system should print the pizza preparation steps with the appropriate ingredients, followed by baking, cutting, and boxing information.
Additional Considerations:

    Use PHP 8 features such as match() for conditional logic to determine the type of pizza and ingredients based on the region.
    Handle cases where an unknown region or pizza type is provided by throwing appropriate exceptions.