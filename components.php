<?php
declare (strict_types=1);

function http_head(): string{
    return <<<EOD
    <head>
        <title>Argonware</title>
        <meta charset="UTF-8">
        <meta name="author" content="Collin Thompson">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css" type="text/css">


    </head>
EOD;
}

function header_template(): string{ 
    return <<<EOD
    <div id="menubar">
        <a href="index.php">
            <nav>
                <h1>Home</h1>
            </nav>
        </a>
        
        <a href="projects.php">
            <nav>
                <h1>Projects</h1>
            </nav>
        </a>
        
        <a href="aboutme.php">
            <nav>
                <h1>About Me</h1>
            </nav>
        </a>

        <a href="contact.php">
            <nav>
                <h1>Contact</h1>
            </nav>
        </a>
    </div>
EOD;
}