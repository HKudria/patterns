Task: Build a Smart Home Automation System using the Command Design Pattern
Requirements:

    Create a Command Interface:
        Define a Command interface with an execute() method.

    Devices to Control:
        Light (turn on/off)
        Thermostat (set temperature)
        Door Lock (lock/unlock)

    Implement Concrete Commands:
        Create concrete command classes for actions like turning on/off lights, locking/unlocking doors, and setting temperature.

    Invoker Class:
        Create an Invoker class (e.g., a remote control) to execute commands based on user input.

    Receiver Classes:
        Implement classes like Light, Thermostat, and DoorLock that define the actual operations (turn on/off, set temperature, etc.).

    Undo/Redo Functionality (Optional):
        Add undo/redo functionality for the commands to reverse actions.

    Client Code:
        Write a client that sets up the system and allows the user to issue commands to control the devices.

    Extensions (Optional):
        Add new devices (e.g., Fan, TV) and their corresponding commands.
        Add scheduling or automation of commands.

Objective:

Understand and apply the Command Design Pattern to decouple the invoker (remote) from the actual implementation of device operations, allowing flexible command management.