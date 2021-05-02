<!DOCTYPE html>
<html>
    <head>
        <style>
            body {font-family: Arial, Helvetica, sans-serif;}
            form {border: 3px solid #f1f1f1;}

            button {
                background-color: #4285F4;
                color: white;
                padding: 4px 7px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 50%;
            }

            button:hover {
                opacity: 0.8;
            }

            .container {
                padding: 16px;
            }


            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
                span.psw {
                    display: block;
                    float: none;
                }

            }
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even){background-color: #f2f2f2}

            th {
                background-color: #4285F4;
                color: white;
            }
        </style>
    </head>
    <body>
        <h2 style="text-align: center">Registered Courses</h2>
        <form action="/signup.php" method="post" style="padding-left: 20%;padding-right: 20%">

            <div class="container">

                <table>
                    <tr>
                        <th>Code</th>
                        <th>Course Name</th>
                        <th>Duration (Months)</th>
                        <th>Enrollment</th>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>PHP</td>
                        <td>3</td>
                        <td><button>Enroll</button></td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>HTML</td>
                        <td>2</td>
                        <td><button>Enroll</button></td>

                    </tr>
                    
                    <tr>
                        <td>003</td>
                        <td>CSS</td>
                        <td>5</td>
                        <td><button>Enroll</button></td>

                    </tr>
                    <tr>
                        <td>004</td>
                        <td>JAVASCRIPT</td>
                        <td>3</td>
                        <td><button>Enroll</button></td>

                    </tr>
                    <tr>
                        <td>005</td>
                        <td>PYTHON</td>
                        <td>3</td>
                        <td><button>Enroll</button></td>

                    </tr>
                    <tr>
                        <td>006</td>
                        <td>MATLAB</td>
                        <td>6</td>
                        <td><button>Enroll</button></td>

                    </tr>
                    <tr>
                        <td>007</td>
                        <td>JAVA</td>
                        <td>4</td>
                        <td><button>Enroll</button></td>

                    </tr>
                    <tr>
                        <td>008</td>
                        <td>Signal Processing</td>
                        <td>6</td>
                        <td><button>Enroll</button></td>

                    </tr>
                    
                    <tr>
                        <td>009</td>
                        <td>Wireless Communication</td>
                        <td>3</td>
                        <td><button>Enroll</button></td>

                    </tr>
                    

                </table>   
            </div>

        </form>

    </body>
</html>
