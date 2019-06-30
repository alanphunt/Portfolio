<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo TITLE; ?></title>
        <meta charset="UTF-8">
        <meta name="description" content="Alan Hunt's personal portfolio.">
        <meta name="keywords" content="Web developing, Illinois State University, Alan, Hunt, Personal, Portfolio, Blog">
        <meta name="author" content="Alan Hunt">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/ah.png">
        <link href="../css/styles.css" rel="stylesheet" type="text/css">
        <script src="../js/myscript.js" defer></script>

    </head>
    <body>    
        <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <div id="modalcontainer">
           <span class="close" onclick="closeit(this)">&times;</span>          
           <div id="modal">
               <img id="img01" src="" alt="modal image">
            </div><!--#modal-->
        </div><!--#modalcontainer-->
        
        <div id="mobilemenucontainer">                                               
            <span class="close" onclick="closeit(this)">&times;</span>

            <div id="mobileparent">
                <div id="mobileheader">
                    <a href="index"><img src="images/ah.png" alt="alan hunt logo"></a>
                </div><!--#mobileheader-->

                <div id="mobilemenu">
                    <nav>
                        <ul>
                        <li><a href="webdev">Web Portfolio</a></li>
                        <li><a href="photos">Photos</a></li>
                        <li><a href="https://www.soundcloud.com/alpal309" target="_blank">Music</a></li>
                        <li><a href="https://www.ahsoundandlighting.com" target="_blank">DJ</a></li>
                        <li><a href="blog">Blog</a></li>
                        <li><a href="projects">Projects</a></li>
                        </ul>
                    </nav>
                </div><!--#mobilemenu-->
                <div id="contact">
                    <ul>
                        <li><a href="mailto:inquire@alanphunt.com">inquire@alanphunt.com</a></li>
                        <li><a href="images/resume.pdf" target="_blank">Resume</a></li>
                        <li><a href="https://www.facebook.com/ahunt92" target="_blank">Facebook</a></li>
                        <li><a href="https://www.linkedin.com/in/alanphiliphunt/" target="_blank">LinkedIn</a></li>
                        <li><a href="#">YouTube</a></li>
                    </ul>
                </div><!--contact-->
            </div><!--#mobileparent-->
        </div><!--#mobilemenucontainer-->
        
        <div id="psuedotop"></div><!--#psuedotop-->
                  
        <div id="mastercontainer">
            <div id="content">
            
                <header>
                    <div id="headercontainer">
                        <div id="header">
                        
                            <div id="headertext">
                                <h1 id="h1"><a href="index">Alan P. Hunt</a></h1>
                            </div><!--#headertext-->
                            
                            <div id="clickformenu" onclick="mobilemenu()">
                               <!-- <img id="burger" src="images/redburger.png" alt="mmm.."> --> 
                                <p>MENU</p>
                            </div><!--#clickformenu-->
                            
                        </div><!--#header-->
                    </div><!--#headercontainer-->
                </header>                
 
                <div id="text">
                    <main>