# Refactoring to patterns exercises
 
This repo contains exercises in PHP for the book *Refactoring to patterns*

## Replace constructors with creation methods

Open the `Loan` class and refactor constructors with named creation methods. 

+ communicates kinds of instances available better than constructors
+ bypasses constructor limitations
+ makes easier to find unused creation code
- makes creation non-standard