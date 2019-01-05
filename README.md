# Iterator Design Pattern

We will implement Iterator Pattern in this example. It means that we will create a class, when we
initialize to create object, the object will be an iterable. Then, we can iterate through it. In our
example, we will create a NameRepo repository, we will add few names, then we will iterate through
it. This is pretty simple. When you create a class just implement PHP's built in Iterator interface.
Then, implement required methods.
    
    class NameRepo implements Iterator {
    ...
    }
 
Why not use built in arrays? You may use it, but in this method, you define your own adding and
removing method. You may not use remove method and user will not be able to remove items from the
list anyhow.
