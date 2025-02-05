The solution involves ensuring that `session_start()` is called *before* any attempt to access or modify session variables.

```php
<?php
// Start the session at the beginning of the script
session_start();

// Now it's safe to access and modify session variables
$username = $_SESSION['username'];

// ... some code ...

$_SESSION['loggedIn'] = true;
?>
```

**Important Considerations:**
* **Placement of `session_start()`:**  Place `session_start()` at the very beginning of your script, before any output is sent to the browser. Outputting anything before starting the session can cause issues.
* **Session Configuration:** Ensure proper session configuration in your `php.ini` file (e.g., `session.save_path`, `session.gc_maxlifetime`).
* **Error Handling:** Consider using error handling (e.g., `isset()` checks) to gracefully handle cases where session variables may not be set.