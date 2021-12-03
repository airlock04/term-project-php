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

        <h1 style="text-align: center; color: black; font-size: 50px;">Demonstration</h1>

        <div class="create_div">
            <nav>
                <p>
                    Creating a beautiful page is simple. First thing you need to consider is the design. You should go 
                    colors that compliments each other, not contrasting and opposite. On our demo page, we chose the 
                    color scheme blue.
                </p>

                <img src="https://plantingseedscaribbean.com/store/wp-content/uploads/2021/10/word-design-written-top-colorful-geometric-3d-shapes_2227-1663.jpg" alt="Design" style="width: 400px; height: auto; border-radius: 15px;">
            </nav>
        </div>

        <br/>

        <div class="create_div">
            <nav style="margin-left: 100px">
                <img src="https://miro.medium.com/max/2000/1*D1D_LeQm6o_6prrIi2Jw3w.gif" alt="Laravel" style="width: 300px; height: auto; border-radius: 15px; margin-left: 20px;">

                <p>
                    Next thing to consider is the structure and skeleton of the page. Without any CSS/JS, you should 
                    structure your page into sections or dividents. On our demo page, we decided to create 3 sections: 
                    Menu bar, Content, and Footer.
                </p>
            </nav>
        </div>

        <br/>

        <div class="create_div">
            <nav>
                <p>
                    The last thing to consider is the actual styling of the page. Without style sheet, a web page would 
                    look naked and unpleasent to navigate through. Common use of style sheet is for spacing, color scheme, 
                    position, and responsive design. On our demo page, we placed our menu bar on the very top of the page, 
                    and our footer on the very bottom of the page. Whereas our content is located at the center.
                </p>

                <img src="https://designmodo.com/wp-content/uploads/2017/03/style-guide.jpg" alt="Style Sheet" style="width: 300px; height: auto; border-radius: 15px; margin-left: 20px;">
            </nav>
        </div>

        <br/>

        <div class="create_div">
            <nav>
                <p>To see our demo page, click <a href="demo">here</a>.</p>
                <img src="https://www.pngkit.com/png/full/792-7929990_child-clipart-technology-kid-coding-clipart.png" alt="Happy_coding" style="width: 200px; height: auto; border-radius: 15px; margin-left: 20px;">

                <h2>Happy Coding!</h2>
            </nav>
        </div>

        <br/>

        <footer class="footer">
            © 2021 CPS530. All Rights Reserved.<br/>
            Website is built and designed by (Name here), (Name here), (Name here).
        </footer>
    </body>
</html>