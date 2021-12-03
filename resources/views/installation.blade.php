<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <title>Welcome to our page</title>
    </head>

    <body class="install_page">
        <div class="menu_bar">
            <nav>
                <h3 style="margin-left: 10px; color: white;">CPS530 TERM PROJECT</h3>
                <ul>
                    <li><a href="">About</a></li>
                    <li><a href="">Members</a></li>
                    <li><a href="">Home</a></li>
                </ul>
            </nav>
        </div>

        <a href="index" class="home">⌂</a>
        <a href="index2" class="back_button">Back</a>

        <h1 style="text-align: center; color: black; font-size: 50px;">Installation</h1>

        <div class="install_laravel">
            <h2 style="margin-left: 10px; font-size: 270%">1. Laravel</h2>
            <div>
                <h1 class="steps">STEP 1</h1>
                <pre class="install_desc">
                    - Install Homebrew <a href="https://brew.sh">here</a>
                    - Run the command below on your terminal:
                        /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
                </pre>
            </div>

            <div>
                <h1 class="steps">STEP 2</h1>
                <div class="install_desc">
                    <pre>
                        - After finish installing, download PHP by running the command:
                            brew install php
                            *If you have PHP installed already, it will update it to the newest version.
                    </pre>
                </div>
            </div>

            <div>
                <h1 class="steps">STEP 3</h1>
                <div class="install_desc">
                    <pre>
                        - Download Composer <a href="https://getcomposer.org/download/">here</a>
                        - After installing, run the command:
                            composer global require laravel/installer
                    </pre>
                </div>
            </div>

            <div>
                <h1 class="steps">STEP 4</h1>
                <div class="install_desc">
                    <pre>
                        - Run the following command to create a new file:
                            vim ~/.bashrc
                        - Inside the file, write down:
                            export PATH="$HOME/.composer/vendor/bin:$PATH"
                        - Exit and save, then run the command:
                            source ~/.bashrc
                        - Run the command:
                            laravel
                    </pre>
                </div>
            </div>
        </div>

        <br/>
        <br/>

        <div class="install_tailwind">
            <h2 style="margin-left: 10px; font-size: 270%">2. Tailwind</h2>
            <div>
                <h1 class="steps">STEP 1</h1>
                <div class="install_desc">
                    <pre>
                        - Run the command on your terminal:
                            npm install -D tailwindcss@latest postcss@latest autoprefixer@latest
                    </pre>
                </div>
            </div>
        </div>

        <br/>
        <br/>

        <footer class="footer">
            © 2021 CPS530. All Rights Reserved.<br/>
            Website is built and designed by (Name here), (Name here), (Name here).
        </footer>
    </body>
</html>