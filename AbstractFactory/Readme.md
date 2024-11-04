Task Description: Abstract Factory Pattern in PHP
Problem:

You need to build a cross-platform GUI framework that can generate UI components (like buttons and checkboxes) for different operating systems (Windows and macOS) without modifying the client code.
Requirements:

    Abstract Products:
        Define abstract interfaces for UI components: Button and Checkbox.

    Concrete Products:
        Implement Button and Checkbox for both Windows and macOS platforms.

    Abstract Factory:
        Create an abstract factory interface GUIFactory that declares methods to create platform-specific buttons and checkboxes.

    Concrete Factories:
        Implement concrete factories (WindowsFactory and MacOSFactory) that produce the correct platform-specific components.

    Client:
        Create a class Application that uses the factory to create UI components without needing to know the specific platform.
        The client should decide the platform at runtime and instantiate the appropriate factory.

Additional Challenge:

    Expand the framework by adding more components like Text Fields or supporting more platforms like Linux.

Good luck!