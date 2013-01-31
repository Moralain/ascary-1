<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Ascary</title>
        <link rel="icon" type="image/x-icon" href="imagenes/favicon.ico" />
        <meta name="Keywords" content=""/>
        <meta name="Description" content="Ascary website"/>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="css/nivo-slider.css" rel="stylesheet" type="text/css"/>
        <link href="css/bar.css" rel="stylesheet" type="text/css"/>
        <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
        <script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
        <script src="javascript/nivo-slider/jquery.nivo.slider.pack.js"></script>
        <script>
            $(document).ready(function(){
                var directions = [ 'left', 'right', 'up', 'down' ];
                function randomDirection () {
                    return directions[Math.floor(Math.random() * 4)];
                }
                
                function showPage (page) {
                    var container = $('#container');
                    container.hide("slide", { direction : randomDirection() }, 1000,
                    function () {
                        container.load(page + '.php', (function () { 
                            var direction = randomDirection ();
                            container.show("slide", { direction : direction }, 1000, function () {
                                if ($('#decoration').size) {
                                    $('#decoration').fadeIn();
									$('#bigDisk').animate({"left": "+=250px"}, "slow");
									$('#smallDisk').animate({"left": "+=800px"}, "slow");
									$('#nut').animate({"left": "+=700px"}, "slow");
									
                                }
                            }); 
                        }));   
                    }
                );
                }
                
                $('#menu a').click(function(){
                    var page = $(this).attr("href");
                    showPage (page);
                    return false;
                });
                
                showPage ('gallery');
            });
         
        </script>
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->	
    </head>

    <body>
        <div id="ppalContainer">
            <div id="head">    	
                <h4>FOLLOW US</h4>
                <div id="socialMedia">    
                    <a href="#"><img src="images/faceIcon.png" /></a>
                    <a href="#"><img src="images/twitterIcon.png" /></a>
                    <a href="#"><img src="images/pinterIcon.png" /></a>
                    <a href="#"><img src="images/photoIcon.png" /></a>        
                </div>
                <a href="index.php"><img src="images/logo.png"  /></a>    
                <div id="menu">
                    <ul>
                        <li><a href="company" class="company">COMPANY</a></li>
                        <li><a href="bikes" class="bikes">THE BICYCLES</a></li>
                        <li style="margin-left:307px"><a href="press" class="press">PRESS</a></li>
                        <li><a href="contact" class="contact">CONTACT US</a></li>
                    </ul>
                </div>
            </div>

            <div id="container"></div>

            <div id="footer">
                <p>ASCARI BICYCLES 2012 © ALL RIGHTS RESERVED</p>
                <a href="#"><p>LEGAL</p></a>
            </div>
        </div>
    </body>
</html>
