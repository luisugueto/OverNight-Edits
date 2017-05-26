 <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OverNight Edits</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">

        <link rel='shortcut icon' type='image/ico' href='favicon.ico' />

    </head>

    <body>

        
        <div class="modal fade" id="employmentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" style="margin-top: 100px;">
            <div class="modal-content" style="padding: 20px 40px; border-radius: 0;">
                <!-- <div class="modal-header">  
                    <p class="title" style="color: rgba(27, 22, 102, 1); font-size: 32px; display: inline-block !important; padding: 0 20px;"></p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display: inline-block; color: rgba(27, 22, 102, 1);">
                        <i class="fa fa-times"></i>
                    </button>
                </div> -->
              <div class="modal-body">
              </div>
              <div class="modal-footer">
                <!-- <button type="reset" class="btn-appointment">Reset</button>
                <button type="submit" class="btn-appointment">Submit</button>
                <button type="button" class="btn-appointment" data-dismiss="modal" aria-label="Close">
                    Close
                </button> -->
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    <div id="prime">
        
        
        <header>
            <div class="col-md-4 text-center">
                <img src="img/logo.png" class="hidden-xs hidden-sm"  style="height: 120px; width: auto; margin-top: -10px;">
                <img src="img/logo.png" class="hidden-md hidden-lg img-responsive">
            </div>
            <div class="col-md-8">
                <div class="col-sm-12 text-right" style="padding: 10px 50px 20px;">
                    <a href="#" data-ref="view-register">SIGN UP</a> <span style="color: rgba(247,148,29,1);"> | </span>
                    <a href="#" data-ref="view-signin">SIGN IN</a> <span style="color: rgba(247,148,29,1);"> |
                    </span> <a href="#" data-ref="view-panel">USER PANEL</a>
                </div>
                <div class="col-sm-12">
                    <div class="main-menu" id="mm">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="hidden-xs" id="menuHover">
                                    <li><a data-ref="view-1" href="#">HOME</a></li>
                                    <li>
                                        <a  data-ref="view-pricing" href="#" >PRICING</a>
                                    </li>
                                    <li>
                                        <a data-ref="view-examples" href="#" >EXAMPLES</a>
                                    </li>
                                    <li>
                                        <a data-ref="view-how" href="#" >HOW IT WORKS</a>
                                    </li>
                                    <li>
                                        <a data-ref="view-contact" href="#" >CONTACT US</a>
                                    </li>
                                </ul>
                                <ul class="visible-xs" id="menuMobile">
                                    <li><a data-ref="view-1" href="#">HOME</a></li>
                                    <li>
                                        <a  data-ref="view-pricing" href="#" >PRICING</a>
                                    </li>
                                    <li>
                                        <a data-ref="view-examples" href="#" >EXAMPLES</a>
                                    </li>
                                    <li>
                                        <a data-ref="view-how" href="#" >HOW IT WORKS</a>
                                    </li>
                                    <li>
                                        <a data-ref="view-contact" href="#" >CONTACT US</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


            <section>
                <div class="row panel">
                    <div class="col-md-3 text-center left-side">
                        <a href="/upload">
                            <button class="btn-appointment">UPLOAD</button>
                        </a>
                        <a href="#"  role="tab" data-toggle="tab">
                            <button class="btn-appointment">MY IMAGES</button>
                        </a>
                        <a href="#" aria-controls="" role="tab" data-toggle="tab">
                            <button class="btn-appointment">CART</button>
                        </a>
                        <a href="#plan" aria-controls="plan" role="tab" data-toggle="tab">
                            <button class="btn-appointment">MY PLAN</button>
                        </a>
                    </div>
                    <div class="col-md-9 right-side tab-content">
						@yield('content')                     
		            </section>
		        </div>


       
    			</div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-2 col-sm-12 text-right">
                        <h2>Contact us &amp; we'll<br> get back to you!</h2>
                        <img src="img/logo2.png" alt="" class="logo text-center">
                    </div>
                    <div class="col-md-6 col-sm-12" style="border: none;">
                        <h2>
                            <i class="fa fa-envelope"></i> overnight@edits.com <br><br>
                            <i class="fa fa-phone"></i> 000 000 0000 <br><br>
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-google-plus"></i>
                            <i class="fa fa-instagram"></i>
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-linkedin"></i>
                        </h2>
                    </div>
                    
                </div>
            </div>
        </footer>

    <div id="preview-template" class="hide">
        <div class="dz-preview dz-file-preview">
            <div class="dz-image">
                  <div class="dz-details">
                    <div class="dz-filename"><span data-dz-name></span></div>
                    <div class="dz-size" data-dz-size></div>
                    <img data-dz-thumbnail />
                  </div>
            </div>
          <!-- <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div> -->
          <div class="dz-success-mark"><span>✔</span></div>
          <div class="dz-error-mark"><span>✘</span></div>
          <!-- <div class="dz-error-message"><span data-dz-errormessage></span></div> -->
        </div>
    </div>
    
     <script src="js/jquery.min.js"></script> 
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery-ui.min.js"></script> 
    <script src="js/dropzone.js"></script> 
    <script src="js/gsap/TweenMax.min.js"></script>
    
    
    <script>

    </script>


    <script>

        var ww = $(window).width();
        var sh = (ww > 767) ? "300px" : "120px";

        var csPics = $("#slider1 .img");
        var csLenght = $(csPics).length;
        var csIndex = 0;
        $("#slider1 .controls img").click(function () {
            if ($(this).hasClass("left")) {
                TweenMax.to(csPics[csIndex], 1, {height: 0});
                csIndex = decreaseIndex(csIndex, csLenght);
                TweenMax.to(csPics[csIndex], 1, {height: sh});
            } else if ($(this).hasClass("right")) {
                TweenMax.to(csPics[csIndex], 1, {height: 0});
                csIndex = increaseIndex(csIndex, csLenght);
                TweenMax.to(csPics[csIndex], 1, {height: sh});
            }
        });

        function decreaseIndex(i, lenght) {
            if (i == 0) return lenght-1;
            else return i-1;
        }

        function increaseIndex(i, lenght) {
            if (i == lenght-1) return 0;
            else return i+1;
        }

        setInterval(function(){
            $(".slider:not(:hover)").each(function (index, element) {
                $(element).find(".controls .right").click();
            })
        }, 6000);

        
    </script>


    <script>

        jQuery("#serv1").each(function(index, element){
          var tl = new TimelineLite({paused:true});
          tl
          .to(".showup1", 0, {display: "block"})
          .to(".showup1", 0.3, {opacity: 1})
          .to("#serv2", 0.3, {opacity: 0, marginLeft: "100px"}, "-=0.3")
          ;
          element.animation = tl;
        });

        jQuery("#serv2").each(function(index, element){
          var tl = new TimelineLite({paused:true});
          tl
          .to(".showup2", 0, {display: "block"})
          .to(".showup2", 0.3, {opacity: 1})
          .to("#serv1", 0.3, {opacity: 0, marginLeft: "-100px"}, "-=0.3")
          ;
          element.animation = tl;
        });

        jQuery("#serv1").hover(over, out);
        jQuery("#serv2").hover(over, out);




    var current_view = "view-1";

        // $(".video").each(function(index, element){
            $('.video').css('height', ($(window).height()/1.8)+'px');
            $('.video').css('width', ($(window).height())+'px');
        // });

        $("[data-hov]").each(function(index, element){
          var tl = new TimelineLite({paused:true});
          var cls = $(this).attr("data-hov");
          var pos = $(".bottom-menu").position();
          var h = $("."+cls).height();
          var w = $("."+cls).width();

          tl
          // .to("."+cls, 0, {})
          // .to("."+cls, 0, {top: parseInt(pos.top - (h + 60))+"px", left: parseInt(pos.left + 120)+"px"})
          .to("."+cls, 0, {bottom: "calc(16vh + 50px)", left: parseInt(pos.left + 120)+"px"})
          .to("."+cls, 0.2, {opacity: 1, display: "inline-block"});

          $("."+cls).on("mouseenter", function () { ($(element).trigger("mouseenter")); });
          $("."+cls).on("mouseleave", function () { ($(element).trigger("mouseleave")); });
          // $("."+cls).mouseleave($(element).trigger("mouseleave"));

          element.animation = tl;
        });

        // $(".main-menu ul li").on("mouseenter", function () {
        //     $(this).addClass("active");
        // });
        // $(".main-menu ul li ul").on("mouseleave", function () {
        //     $(this).parent().removeClass("active");
        // });

        $("[data-hvr]").each(function(index, element){
          var tl = new TimelineLite({paused:true});
          var cls = $(this).attr("data-hvr");
          var pos = $(element).position();
          var h = $("."+cls).height();
          var w = $("."+cls).width();

          tl
          // .to("."+cls, 0, {})
          .to("."+cls, 0, {bottom: "calc(16vh + 50px)", left: (parseInt(pos.left)-20)+"px"})
          .to("."+cls, 0.2, {opacity: 1, display: "inline-block"});

          $("."+cls).on("mouseenter", function () { ($(element).trigger("mouseenter")); });
          $("."+cls).on("mouseleave", function () { ($(element).trigger("mouseleave")); });
          // $("."+cls).mouseleave($(element).trigger("mouseleave"));

          element.animation = tl;
        })

        $(".vimg").each(function(index, element){
            $(element).click(function () {
                TweenMax.to(".vimg", 0.3, {width: "60px"});
                TweenMax.to($(element), 0.3, {width: "100px"});
            });
        })

        // $(".social-media > div").each(function(index, element){
        //   var tl = new TimelineLite({paused:true});
        //   var w = $(element).width();

        //   tl
        //   .to(element, 0.3, {width: (w+20)+"px"})
        //   ;

        //   element.animation = tl;

        // });

        $(".side-menu li").each(function(index, element){
            $(this).after("<li class='lidiv'></li>")
        })

        $("[data-hov]").hover(over, out);
        $("[data-hvr]").hover(over, out);
        // $("#prime .social-media > div").hover(over, out);

        $("[data-ref]").click( function () { changeView($(this).attr("data-ref")) } );

        function over(){
          this.animation.play();
        }

        function out(){
          this.animation.reverse();
        }

        $("ul.servs li a, .hov3 ul li a").click(function () {
            var target = $(this).attr("aria-controls");
            // $(".side-menu li a[aria-controls='"+target+"']").click();
            $("#view-4 .side-menu li a[aria-controls='"+target+"']").click();

            // console.log(target);
        });

        
        $(".side-menu li a").click(function () {
            // $(".side-menu li:active").removeClass("active");
            // $(this).parent().addClass("active");
            // alert($(this).attr("aria-controls"));
            var id = $(this).parent().parent().parent().parent().parent().attr("id");
            var ref = $(this).attr("href");
            // .index("li");
            // console.log();
            // var i = $(this).parent().index("#"+id+" .side-menu li");
            var pos = $(this).parent().position();
            var h = $(this).parent().height();
            // i = parseInt(i) + 1;

            // $(".side-menu.left:after").css("top", (8+(i*16))+"px");

            // var rule = CSSRulePlugin.getRule(".side-menu.left:after");
            // TweenLite.to(rule, 3, {cssRule:{color:"#0000FF"}});
            // TweenMax.to(rule, 0.2, {top: (8+(i*16))+"px"});
            // TweenMax.to(".arrow-left", 0.2, {marginTop: (5+(i*38))+"px"});
            TweenMax.to("#"+id+" .arrow-left", 0.2, {marginTop: (0+(pos.top))+"px", borderTop: (h/2)+"px solid transparent", borderBottom: (h/2)+"px solid transparent"});
            // console.log((8+(i*16))+"px");

            if (id == "view-locations") {
                // var ref = $("#view-locations .side-menu li.active a").attr("href");
                var bg = "locationsbg.jpg";
                switch(ref) {
                    case "#loc-overview":
                        bg = "#fff url(img/locationsbg.jpg) no-repeat 0 -100px / 100% auto";
                        break;
                    case "#loc-all":
                        bg = "#fff url(img/mapbg.jpg) no-repeat 0 0 / cover";
                        break;
                    case "#loc-mckinney":
                        bg = "#fff url(img/locationsbg.jpg) no-repeat 0 -100px / 100% auto";
                        break;
                    case "#loc-garland":
                        bg = "#fff url(img/garlandbg.jpg) no-repeat 0 0 / cover";
                        break;
                    case "#loc-prosper":
                        bg = "#fff url(img/locationsbg.jpg) no-repeat 0 -100px / 100% auto";
                        break;
                    default: break;
                }

                // console.log(ref);
                // console.log(bg);
                TweenMax.to("#view-locations", 0.3, {background: bg});
            }

        });

        function changeView (view) {
            // var cid = $(current).attr("data-ref");
            // alert(current_view);

            var opt;
            var dplay;
            var tl = new TimelineLite({paused:true});
            var tl2 = new TimelineLite({paused:true});
            var tl3 = new TimelineLite({paused:true});


            if ($("#"+view).hasClass("no-logo")) { opt = 0; dplay = "none"; }
            else { opt = 1; dplay = "block"; };

            

            tl2
            .staggerTo(".vimg", 0.2, {height: 0, margin: 0})
            .staggerTo(".simg", 0.2, {height: "100%", marginLeft: "0px", display: "inline-block"})
            // .staggerTo(".simg:nth-child(1)", 0.2, {height: "100px"})
            ;

            tl3
            .staggerTo(".simg", 0.2, {height: 0, margin: 0})
            .staggerTo(".vimg", 0.2, {height: "100%", marginLeft: "15px"})
            // .staggerTo(".vimg:first-of-type", 0.2, {marginLeft: "0"})
            ;




            if (view == "view-3") {
                tl2.play();
            } else {
                tl3.play();
                // console.log("reverse");
            }

            tl
            .to("#"+current_view, 0.5, {opacity: 0})
            .to("#"+current_view, 0, {display: "none"})
            .to("#"+view, 0, {display: "block"})
            .to("#"+view, 0.5, {opacity: 1})
            // .to(".logo", 1, {opacity: opt, display: dplay}, "-=1")
            ;
            tl.play();

            current_view = view;

            $('html, body').animate({
                    scrollTop: $("#mm").offset().top
                }, 500);
        }

        var playing = false;
        var video = $("#video");
        var vid = video[0];

        $("#prime #play").on('click', function(e){
            
            if (playing) {
                vid.pause();
                vid.stop();
                $(this).removeClass("hide");
                // $("#video").prop("controls", "true");
            } else {
                vid.play();
                $(this).addClass("hide");
                // if (vid.requestFullscreen) {
                //   vid.requestFullscreen();
                // } else if (vid.mozRequestFullScreen) {
                //   vid.mozRequestFullScreen();
                // } else if (vid.webkitRequestFullscreen) {
                //   vid.webkitRequestFullscreen();
                // }
            }
        });

        // $('#video').bind('webkitfullscreenchange mozfullscreenchange fullscreenchange', function(e) {
        //         var state = document.fullScreen || document.mozFullScreen || document.webkitIsFullScreen;
        //         var event = state ? 'FullscreenOn' : 'FullscreenOff';

        //     if (event == "FullscreenOff"){
        //         vid.pause();
        //         vid.stop();
        //     }
        // });

        $('#myTabs a').click(function (e) {
          e.preventDefault()
          $(this).tab('show')
        });


        $(".svc").click(function () {
            var modal = $('#servicesModal');
            modal.find(".modal-header .title").html($(this).find(".tt").text());
            modal.modal('show');

        });


        jQuery(".hoverable").each(function(index, element){
          var tl = new TimelineLite({paused:true});
          tl.to(element, 0.1, {scale:1.05});
          element.animation = tl;
        });
        jQuery(".hoverable").hover(over, out);

        function over(){
          this.animation.play();
        }

        function out(){
          this.animation.reverse();
        }


    </script>


    <script src="https://use.fontawesome.com/16f6b8af4b.js"></script>
    <!-- <script src="js/gsap/TimelineLite.min.js"></script> -->

    </body>

</html>