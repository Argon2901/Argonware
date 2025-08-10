<?php
    include "api.php";
    include "db.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>I'll Think of a Title Name Later</title>
        <meta charset="UTF-8">
        <meta name="author" content="Collin Thompson">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <script src="index.js" type="text/javascript" defer></script>
        <!--<base href="https://www.illthinkofanamelater.io/" target="_blank">-->

    </head>

    <body>
        <h1>Contact Me</h1>
        <p>Email: crt15209@gmail.com</p>
        <p>Phone: +1 (616) 250-9558</p>
        <hr>
        <h3>Send a message</h3>
        <form>
            <p>
                Want to ask me something? Want to tell me how to make this site better?<br>
                Send me a message, and I'll get back to you!
            </p>
            <p><label for="message">Please type the message content here</label></p>
            <textarea id="message" name="message" rows="6" cols="40" placeholder="Please write your message here" required></textarea><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="email@example.com" required><br>
            <label for="phone">Phone:</label>
            <input type="phone" id="phone" name="phone" placeholder="(555) 555-5555">
            <input type="submit" value="Submit">
        </form>
        <?php
            if($_POST["message"] != null){
                if(send_message($_POST["message"], $_POST["email"], $_POST["phone"])){
                    echo "<p>Message Sent</p>";
                } else{
                    echo "<p>Message Failed to Send</p>";
                }
            }
        ?>
    </body>
</html>