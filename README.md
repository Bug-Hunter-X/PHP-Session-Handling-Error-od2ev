# PHP Session Handling Bug

This repository demonstrates a common error in PHP related to session handling.  The code attempts to access and modify session variables before the session has been started using `session_start()`. This can lead to unexpected behavior, including undefined variables, errors and security vulnerabilities.

The `bug.php` file shows the erroneous code. The `bugSolution.php` file demonstrates the corrected code with `session_start()` appropriately placed.