<script src="https://cdn.jsdelivr.net/npm/htmx.org@2.0.6/dist/htmx.min.js" integrity="sha384-Akqfrbj/HpNVo8k11SXBb6TlBWmXXlYQrCSqEWmyKJe+hDm3Z/B2WVG4smwBkRVm" crossorigin="anonymous"></script>

<?php
    include "components.php"
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Argonware</title>
        <meta charset="UTF-8">
        <meta name="author" content="Collin Thompson">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <style><?php include "style.css"; ?></style>

    </head>

    <body>
        <?php echo header_template();?>
        <h1>Contact Me</h1>
        <p>Email: crt15209@gmail.com</p>
        <p>Phone: +1 (616) 250-9558</p>
        <hr>
        <h3>Send a message</h3>
        <form hx-post="API/slowdown_server.php">
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
        <hr>
        <h3>Really don't like me? Press this button to slow down my computer!</h3>
        <form hx-post="API/slowdown_server.php">
            <input type="submit" value="Increase Lag">
        </form>
    </body>
</html>