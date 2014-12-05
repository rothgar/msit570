<!DOCTYPE html>
<html>
<head></head>
<body>

<form name="password" method="POST" action="#">
Enter your password
<input type="text" name="password">
<br>
<input type="submit" name="pass_submit">

</form>

<?php
// Check if password is set
if (isset($_POST['pass_submit'])) {
    $password = $_POST['password'];
    echo "<h4>Your password is: ".$password."</h4>";
    // Test proper password length
    if ( 12 < strlen($password) || strlen($password) < 8) {
        echo "<p>Password must be 8-12 characters</p>";
        $fail = 1;
    }
    // Test for 2 digits
    if (! preg_match('/.*\d.*\d/', $password) ) {
        echo "<p>Password must have at least two digits</p>";
        $fail = 1;
    }
    // Test for spaces
    if ( preg_match('/ +/', $password) ) {
        echo "<p>Password cannot contain spaces</p>";
        $fail = 1;
    }
    // Test for upper case characters
    if (! preg_match('/.*[A-Z]/', $password) ) {
        echo "<p>Password must contain at least one upper case character</p>";
        $fail = 1;
    }
    // Test for lower case characters
    if (! preg_match('/.*[a-z]/', $password) ) {
        echo "<p>Password must contain at least one lower case character</p>";
        $fail = 1;
    }
    // Test for special characters
    if (! preg_match('/.*[\$#@&*?!]/', $password) ) {
        echo "<p>Password must contain at least one special character $, #, @, &, *, ?, !</p>";
        $fail = 1;
    }
    // Test for year patterns
    if ( preg_match('/.*(2013|2014|2015)/', $password) ) {
        echo "<p>Password cannot contain the year 2013, 2014, or 2015</p>";
        $fail = 1;
    }
    // If any previous test failed have them try again
    if ( ! $fail ) {
       echo "<h3>Good Job! Your password meets all requirements</h3>";
    } else {
        echo "<h3>Please try another password</h3>";
    }
}
?>

</body>
</html>
