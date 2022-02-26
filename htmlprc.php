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
    .card-hoverwrap
    {
        background:#fff;
        padding:20px 40px;
        max-width:300px;
        min-height:400px;
        box-shadow: 0 0 10px 0 #ccc;
        position: relative;
    }    
    .card-hoverwrap .action-btns {
        position: absolute;
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 110px;
        bottom: -12%;
        transition: all 0.3s;
        opacity: 0;
    }
    .card-hoverwrap:hover .action-btns {
        bottom: 50%;
        opacity: 1;
        z-index: 999;
    }
    .card-hoverwrap:hover{
        background:#000;
    }
    .zoom-in-out-box {
        animation: zoom-in-zoom-out 1s ease infinite;
    }
    #background-wrap {
        bottom: 0;
        left: 0;
        position: fixed;
        right: 0;
        top: 0;
        z-index: -1;
    }
    @keyframes zoom-in-zoom-out {
    from {
        transform: scale(0.5);
        }
        to{
        transform: scale(0.7);
        }
    }

        /* up and down images start */
        .upanddown{
            position:relative;
            -webkit-animation:glide 2s ease-in-out alternate infinite;
        }
        @-webkit-keyframes glide{
            from {
                left:40px;
                top:0px;
            }
            
            to {
                left:40px;
                top:50px;
            }

        }
        /* up and down images end */
    </style>   
    </head>    
      <body>
        <section class="index-sec-2">
            <div class="container">
                <div class="image-1 zoom-in-out-box ">
                    <img src="assets/images/plane.png" class="img-fluid">
                </div>
            </div> 
            <div id="background-wrap">
            <div class="bubble x1"></div>
            </div>
            <div class="image-wrap upanddown">
                <img src="assets/images/plane.png" class="img-fluid">
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
</body>
</html>
