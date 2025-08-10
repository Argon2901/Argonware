const headertemplate = document.createElement('headertemplate');

headertemplate.innerHTML=`
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
`;

document.body.appendChild(headertemplate.content);