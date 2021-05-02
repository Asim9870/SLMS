<!DOCTYPE html>
<html>
    <head>
        <style>
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #4285F4;
            }

            li {
                float: left;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            li a:hover {
                background-color: #111;
            }
            .logo{
                width: 120px;
                height: 120px;
                float: left;
                margin-top:-3%;
            }
            * {
                box-sizing: border-box;
            }

            .column {
                float: left;
                width: 50%;
                padding: 5px;
            }

            /* Clearfix (clear floats) */
            .row::after {
                content: "";
                clear: both;
                display: table;
            }
            button {
                background-color: #c00;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }
            html {
                scroll-behavior: smooth;
            }

        </style>
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    </head>
    <body>

        <ul>
            <li style="margin-left: 27%"><a class="active" href="#home">Home</a></li>
            <li><a href="#news">My Profile</a></li>
            <li><a href="./courses.php">Courses</a></li>
            <li><a href="./signup.php">Sign Up</a></li>
            <li><a href="./login.php">Log in</a></li>
            <li><a href="#section1">Feedback</a></li>
            <li><a href="">Contact Us</a></li>
            <li style="float: right"><a href="#about">Logout</a></li>
            <li ><a href="#home"></a></li>
        </ul>
        <div style="width:100%"> <span style="text-align: center; width: 100%;position: absolute;padding-top: 20px;font-size: 25px"> Welcome To School Learning Management System </span><img src="./img/logo.png" class="logo"/></div>

      
            <img src="./img/6TH2.png" alt="img not found" style="width: 100%;height:550px; border-radius: 10px">
        <br>
        <h1 style="text-align: center;background-color: #b6d4fe;padding: 5px; "> Popular Courses</h1>




        <div class="row">
            <div class="column">
                <figure>
  <img src="pic_trulli.jpg" alt="Trulli" style="width:100%">
  <figcaption>Fig.1 - Trulli, Puglia, Italy.</figcaption>
</figure>
            </div>
            
            <div class="column">
                <figure>
                <img src="./img/CSSimg.jpg" alt="CSS" style="width:80%;height: 300px;;margin-left: 10%;border-radius: 10px"/>
                <figcaption style="text-align: center;padding-top: 10px;"> Learn CSS  </figcaption>
            </figure>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <figure>
                    <img src="./img/PHPimg.jpg" alt="PHP" style="width:80%;height: 300px;;margin-left: 10%;border-radius: 10px">
                    <figcaption style="text-align: center;padding-top: 10px;"> Learn PHP </figcaption>
                </figure>
            </div>
            <div class="column">
                <figure>
                <img src="./img/python.jpg" alt="PYTHON" style="width:80%;height: 300px;;margin-left: 10%;border-radius: 10px">
                <figcaption style="text-align: center;padding-top: 10px;"> Learn PYTHON </figcaption>
              </figure>
            </div>
        </div>
        <div id="section1" style="width: 100%;padding: 10%;padding-top: 10px;padding-bottom: 10px;background-color: gray;opacity: 0.8;border-radius:10px">
            <span style="">Feedback</span>
            <textarea placeholder="Your Feedback" style="width: 100%;height: 100px; padding: 10px"></textarea> 
            <button type="submit">Submit</button>
        </div>



        <script>
            $( document ).ready(function() {
                //                var i=1;
                //                window.setInterval(function(){
                //                    if(i==6){
                //                        i=1;
                //                    }
                //                    $('#r'+i).attr("checked", "checked");
                //                    i=i+1;
                //                }, 3000);
            });    
        </script>

    </body>
</html>
