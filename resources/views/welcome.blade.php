<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MILOSANDRIC</title>

        <!-- Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #c1e3e5;
                color: #fff;
                /*font-family: 'Raleway', sans-serif;*/
                font-family: 'Roboto', sans-serif;
                height: 100vh;
                margin: 0;

            }

            h1{
                font-size: 30px;
                text-transform: uppercase;
                z-index: 9999;

            }

            p{
                font-size: 20px;
                color: #fff;
                font-weight: 900;
            }

            a{
                text-decoration: none;
            }

            a:hover{
                color:#fff;
                cursor: auto;
                text-decoration: underline;
            }

            img{
                width: 38px;
                height: 38px;
                border: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                margin: 0;
                white-space: nowrap;
                z-index: 999;
            }

            .title {
                /*font-size: 84px;*/
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .logo{
                margin-top: -35px;
                position: absolute;
                opacity: 0.2;
                /*background-image: url('img/logo.jpg');*/
                width: 207px;
                height: 290px;
                background-size: 207px 290px;
                background-repeat: no-repeat;
                
            }
            #helloText{
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div style="width:100%;height: 100%;background-image: url('img/a.png')">
            <div class="flex-center position-ref full-height">
            <div class="logo"></div>
                <div class="content">
                    <h1>&#60;Software developer. Engineer. Artisan&#47;&#62;</h1>
                    <a href="mailto:milosa942@gmail.com"><p id="helloText">I also like talking. Say hello.</p></a>
                    <p>
                        <img src="img/face.png">
                        <img src="img/insta.png">
                        <img src="img/mail.png">
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
