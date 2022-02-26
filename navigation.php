<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Jquery-practise</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="icon" href="assets/images/favicon.png" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
      <link rel="stylesheet" href="assets/css/stellarnav.min.css" />
      <link rel="stylesheet" href="assets/css/font-awesome.css">
      <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css" />
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/style.css" />
      <link rel="stylesheet" href="assets/css/responsive.css" />
      <link rel="stylesheet" href="assets/css/aos.css"/>
        <style>
            .navigation-wrap {
                display: flex;
                justify-content: flex-end;
                align-items: center;
                min-height: 215px;
            }
            .list-wrap li {
                display: inline;
                padding: 0 40px;
            }
            .caretdownn {
                font-size: 17px;
                margin: 0px 0px 0px 10px;
            }
            .service-list{
                position:relative;
                cursor: pointer;
            }
            .child-list {
                position: absolute;
                top: 30px;
                right: 0;
                opacity: 0;
                background-color: #607d8b;
                max-width: 300px;
                width: 100%;
                min-height: 260px;
                color: #fff;
                padding-top: 20px;
            }
            .child-list li {
                display: flex;
                align-items: center;
                padding: 14px 20px 0px 30px;
            }
            .service-list:hover .child-list{
              opacity:1;
              transition:all 0.5s ease-in-out;
            }
            .child-list li:hover{
                background:#ff0000;
                width:100%;
                height:50%;
                padding:10px;
            }
            .log-image{
                cursor:pointer;
            }
            .logo-image img:hover{
                transform:scale(1.2);
            }
            .mobile-service{
                position:relative;
            }
            .mobiles-name {
                position: absolute;
                left: 100%;
                top: 14%;
                background-color: #10489d;
                max-width: 300px;
                width:100%;
                padding: 5px;
                min-height: 224px;
                opacity:0;
            }
            .mobile-services:hover .mobiles-name{
                opacity:1;
            }
        </style>   
    </head>    
  <body>
    <section class="nav-sec-2">
        <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-4">
                       <div class="logo-image">
                         <img src="assets/images/logo1.png" class="img-fluid"> 
                       </div>  
                    </div>
                    <div class="col-12 col-md-8 col-lg-8">
                        <div class="navigation-wrap">
                            <ul class="list-wrap">
                            <li>Home</li>
                            <li>About Us</li>
                            <li class="service-list list-toggle">Services<span class="caretdownn"><i class="fas fa-caret-down"></i></span>
                                <ul class="child-list child-wrap">
                                    <li class="mobile-services">mobile service
                                        <ul class="mobiles-name">
                                            <li>Samsung</li>
                                            <li>Infinix</li>
                                            <li>Notepad</li>
                                            <li>Iphones</li>
                                            <li>galaxy</li>
                                        </ul>
                                    </li>
                                    <li>Iphone service</li>
                                    <li>Infinix service</li>
                                    <li>nokia</li>
                                    <li>Samsung</li>
                                </ul>                           
                            </li>
                            <li>Contact us</li>
                            </ul>
                        </div>     
                </div>
                </div>
        </div> 
    </section>
    <script src="assets/js/bootstrap.min.js"></script> 
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/stellarnav.min.js"></script>
    <script src="assets/js/jquery.fancybox.min.js"></script> 
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/custom.js"></script>    
    <script>
    AOS.init();
    </script>
    <script>
    
    </script>    
</body>
</html>
