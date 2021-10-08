<?php
// FORM HANDLING
// the inputs in the html file needs to have an
// "action" attribute, pointing to the php file,
// as an event handler.
//
// EXAMPLE:
// ... action="relative/path/to/php/file" ...
//
// In this example we use post as the method. So
// <form method="post"> needs to be defined.
//
// FOR FORM VALIDATION, ALWAYS USE POST METHOD!!!



// Example oh how to send variable values to
// html pages
//
// $form_url = "play.html" ;
// $player_url = "player.html" ;
// 
// $my_mp3 = $_POST["mp3name"]; 
// 
// header("Location: $player_url?mp3name=$my_mp3" );
// exit ;

htmlspecialchars($_SERVER["PHP_SELF"]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // now $var receives the value
    // submitted by whoever holds
    // "name_value" (which it's a value 
    // inside 'name' attribute)
    if (empty($_POST['my_input_name'])) {
        $username_error = "Please, enter the username";
        // if the name is empty, some javascript
        // needs to display an error. The validation
        // should be in here or in the front?
        // $_SERVER["PHP_SELF'] could be used to...
    } else {
        // for security reasons, htmlspecialchars() function
        // should be used to check if theres malicious
        // code in the forms.
    }
}
?>
