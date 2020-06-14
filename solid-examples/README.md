1.  Single Responsibility Principle (SRP)
        Each class should have one responsibility and one responsibility only. This means that all the methods and properties should all work towards the same goal. A class should a well defined purpose. Also, a class should have one reason to change.

2.  Open/Closed Principle (OCP)
        According to this principle, a software entity must be easily extensible with new features without having to modify its existing code in use.

3.  Liskov Substitution Principle (LSP)
        This principle basically specifies that child classes should be suitable for their parent classes. This means it will adhere to the principles and functionality of the class it extends.
        Principle is based on the parent-child relationship in other words inheritance features of OOD (Object Oriented Design)
        Objects in a program should be replaceable with instances of their subtypes without altering the correctness of that program

4. Interface Segregation Principle (ISP)
        This principle is probably the simplest in terms of theory.
        A client should not be forced to use interfaces that it doesn’t need.

5.  Dependency Inversion Principle (DIP)
        Entities must depend on abstractions not on concretions.
        This principle means that a particular class should not depend directly on another class but on an abstraction of this class. 
        High level modules should not depend on low level modules, both should depend on details. Details should depend upon abstractions