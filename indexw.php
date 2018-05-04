<!DOCTYPE html>
<html>

    <head>
        <title>HNG Internship 4.0 | Welcome</title>
        <link rel="stylesheet" type="text/css" href="style.css">       
    </head>

    <body>
           
            <header>
                <div class="row">
                    <ul class="main-nav">
                        <li><a href=""></a> Home</li>
                        <li><a href=""></a> About</li>
                        <li><a href=""></a> Support</li>
                    </ul>
                </div>

                <div class="date">
                    <ul class="time">
                    	<?php
                    	date_default_timezone_set("Africa/Lagos");
                    	?>
                        <li><?= date('h:iA'); ?></li>
                        <li><?= date('d-m-Y'); ?></li>
                    </ul>
                </div>
               
            </header>

            <div class="container">
                <div class="center">Welcome to HNG Internship 4.0</div>                
                <div class="bottom-right">"As we look into the next century, 
                    <br /> Leaders will be those who inspire others 
                    <br />Bill Gates"</div>
        </div>
    </body>
</html>