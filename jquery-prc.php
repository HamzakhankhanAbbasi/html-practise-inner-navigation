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
         .btn2{
            background: transparent;
            color:#000;
            border:1px solid #000;
            padding: 10px 50px;
            border-radius:10px;
            overflow:hidden;
            outline: none;
            box-shadow: none;
            text-align: center;
         }
         .showdiv{
            max-width:500px;
            width:100%;
            background-color: #ff0000;
            min-height:500px;
            max-height:500px;
         }
         .box{
            max-width:200px;
            min-height: 200px;
            max-height:200px;
            background-color: #ff0000;
         }
      </style>     
   </head>
   <body>
       <!--styling css on button through jquery -->
       <button type="submit">Button</button>
       <!--styling css on button through jquery -->
       <!--jquery-hide-and-show-with-animation-->

         <!-- html-showandhidewithanimation-start-form-top -->
         <!-- <button type="submit" class="btn2" >Submit</button>
         <div class="box" style="display:none">
            <p>sdfsfd
            sdfsfd
            sdfsfdsdfsfd
            sdfsfdsdfsfd
            sdfsfdsdfsfd
            sdfsfdsdfsfd

            </p>
         </div> -->
         <!-- html-showandhidewithanimation-end-form-top -->


       <!-- html-showandhidewithanimation-start -->
       <!-- <button type="submit" class="btn2">Nav</button>
       <div class="showdiv mt-4">
       </div> -->
       <!-- html-showandhidewithanimation-end -->

     
         

       <!-- //input-focus-method and apply css  -->
        <!-- <p class="jquery-text">This is  jquery method</p>
        <button class="butto-n">Styling-css</button>           -->


       <!-- two buttons hide and show with image-jquery -->
       <!-- <button class="image-hide">image-hide</button>
         <img src="assets/images/crew-logo.png" style="display:none;" class="img-fluid crew-logo">
       <button class="image-show">image-show</button> -->
       
       <!-- //show this div onmouseenterandmouseleave -->
        <!-- <div class="box-wrap" style="display:none;">
            <p>Helloworld</p>
        </div>
        <button class="shows">Show</button> -->

   <!-- //mouse-enter-events-in-jquery -->
   <!-- <button class="jquery-btn">Message</button> -->



   <!-- dblclick-method use whe direct hit on paragraph  -->
   <!-- <p class="jquery-text">Thhisisjquerytext</p>
   <button class="jquery-btn">showandhide</button> -->


   <!-- direct-hit-on-paragraph-startwhenwedirecthitonparagraphthenweusethisinjquery -->
   <!-- whenwetargetondirect-childthenweusethis -->
   <!-- <p class="jquery-text">This is jquery-text</p> -->
    
   <!-- direct-hit-on-paragraph-End -->
    

   <!-- Jquery-Events-work -->
    <!-- double-click-start-->
    <!-- <p class="jquery-content">This is jquery-text</p>
    <button class="showandhide">Showandhide</button> -->
    <!-- double-click-end -->

    <!--  display:blockanddisplaynonewithjquery-hide-function -->
    <!-- <P class="jquery-text">This is jquery-text</P>
    <button class="showandhide">showandhide</button> -->

      
     <!--  display:blockanddisplaynonewithjquery-show-function -->
     <!-- <P class="jquery-text" style="display:none;">This is jquery</P>
     <button class="showandhide">showandhide</button> -->



    <!-- showandhideinjquerywithtoggle -->
    <!-- <p class="text-content">Click or move the mouse pointer over this paragraph.</p>   
    <button class="showandhide">Showandhide</button> -->


    
    

    <script src="assets/js/bootstrap.min.js"></script> 
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/stellarnav.min.js"></script>
    <script src="assets/js/jquery.fancybox.min.js"></script> 
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/custom.js"></script> 

       <!--jquery-showandhidewithanimation-start-form-top -->
       <!-- <script>
          $(document).ready(function(){
            $('.btn2').click(function(){
               $('.box').toggle('slow')
            });
          });
       </script>  -->

       <!--jquery-showandhidewithanimation-End-form-top -->          

      <!--jquery-showandhidewithanimation-start   -->
       <!-- <script>
          $('.btn2').click(function(){
               $('.showdiv').fadeToggle('slow');
          });     
       </script> -->
       <!--jquery-showandhidewithanimation-end   -->
    <script>
     
    //input-focus-method and apply css 
   // $(document).ready(function(){
   //    $('.butto-n').click(function(){
   //       $('.jquery-text').css("font-size","24px","color","red","background-color","blue");
   //    });
   // });

    
    //  two buttons hide and show with image-jquery 
    // $(document).ready(function(){
    //     $('.image-show').click(function(){
    //       $('.crew-logo').show();
    //     });
    //     $('.image-hide').click(function(){
    //       $('.crew-logo').hide();
    //     });
    // });  
   

    //  show this div onmouseenterandmouseleave 
    // $(document).ready(function(){
    //     $('.shows').mouseenter(function(){
    //     $('.box-wrap').show();
    //     });
    //     $('.shows').mouseleave(function(){
    //     $('.box-wrap').hide();
    //     });
    // });

    


       //mouse-enter-events-in-jquery
    //    $(document).ready(function(){
    //     $('.jquery-btn').mouseenter(function(){
    //         alert("Hello-world");
    //     });
    //     $('.jquery-btn').mouseleave(function(){
    //         alert("bye").hide();
    //     });

    //    });



     //dbl-testingonparentandchild
        // $(document).ready(function(){
        //     $('.jquery-btn').dblclick(function(){
        //         $('.jquery-text').hide(); 
        //     });
        // });

     //doubleclicks
    //  $(document).ready(function(){
    //      $("p").dblclick(function(){
    //          $(this).hide();
    //      });
    //  })




    //  Jquery-Events-work 
    //double-click-start
    // $(document).ready(function(){
    //     $('.showandhide').dblclick(function(){
    //       $('.jquery-content').toggle();
    //     });
    // });

    //  direct-hit-on-paragraph-startwhenwedirecthitonparagraphthenweusethisinjquery 
    //whenwetargetondirect-childthenweusethis
    // $(document).ready(function(){
    //     $('p').click(function(){
    //        $(this).hide();
    //     });
    // });
      




    //  display:blockanddisplaynonewithjquery-hide-function 
    //  $(document).ready(function(){
    //     $('.showandhide').click(function(){
    //        $('.jquery-text').hide();
    //     });
    //  });
     
    // display:blockanddisplaynonewithjquery-show-function
    // $(document).ready(function(){
    //     $('.showandhide').click(function(){
    //        $('.jquery-text').show();

    //     });
    // });


        //showandhideinjquerywithtoggle
    //  $(document).ready(function(){
    //   $('.showandhide').click(function(){
    //     $('.text-content').toggle();
    //   });
    //  });
    </script>
<script>
  AOS.init();
</script>
</body>
</html>
