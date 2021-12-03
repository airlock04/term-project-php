<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <title>Welcome to our page</title>
    </head>

    <body>
        <div class="menu_bar">
            <nav>
                <h3 style="margin-left: 10px; color: white;">CPS530 TERM PROJECT</h3>
                <ul>
                    <li><a href="about">About</a></li>
                    <li><a href="credits">Credits</a></li>
                    <li><a href="index">Home</a></li>
                </ul>
            </nav>
        </div>

        <a href="index" class="home">⌂</a>
        <a href="index2" class="back_button">Back</a>

        <h1 style="text-align: center; color: black; font-size: 50px;">Frameworks Description</h1>

        <div class="inline">
            <h1 class="fw_title">LARAVEL</h1>
            <pre class="description">
                Strength:
                    - Fast
                    - Secure
                    - Flexible
                    - Collaborative

                Weakness:
                1. The Composer is not strong enough
                As Laravel is a new framework, therefore it is difficult for developers to deal with it. 
                Also, the composer of Laravel is not strong enough in comparison with Ruby gems, 
                npm (node.js), pip (for python), etc.

                2. Lack of continuation between versions
                No transition from Laravel 4 to 5 has seemed. It could break the application if you try 
                to update the code.

                3. Quality is mixed at times
                There are some components in the framework which are not well-designed.

                Mostly Used For: 
                    - PHP
                    - Database Management (SQL)
            </pre>
        </div>

        <div class="inline">
            <h1 class="fw_title">TAILWIND</h1>
            <pre class="description">
                Strength:
                    - Control Over Styling
                    - Faster CSS Styling Process
                    - Responsiveness and Security 
                    - Additional Features 
                
                Weakness:
                    1. Styling and HTML are Mixed
                    You do not have to write CSS rules yourself. While this is great for those 
                    unfamiliar with CSS, it also means that Tailwind mixes style rules in with your HTML files.

                    2. It Takes Time to Learn 
                    Because of the built-in classes, Tailwind CSS is quite learning-intensive. Even for 
                    experienced developers, it can be a challenge to learn how to use and fully utilize 
                    the pre-built classes.

                    3.  Lack of Important Components
                    Tailwind does not have many significant styling components. Unfortunately, this means you have to 
                    manually add features like headers, buttons, and navigation bars for web apps.

                Mostly Used For: 
                    - Front-End Design (CSS)
            </pre>
        </div>

        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>

        <footer class="footer">
            © 2021 CPS530. All Rights Reserved.<br/>
            Website is built and designed by (Name here), (Name here), (Name here).
        </footer>
    </body>
</html>