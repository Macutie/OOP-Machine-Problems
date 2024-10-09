# Object-oriented Programming Activity

This repository contains PHP solutions for an Object-oriented Programming (OOP) activity. Each problem is solved in a separate PHP file to demonstrate concepts like inheritance, method overriding, and default values.

## Problems

1. Write a PHP program to create a Vehicle class with `name`, `speed`, and `mileage` instance attributes.

2. Create a Vehicle class without any variables and methods.

3. Create a child class Bus that will inherit all of the variables and methods of the Vehicle class in Problem #1.

4. Create a Bus class that inherits from the Vehicle class in Problem #1. Give the capacity argument of `Bus->seating_capacity()` a default value of 50.

5. Using the Vehicle, Bus, and Car classes, define a property that must have the same value for every class instance (object).

6. Create a Bus child class that inherits from the Vehicle class. The default fare charge of any vehicle is seating capacity * 100. If the Vehicle is a Bus instance, an extra 10% of the total fare is added as a maintenance charge. So the total fare for the Bus instance will be:  
   `final amount = total fare + 10% of the total fare`

