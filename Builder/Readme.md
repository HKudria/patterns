Task 2: Car Builder

Create a Car Builder to assemble a car with different parts.

    Define a Car class with attributes like engine, color, seats, airbags, transmission, etc.
    Create a CarBuilder class to build the car step by step, setting each attribute individually.
    The builder should allow optional customization (e.g., setting the number of airbags, changing the color, or adding sunroofs).
    Once the car is built, print out its details.

Example Use:

```
Car car = new CarBuilder()
.setEngine("V8")
.setColor("Red")
.setSeats(4)
.setAirbags(6)
.build();
System.out.println(car);  // Output: Car [engine=V8, color=Red, seats=4, airbags=6]