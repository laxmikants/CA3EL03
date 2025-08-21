# What is an Error?

An **error** is an issue in the program that cannot usually be handled by the program itself. Errors are often caused by problems outside the program's control, such as hardware failures, running out of memory, or syntax mistakes. In PHP, errors are typically fatal and stop the execution of the script.

**Examples:**
- Parse errors (syntax mistakes)
- Fatal errors (calling undefined functions)
- Memory limit exceeded

---

# What is an Exception?

An **exception** is an object that describes an unusual or erroneous situation that occurs during the execution of a program. Exceptions can be handled in code using `try`, `catch`, and `finally` blocks, allowing the program to continue running or to fail gracefully.

**Examples:**
- Division by zero
- File not found
- Invalid user input

---

# Key Differences

| Errors                        | Exceptions                      |
|-------------------------------|---------------------------------|
| Cannot be handled in code     | Can be handled using `try-catch`|
| Usually fatal                 | Can be non-fatal                |
| Occur at compile or runtime   | Occur at runtime                |
| Examples: syntax errors,      | Examples: invalid input,        |
| memory errors                 | file not found                  |

---

# Exception Handling in PHP

PHP uses `try`, `catch`, and `finally` blocks for exception handling.

```php
try {
    // Code that may throw an exception
} catch (Exception $e) {
    // Handle the exception
} finally {
    // (Optional) Code that always runs
}
```

You can throw exceptions using the `throw` keyword:

```php
throw new Exception("Error message");
```

---

# Handling Multiple Exceptions

PHP allows multiple `catch` blocks to handle different types of exceptions:

```php
try {
    // Code that may throw different exceptions
} catch (TypeError $e) {
    // Handle type errors
} catch (Exception $e) {
    // Handle general exceptions
}
```

---

# Custom Exception Classes

You can define your own exception classes by extending the built-in `Exception` class:

```php
class MyException extends Exception {}

try {
    throw new MyException("Custom exception!");
} catch (MyException $e) {
    echo $e->getMessage();
}
```

---

# Best Practices

- Use exceptions for exceptional conditions, not for regular control flow.
- Always catch exceptions to prevent program crashes.
- Use custom exception classes for specific error types.
- Clean up resources in the `finally` block if needed.

---

