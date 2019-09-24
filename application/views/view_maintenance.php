<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Site Under Maintenance</title>
    <link href="https://fonts.googleapis.com/css?family=Francois+One|Lato:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
        ::selection { background-color: #E13300; color: white; }
        ::-moz-selection { background-color: #E13300; color: white; }

        body {
            background-color: #fff;
            margin: 40px;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;
        }

        a {
            color: #003399;
            background-color: transparent;
            font-weight: normal;
        }

        code {
            font-family: Consolas, Monaco, Courier New, Courier, monospace;
            font-size: 12px;
            background-color: #f9f9f9;
            border: 1px solid #D0D0D0;
            color: #002166;
            display: block;
            margin: 14px 0 14px 0;
            padding: 12px 10px 12px 10px;
        }

        #container {
            margin: 10px;
            border: 1px solid #D0D0D0;
            box-shadow: 0 0 8px #D0D0D0;
            border-radius: 20px;
        }

        .not-found p {
        }
    </style>
</head>
<body>
    <div id="container" style="background-image: url(https://www.gstatic.com/bfe/images/verification/banner_background.svg); background-size: cover;">
        <div class="not-found">
            <div class="col-md-12">
                <div style="margin-top: 20px; text-align: center;">
                    <img width="250px" height="auto" src="https://github.com/encepsuryana/csm-web/raw/master/public/img/maintenance.jpg"></img>
                </div>
                <div style="margin: 20px; text-align: center;">
                    <h2 style="font-style: italic;">Site Under Maintenance</h2>
                    <strong>Sorry for the inconvenience. To improve our services, we have momentarily shutdown our site.</strong><br><br><hr>
                    <p>For more information contact: <br>
                        <a href="mailto:encep.suryanajr@gmail.com">Developer</a> | <a href="mailto:marketing@ciptasinergi.com">Marketing</a>
                    </p>
                </div>
            </div>
        </div>

    </div>
</body>
</html>