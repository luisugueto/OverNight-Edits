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
        <script src="js/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.15/datatables.min.css"/>
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
                    @if(!Auth::user())
                    <a href="#" data-ref="view-register">SIGN UP</a> <span style="color: rgba(247,148,29,1);"> | </span>

                    <a href="#" data-ref="view-signin">SIGN IN</a>

                    @endif
                    @if (Auth::user())
                    	<a href="#" data-ref="view-panel" id="user-panel">USER PANEL</a>
                    @endif
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
        @if($errors->any())
			<div class="alert alert-danger alert-dismissible" role="alert">
		  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  		<ul>
		  			@foreach($errors->all() as $error)
		  				<li>{!! $error !!}</li>
		  			@endforeach
		  		</ul>
		  	</div>
		@endif

		@if(Session::get('user-registered') )
			<script>
				alert('User Registered. Please Login');
			</script>
		@endif

		@if(Session::has('message') )
			<div class="alert alert-success alert-dismissible" role="alert">
		  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  		<ul>
		  			{{ Session::get('message') }}
		  		</ul>
		  	</div>
		@endif

        <div id="view-1" class="view">
            <div class="banner" id="homebg">

            </div>

            <section class="spacing">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="text-center">OUR PROCESS</h1>
                        </div>
                        <div class="col-sm-12" style="padding: 30px 0;">
                            <div class="col-sm-4 step hoverable" data-ref="view-how">
                                <div class="stepimg">
                                    <img src="img/icon1.jpg">
                                </div>
                                <p class="gtext">Upload your photograph.</p>
                            </div>
                            <div class="col-sm-4 step hoverable" data-ref="view-how">
                                <div class="stepimg">
                                    <img src="img/icon2.jpg">
                                </div>
                                <p class="gtext">Describe your expectations.</p>
                            </div>
                            <div class="col-sm-4 step hoverable" data-ref="view-how">
                                <div class="stepimg">
                                    <img src="img/icon3.jpg">
                                </div>
                                <p class="gtext">We deliver the results.</p>
                            </div>
                        </div>
                    </div>
                </div>


            </section>

            <div class="bgsec spacing" id="drop">
                <section class="white-gradient text-center">
                    <h1 class="bold" style="margin-bottom: 40px;">
                        Get your overnight edits <br>
                        <small class="gtext">
                            Fast 24 Hour Turn-Around
                        </small>
                    </h1>


                    @if(Auth::user())
                    	{!! Form::open(['url' => '/upload-images', 'method' => 'POST', 'files'=>'true', 'id' => 'demo-upload2', 'class' => 'dropzone needsclick dz-clickable dz-started']) !!}
				                    <!-- <div id="dropp"> -->
				    					<input type="file" name="foto[]">

					                        <div class="dropp-ftext" onclick="$('#demo-upload2').click();">
					                            <strong class="gtext" style="font-size: 26px;">
					                                <span class="hidden-xs hidden-sm gtext bold" style="font-size: 26px;">Drop</span>
					                                <span class="visible-xs visible-sm gtext bold" style="font-size: 26px;">Upload</span>
					                                your images here!
					                                </strong>
					                            <br>
					                            <i class="fa fa-chevron-circle-down fa-2x" style="font-size: 80px;"></i>
					                        </div>

				                    <!-- </div> -->
								{!! Form::close() !!}

									<div class="row">
				                        <div class="col-md-12 text-center">
				                            <button onclick="$('#demo-upload2').submit()" class="btn-appointment">SUBMIT</button>
				                        </div>
				                    </div>
					@else

						<section class="white-gradient text-center">
		                    <h1 class="bold" style="margin-bottom: 40px;">
		                        Sign in to enjoy the service <br>
		                        <div class="btn-appointment" data-ref="view-signin"  style="width: 50%; margin: 20px auto;">SIGN IN</div>
		                    </h1>
		                </section>
					@endif

                </section>
            </div>

            <section class="spacing">
                <h1 class="text-center">EDITING SERVICES</h1>
                    <div class="row" style="padding-top: 30px;">
                        <div class="col-sm-12">
                            <div class="col-sm-3 col-sm-offset-2">
                                <div class="bubble" id="serv1" data-ref="view-pricing">
                                    <div class="hover-text" style="cursor: pointer;">
                                        <div class="t gtext" style="cursor: pointer;">Standard <br>Editing</div>
                                    </div>
                                </div>
                            </div>
                            <br class="visible-xs visible-sm">
                            <br class="visible-xs visible-sm">
                            <div class="col-sm-3 col-sm-offset-2">
                                <div class="bubble" id="serv2" data-ref="view-pricing">
                                    <div class="hover-text" style="cursor: pointer;">
                                        <div class="t gtext" style="cursor: pointer;">Full <br>Editing</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 showup1">
                                <ul>
                                    <li><span>Skin smoothing</span></li>
                                    <li><span>Color correction</span></li>
                                    <li><span>Blemish removal</span></li>
                                    <li><span>Eye brightening</span></li>
                                    <li><span>Teeth whitening</span></li>
                                    <li><span>Cropping</span></li>
                                </ul>
                            </div>
                            <div class="col-sm-3 showup2">
                                <ul>
                                    <li><span>Skin smoothing</span></li>
                                    <li><span>Color correction</span></li>
                                    <li><span>Blemish removal</span></li>
                                    <li><span>Eye brightening</span></li>
                                    <li><span>Teeth whitening</span></li>
                                    <li><span>Cropping</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="spacing text-center">
                <h1 class="text-center">OUR BEFORE <br class="visible-xs visible-sm">&amp; AFTERS</h1>
                <img src="img/pc.jpg" class="pc1">
                <img src="img/beforeafter.jpg" class="beforeafter">
                <i class="fa fa-arrows-alt fa-2x zoom" onclick="$('#zoomimg').modal('show')"></i>
            </section>

            <div class="modal fade" id="zoomimg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog" style="background: url() no-repeat 0 0 / cover;">
                <div class="modal-content" style="">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; margin-left: 95%; margin-top: 2%;">
                        <i class="fa fa-times" style="cursor: pointer;"></i>
                    </button>
                    <img src="img/beforeafter.jpg" class="img-responsive" alt="">
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <section class="prices spacing">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="price">
                                <div class="lbg hbox">
                                    <h2 class="gtext bold">
                                        Standard Pricing
                                    </h2>
                                </div>
                                <div class="bbox">
                                    <h1 class="gtext text-center">
                                        $10
                                        <small>per edit</small>
                                    </h1>
                                    <a href="#!" data-ref="view-pricing">Show Details</a>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <br class="visible-xs visible-sm"><br class="visible-xs visible-sm">
                            <div class="price">
                                <div class="lbg hbox">
                                    <h2 class="gtext bold">
                                        Non-member Pricing
                                    </h2>
                                </div>
                                <div class="bbox">
                                    <h1 class="gtext text-center">
                                        $15
                                        <small>per edit</small>
                                    </h1>
                                    <a href="#!" data-ref="view-pricing">Show Details</a>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



        </div>

        <div id="view-pricing" class="view">
            <div class="banner" id="pricingbg"></div>

            <section class="prices spacing">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="price">
                                <div class="lbg hbox">
                                    <h2 class="gtext bold">
                                        Standard Pricing
                                    </h2>
                                </div>
                                <div class="bbox">
                                    <h1 class="gtext text-center">
                                        $10
                                        <small>per edit</small>
                                    </h1>
                                    <div class="description">
                                        <span class="btext">10$ images</span>
                                        <span class="btext">7 days turnaround</span>
                                        <span class="btext">Standard &amp; enhance edit</span>
                                        <span class="btext">Image cart functionality</span>
                                        <span class="btext">Free membership</span>
                                    </div>

                                    <div class="btn-appointment" data-ref="view-register" style="width: 50%; margin: 20px auto;">Sign Up</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <br class="visible-xs visible-sm">
                            <br class="visible-xs visible-sm">

                            <div class="price">
                                <div class="lbg hbox">
                                    <h2 class="gtext bold">
                                        Non-member Pricing
                                    </h2>
                                </div>
                                <div class="bbox">
                                    <h1 class="gtext text-center">
                                        $15
                                        <small>per edit</small>
                                    </h1>
                                    <div class="description">
                                        <span class="btext">Pay for one image edit</span>
                                        <span class="btext">7 days turnaround</span>
                                        <span class="btext">Standard edit</span>
                                        <span class="btext">Fast check-out</span>
                                        <span class="btext">&nbsp;</span>
                                    </div>
                                    <div class="btn-appointment" data-ref="view-start"  style="width: 50%; margin: 20px auto;">Get Started</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="spacing h24" style="background: url(img/waiting.jpg) no-repeat 0 -120px / cover;">
                    <div class="row" style="background: rgba(0, 0, 0, 0.7); padding: 0px 200px;">
                        <div class="col-md-12 spacing">
                            <h1 class="text-center spacing" style="color: white;">24 hour turnaround</h1>
                            <p style="font-size: 30px; color: white;">You may pay an additional 15$ (members) / 20$ (non members) for 24 hour turnaround per photo. Upload your pictures and select the ones you need for this service.</p>
                        </div>
                    </div>
            </section>

        </div>

        <div id="view-examples" class="view">
            <div class="banner" id="examplesbg">
                <img src="img/pc.png" class="pc2">
                <div class="slider" id="slider1">

                    <div class="controls">
                        <img src="img/larrow.png" alt="Previous Picture" title="Previous Picture" class="left">
                        <img src="img/rarrow.png" alt="Next Picture" title="Next Picture" class="right">
                    </div>


                    <div class="img" id="sld1" style="height: 300px"></div>
                    <div class="img" id="sld2" style="height: 0"></div>
                    <div class="img" id="sld3" style="height: 0"></div>

                    <i class="fa fa-arrows-alt fa-2x zoom" style="margin: -40px 48vw 0;" onclick="$('#zoomimgs').modal('show')"></i>
                </div>


            </div>

            <div class="modal fade" id="zoomimgs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog" style="background: url() no-repeat 0 0 / cover;">
                <div class="modal-content" style="">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; margin-left: 95%; margin-top: 2%;">
                        <i class="fa fa-times" style="cursor: pointer;"></i>
                    </button>
                    <img src="img/beforeafter.jpg" class="img-responsive" alt="">
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

        </div>

        <div id="view-how" class="view">

            <div class="banner" id="howbg"></div>

            <section class="spacing">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="text-center">OUR PROCESS</h1>
                        </div>
                        <div class="col-sm-12" style="padding: 30px 0;">
                            <div class="col-sm-4 step hoverable">
                                <div class="stepimg">
                                    <img src="img/icon1.jpg">
                                </div>
                                <p class="gtext">Upload your photograph.</p>
                                <p style="font-weight: 100; font-size: 20px; padding-top: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, sint, natus! Rerum labore omnis, quos reprehenderit magnam! Minima reiciendis fuga, porro officiis quos est. Nihil voluptates, eius explicabo accusantium quos!</p>
                            </div>
                            <div class="col-sm-4 step hoverable">
                                <div class="stepimg">
                                    <img src="img/icon2.jpg">
                                </div>
                                <p class="gtext">Describe your expectations.</p>
                                <p style="font-weight: 100; font-size: 20px; padding-top: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, iure iusto nobis expedita perspiciatis fugiat quis est illum alias blanditiis tempora veritatis deleniti eveniet, rem porro doloremque, ipsum cumque quaerat!</p>
                            </div>
                            <div class="col-sm-4 step hoverable">
                                <div class="stepimg">
                                    <img src="img/icon3.jpg">
                                </div>
                                <p class="gtext">We deliver the results.</p>
                                <p style="font-weight: 100; font-size: 20px; padding-top: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi sapiente labore assumenda eveniet dicta nesciunt amet saepe! Necessitatibus alias, laborum illo corporis numquam dicta, a at tempora optio vel nemo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="spacing gbg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12" style="margin-bottom: 50px;">
                            <h1 class="text-center">EDITING SERVICES</h1>
                        </div>
                        <div class="col-sm-4">
                            <div class="bubble" id="serv1" style="cursor: default;"></div>
                        </div>
                        <div class="col-sm-2">
                            <div class="mini bubble hoverable">
                                <span class="gtext">Standard <br>editing</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <ul>
                                <li><span>Skin smoothing</span></li>
                                <li><span>Color correction</span></li>
                                <li><span>Blemish removal</span></li>
                                <li><span>Eye brightening</span></li>
                                <li><span>Teeth whitening</span></li>
                                <li><span>Cropping</span></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </section>
            <section class="spacing">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="bubble" id="serv2" style="cursor: default;"></div>
                        </div>
                        <div class="col-sm-2">
                            <div class="mini bubble gtext hoverable">
                                <span class="gtext">Enhance <br>editing</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <ul>
                                <li><span>All standard features</span></li>
                                <li><span>Eyelash enhancement</span></li>
                                <li><span>Natural lip enhancement</span></li>
                                <li><span>Natural makeup enhancement</span></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </section>
        </div>

        <div id="view-contact" class="view">
            <div class="banner" id="contactbg"></div>
            <section class="spacing text-center">
                <h2>Contact us &amp; we'll get back to you as soon as we can!</h2>

                <form>
                    <div class="container spacing">
                        <div class="row" style="padding: 20px 0;">
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="col-sm-4">
                                    <h3 class="bold">NAME</h3>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding: 20px 0;">
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="col-sm-4">
                                    <h3 class="bold">E-MAIL</h3>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding: 20px 0;">
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="col-sm-4">
                                    <h3 class="bold">SUBJECT</h3>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding: 20px 0;">
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="col-sm-4">
                                    <h3 class="bold">MESSAGE</h3>
                                </div>
                                <div class="col-sm-8">
                                    <textarea name="" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button class="btn-appointment">SUBMIT</button>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>


        <div id="view-register" class="view">
            <section class="spacing text-center">
                <h1>REGISTER</h1>

				{!! Form::open(['url'=> '/register', 'method' => 'POST']) !!}
                    <div class="container spacing">
                        <div class="row" style="padding: 20px 0;">
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="col-sm-4">
                                    <h3 class="bold">NAME</h3>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding: 20px 0;">
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="col-sm-4">
                                    <h3 class="bold">E-MAIL</h3>
                                </div>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding: 20px 0;">
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="col-sm-4">
                                    <h3 class="bold">TYPE PASSWORD</h3>
                                </div>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>
                        </div>

                        <div class="row" style="padding: 20px 0;">
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="col-sm-4">
                                    <h3 class="bold">RE-TYPE PASSWORD</h3>
                                </div>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="rePassword">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn-appointment">SIGN UP</button>
                            </div>
                        </div>
                    </div>
                {{ Form::close() }}
            </section>
        </div>

        <div id="view-signin" class="view">
            <section class="spacing text-center">
                <h1>SIGN IN</h1>

                <form action="/login" method="post">
                	{{ csrf_field() }}
                    <div class="container spacing">
                        <div class="row" style="padding: 20px 0;">
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="col-sm-4">
                                    <h3 class="bold">E-MAIL</h3>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="email" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding: 20px 0;">
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="col-sm-4">
                                    <h3 class="bold">PASSWORD</h3>
                                </div>
                                <div class="col-sm-8">
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button class="btn-appointment" type="submit">SIGN IN</button>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>

        @if(Auth::user())
	        <div id="view-panel" class="view">

	            <section>
	                <div class="row panel">
	                    <div class="col-md-3 text-center left-side">
	                        @if(Auth::user()->rol_id == 2)
		                        <a href="#upload" aria-controls="upload" role="tab" data-toggle="tab">
		                            <button class="btn-appointment">UPLOAD</button>
		                        </a>
		                        <a href="#images" aria-controls="images" role="tab" data-toggle="tab">
		                            <button class="btn-appointment">UNEDIT IMAGES</button>
		                        </a>
								<a href="#imagesEdited" aria-controls="images" role="tab" data-toggle="tab">
		                            <button class="btn-appointment">MY IMAGES EDITED</button>
		                        </a>
		                        <a href="#cart" aria-controls="cart" role="tab" data-toggle="tab">
		                            <button class="btn-appointment">CART</button>
		                        </a>
		                        <a href="#plan" aria-controls="plan" role="tab" data-toggle="tab">
		                            <button class="btn-appointment">MY PLAN</button>
		                        </a>
							@elseif(Auth::user()->rol_id == 1)
                        <a href="#urgent" aria-controls="urgent" role="tab" data-toggle="tab">
                              <button class="btn-appointment">IMAGES URGENT</button>
                          </a>
								          <a href="#imageesTotal" aria-controls="imageesTotal" role="tab" data-toggle="tab">
		                            <button class="btn-appointment">UNEDIT IMAGES</button>
		                        </a>
		                        <a href="#editionImages" aria-controls="editionImages" role="tab" data-toggle="tab">
		                            <button class="btn-appointment">IMAGES EDITION MODE</button>
		                        </a>
		                        <a href="#editedImages" aria-controls="editedImages" role="tab" data-toggle="tab">
		                            <button class="btn-appointment">EDITED IMAGES</button>
		                        </a>
		                    @endif
	                        <a href="{{ url('/logout') }}">
	                            <button class="btn-appointment">LOGOUT</button>
	                        </a>
	                    </div>
	                    <div class="col-md-9 right-side tab-content">
	                    	@if(Auth::user()->rol_id == 2)
	                        	<div role="tabpanel" class="tab-pane fade in active" id="upload">
	                        @else
	                        	<div role="tabpanel" class="tab-pane fade in" id="upload">
	                        @endif
	                            <!-- <div class="spacing">
	                                <img src="img/icon1.jpg" style="width: 15%; margin: auto;" class="img-responsive">
	                                <h2>Drop your images here!</h2>
	                            </div> -->
								<div class="spacing" style="margin-top: 10px">
								{!! Form::open(['url' => '/upload-images', 'method' => 'POST', 'files'=>'true', 'id' => 'demo-upload3', 'class' => 'dropzone needsclick dz-clickable dz-started']) !!}
				                    <!-- <div id="dropp"> -->
				    					<input type="file" name="foto[]">

					                        <div class="dropp-ftext" onclick="$('#demo-upload3').click();">
					                            <strong class="gtext" style="font-size: 26px;">
					                                <span class="hidden-xs hidden-sm gtext bold" style="font-size: 26px;">Drop</span>
					                                <span class="visible-xs visible-sm gtext bold" style="font-size: 26px;">Upload</span>
					                                your images here!
					                                </strong>
					                            <br>
					                            <i class="fa fa-chevron-circle-down fa-2x" style="font-size: 80px;"></i>
					                        </div>

				                    <!-- </div> -->
								{!! Form::close() !!}

									<div class="row">
				                        <div class="col-md-12 text-center">
				                            <button onclick="$('#demo-upload3').submit()" class="btn-appointment">SUBMIT</button>
				                        </div>
				                    </div>
				                    <br>
								</div>

	                        </div>
							@if(Auth::user()->rol_id == 1)
              <div role="tabpanel" class="tab-pane fade in active" id="urgent">
                  <!-- <div class="spacing">
                      <img src="img/icon1.jpg" style="width: 15%; margin: auto;" class="img-responsive">
                      <h2>Drop your images here!</h2>
                  </div> -->
    <div class="spacing" style="margin-top: 10px">
      @if(isset($process))
        <table id="example" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
          <thead>
            <tr role="row">
              <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 111.667px;">Image
              </th>
              <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 111.667px;">Name
              </th>
              <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 191.667px;">User Email</th>
              <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 77.6667px;">Options</th>
            </tr>
          </thead>
          <tbody>
            @foreach($urgent as $value)
            <tr role="row" class="odd">
              <td class="sorting_1"><img src="{{ asset('pedidos/'.$value->name)}}" alt="" class="img-responsive" style="padding: 20px"></td>
              <td>{{ $value->name }}</td>
              <td>{{ $value->user->email }}</td>
              <td>
                <button type="button" class="btn btn-info btn-lg" onclick="changeStatus({{ $value->id }})">Change Status to Editing</button>
                          <button class="btn-appointment"><a href='/download/{{$value->name}}' style="color:white">Download</a></button>
                         </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      @endif
                     </div>
                 </div>


	                        <div role="tabpanel" class="tab-pane fade in" id="imageesTotal">
	                            <!-- <div class="spacing">
	                                <img src="img/icon1.jpg" style="width: 15%; margin: auto;" class="img-responsive">
	                                <h2>Drop your images here!</h2>
	                            </div> -->
								<div class="spacing" style="margin-top: 10px">
									@if(isset($process))
										<table id="example" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
											<thead>
												<tr role="row">
													<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 111.667px;">Image
													</th>
													<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 111.667px;">Name
													</th>
													<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 191.667px;">User Email</th>
													<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 77.6667px;">Options</th>
												</tr>
											</thead>
											<tbody>
												@foreach($process as $value)
												<tr role="row" class="odd">
													<td class="sorting_1"><img src="{{ asset('pedidos/'.$value->name)}}" alt="" class="img-responsive" style="padding: 20px"></td>
													<td>{{ $value->name }}</td>
													<td>{{ $value->user->email }}</td>
													<td>
														<button type="button" class="btn btn-info btn-lg" onclick="changeStatus({{ $value->id }})">Change Status to Editing</button>
								                     	<button class="btn-appointment"><a href='/download/{{$value->name}}' style="color:white">Download</a></button>
								                     </td>
												</tr>
												@endforeach
											</tbody>
										</table>
									@endif
	                               </div>
		                         </div>

		                     <div id="uploadImage" class="modal fade" role="dialog">
								  <div class="modal-dialog">

								    <!-- Modal content-->
								    <div class="modal-content">
								      <div class="modal-header">
								        <button type="button" class="close" data-dismiss="modal">&times;</button>
								        <h4 class="modal-title">Upload Image</h4>
								      </div>
								      <div class="modal-body">
								      {!! Form::open(['url' => '/uploadNewImage', 'method' => 'POST', 'files'=>'true']) !!}
								      <form action="" method="POST">
								      {{ csrf_field() }}
								        <label for="">New Image: </label><input type="file" name="foto[]" class="form-control">
								      </div>
								      <div class="modal-footer">
								      		<input type="hidden" id="idUpload" name="img">
									        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									        <button type="submit" class="btn btn-primary">Submit</button>
								      {{ Form::close() }}
								      </div>
								    </div>

								  </div>
								</div>

		                     <div role="tabpanel" class="tab-pane fade in" id="editedImages">
	                            <!-- <div class="spacing">
	                                <img src="img/icon1.jpg" style="width: 15%; margin: auto;" class="img-responsive">
	                                <h2>Drop your images here!</h2>
	                            </div> -->
								<div class="spacing" style="margin-top: 10px">

										<table id="example" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
											<thead>
												<tr role="row">
													<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 111.667px;">Image Edited
													</th>
													<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 111.667px;">Image Old
													</th>
													<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 111.667px;">Name
													</th>
													<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 191.667px;">User Email</th>
													<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 77.6667px;">Options</th>
												</tr>
											</thead>
											<tbody>
												@foreach($sendTotal as $value)
												<tr role="row" class="odd">
													<td class="sorting_1"><img src="{{ asset('user/'.$value->name)}}" alt="" class="img-responsive" style="padding: 20px"></td>
													<td class="sorting_1"><img src="{{ asset('pedidos/'.$value->imagen->name)}}" alt="" class="img-responsive" style="padding: 20px"></td>
													<td>{{ $value->name }}</td>
                          <td>{{ $value->user->email }}</td>
													<td>
			                                            <button class="btn-appointment"><a href='/download/{{$value->name}}' style="color:white">Download</a></button>
								                     </td>
												</tr>
												@endforeach
											</tbody>
										</table>


	                               </div>
		                         </div>

		                         <div role="tabpanel" class="tab-pane fade in" id="editionImages">
	                            <!-- <div class="spacing">
	                                <img src="img/icon1.jpg" style="width: 15%; margin: auto;" class="img-responsive">
	                                <h2>Drop your images here!</h2>
	                            </div> -->
								<div class="spacing" style="margin-top: 10px">
									@if(isset($editing))
										<table id="example" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
											<thead>
												<tr role="row">
													<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 111.667px;">Image
													</th>
													<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 111.667px;">Name
													</th>
													<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 191.667px;">User Email</th>
													<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 77.6667px;">Options</th>
												</tr>
											</thead>
											<tbody>
												@foreach($editing as $value)
												<tr role="row" class="odd">
													<td class="sorting_1"><img src="{{ asset('pedidos/'.$value->name)}}" alt="" class="img-responsive" style="padding: 20px"></td>
													<td>{{ $value->name }}</td>
													<td>{{ $value->user->email }}</td>
													<td>
														 @if($value->status == 'editing')
			                                            	<button type="button" class="btn btn-info btn-lg" onclick="upload({{ $value->id }})">Upload new Image</button>
			                                            @endif
			                                            <button class="btn-appointment"><a href='/download/{{$value->name}}' style="color:white">Download</a></button>
								                     </td>
												</tr>
												@endforeach
											</tbody>
										</table>

										<!-- @foreach($editing as $value) -->
	                                		<!-- <div class="col-md-12">
		                                        <div class="col-md-7">
		                                            <img src="{{ asset('pedidos/'.$value->name)}}" alt="" class="img-responsive" style="padding: 20px">
		                                        </div>
		                                        <div class="col-md-5" style="padding-top: 40px">
		                                            <strong>User Email: {{ $value->user->email }}<br></strong>
		                                            <strong>Status: {{ $value->send }}<br></strong> -->
		                                            <!-- @if($value->status == 'editing') -->
		                                            	<!-- <button type="button" class="btn btn-info btn-lg" onclick="upload({{ $value->id }})">Upload new Image</button> -->
		                                            <!-- @endif -->
		                                            <!-- <button class="btn-appointment"><a href='/download/{{$value->name}}' style="color:white">Download</a></button><br>
		                                        </div>
		                                    </div> -->
	                                	<!-- @endforeach -->
	                                @endif
	                               </div>
		                         </div>

							<!-- Trigger the modal with a button -->


								<!-- Modal -->
	                        <div id="myModal" class="modal fade" role="dialog">
								  <div class="modal-dialog">

								    <!-- Modal content-->
								    <div class="modal-content">
								      <div class="modal-header">
								        <button type="button" class="close" data-dismiss="modal">&times;</button>
								        <h4 class="modal-title">Change Status</h4>
								      </div>
								      <div class="modal-body">
								        <p>Do you really want to change status to Editing?</p>
								      </div>
								      <div class="modal-footer">
								      <form action="/changeStatusEditing" method="post">
								      		{{ csrf_field() }}
								      		<input type="hidden" id="idChange" name="id">
									        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									        <button type="submit" class="btn btn-primary">Submit</button>
								      </form>
								      </div>
								    </div>

								  </div>
								</div>

	                        @endif

	                        <div role="tabpanel" class="tab-pane fade in" id="images">

	                            <div class="row">
                                <br>
	                            	<table id="example" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
											<thead>
												<tr role="row">
													<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 111.667px;">Image
													</th>
													<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 111.667px;">Name
													</th>
													<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 191.667px;">User Email</th>
													<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 77.6667px;">Options</th>
												</tr>
											</thead>
											<tbody>
												@foreach($processUser as $value)
												<tr role="row" class="odd">
													<td class="sorting_1"><img src="{{ asset('pedidos/'.$value->name)}}" alt="" class="img-responsive" style="padding: 20px"></td>
													<td>{{ $value->name }}</td>
													<td>{{ $value->user->email }}</td>
													<td>
			                                            <button class="btn-appointment"><a href='/download/{{$value->name}}' style="color:white">Download</a></button>
								                     </td>
												</tr>
												@endforeach
											</tbody>
										</table>
	                            	<!-- @foreach($process as $key => $value) -->

                                		<!-- <div class="col-sm-4">
		                                    <img src="{{ asset('pedidos/'.$value->name)}}" style="width: 100%; height: auto; padding: 20px;" alt="">
		                                    <button class="btn-appointment"><a href='/download/{{$value->name}}' style="color:white">Download</a></button>
		                                </div> -->
                                	<!-- @endforeach -->
	                            </div>

	                        </div>

	                        <div role="tabpanel" class="tab-pane fade in" id="imagesEdited">
	                            <div class="row">
                                <br>
	                            	<table id="example" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
											<thead>
												<tr role="row">
													<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 111.667px;">Image New
													</th>
                          <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 111.667px;">Image Old
													</th>
													<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 111.667px;">Name
													</th>
													<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 191.667px;">User Email</th>
													<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 77.6667px;">Options</th>
												</tr>
											</thead>
											<tbody>
												@foreach($send as $value)
												<tr role="row" class="odd">
													<td class="sorting_1"><img src="{{ asset('user/'.$value->name)}}" alt="" class="img-responsive" style="padding: 20px"></td>
                          <td class="sorting_1"><img src="{{ asset('pedidos/'.$value->imagen->name)}}" alt="" class="img-responsive" style="padding: 20px"></td>
													<td>{{ $value->name }}</td>
													<td>{{ $value->user->email }}</td>
													<td>
			                                            <button class="btn-appointment"><a href='/download/{{$value->name}}' style="color:white">Download</a></button>
								                     </td>
												</tr>
												@endforeach
											</tbody>
										</table>
	                            	<!-- @foreach($send as $key => $value) -->
                                		<!-- <div class="col-sm-4">
		                                    <img src="{{ asset('user/'.$value->name)}}" style="width: 100%; height: auto; padding: 20px;" alt="">
		                                    <button class="btn-appointment"><a href='/download/{{$value->name}}' style="color:white">Download</a></button>
		                                </div> -->
                                	<!-- @endforeach -->
	                            </div>
	                        </div>

	                        <div role="tabpanel" class="tab-pane fade in" id="cart">
		                        <div class="row spacing">
		                        	{!! Form::open(['route' => 'payment', 'method' => 'get']) !!}
		                                <div class="col-md-6">
		                                	@foreach($no_process as $key => $value)
		                                		<div class="col-md-12">
			                                        <div class="col-md-7">
			                                            <img src="{{ asset('pedidos/'.$value->name)}}" alt="" class="img-responsive" style="padding: 20px">
			                                        </div>
			                                        <div class="col-md-5" style="padding-top: 40px">
			                                            <strong>Image {{ $key+1 }}<br>10$</strong>
			                                            <br>
			                                            <strong>Urgent: </strong><input type="checkbox" name="checked{{$value->id}}">
                                                  <!-- <br><strong>Description: </strong><textarea name="description{{ $value->id }}" rows="8" cols="80"></textarea> -->
			                                        </div>
			                                    </div>
		                                	@endforeach

										<div class="col-sm-12">
											<div class="col-md-6 text-center">
		                                        <label>Description: </label>
		                                        <textarea required name="description" cols="30" rows="3"></textarea>
		                                    </div>
										</div>
		                                <div class="col-sm-12">
		                                    <div class="col-md-6 text-center">
		                                    @foreach($plan as $value)
												@if($value->name == 'standar')
		                                        	<div class="h4"><strong>TOTAL: {{ 10 * count($no_process) }}$</strong></div>
		                                        @endif
		                                        	<div class="h4"><strong>TOTAL: {{ 15 * count($no_process) }}$</strong></div>
		                                     @endforeach
		                                    </div>
		                                    <div class="col-md-6 text-center">
		                                        <button class="btn-appointment" type="submit">CHECKOUT</button>
		                                    </div>
		                                </div>
		                            {{ Form::close() }}
		                            </div>
		                        </div>
		                    </div>

	                        <div role="tabpanel" class="tab-pane fade in" id="plan">
								@foreach($plan as $value)
									@if($value->name == 'standar')
										<div class="lbg hbox">
		                                    <h2 class="gtext bold">
		                                        My Plan is: Standard Pricing
		                                    </h2>
		                                </div>
									@else

										<div class="lbg hbox">
		                                    <h2 class="gtext bold">
		                                        My Plan is: Non-member
		                                    </h2>
		                                </div>
									@endif
									<br><br>
									<div class="container">
					                    <div class="row">
					                        <div class="col-md-6">
					                            <div class="price">
					                                <div class="lbg hbox">
					                                    <h2 class="gtext bold">
					                                        Standard Pricing
					                                    </h2>
					                                </div>
					                                <div class="bbox">
					                                    <h1 class="gtext text-center">
					                                        $10
					                                        <small>per edit</small>
					                                    </h1>
					                                    @if($value->name == 'non-member')
					                                    <button type="button" class="btn btn-info btn-lg" onclick="buyPlan({{ Auth::user()->id }})">Buy Plan</button>
					                                    @endif
					                                    <br>

					                                </div>
					                            </div>
					                            <br>
					                        </div>
					                        <div class="col-md-6">
					                        <br class="visible-xs visible-sm"><br class="visible-xs visible-sm">
					                            <div class="price">
					                                <div class="lbg hbox">
					                                    <h2 class="gtext bold">
					                                        Non-member Pricing
					                                    </h2>
					                                </div>
					                                <div class="bbox">
					                                    <h1 class="gtext text-center">
					                                        $15
					                                        <small>per edit</small>
					                                    </h1>
					                                    <br><br>
					                                </div>
					                            </div>
					                            <br>
					                        </div>
					                    </div>
					                </div>
								@endforeach
	                        </div>
	                    </div>
	                </div>


	            </section>
	        </div>
        @endif

        <!-- Trigger the modal with a button -->


			<!-- Modal -->
        <div id="modalPlan" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Buy Plan</h4>
			      </div>
			      <div class="modal-body">
			      <form action="/buyPlan" method="POST">
			      	{{ csrf_field() }}
			        <p>How many months do the plan want? <select name="cantidad">
			        	<option value="1">1</option>
			        	<option value="2">2</option>
			        	<option value="3">3</option>
			        	<option value="4">4</option>
			        	<option value="5">5</option>
			        	<option value="6">6</option>
			        	<option value="7">7</option>
			        	<option value="8">8</option>
			        	<option value="9">9</option>
			        	<option value="10">10</option>
			        	<option value="11">11</option>
			        	<option value="12">12</option>
			        </select></p>
			      </div>
			      <div class="modal-footer">

			      		<input type="hidden" id="idUserPlan" name="user">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary">Submit</button>
			      </form>
			      </div>
			    </div>

			  </div>
			</div>


        <div id="view-meet" class="view">

            <div class="slider">
                <div class="img" id="meetbg" style="padding-top: 250px;">
                    <h1 class="white text-center">WHAT INSPIRES US</h1>
                </div>
            </div>
            <div class="darklay">
                We believe in building strong relationships with our customers, insurance agents and the community. A personal look at our family and our passion.
            </div>            <div class="meet">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="dtext text-center" style="font-size: 44px; margin: 30px 0;">Our family proudly serving YOU since 1976</h1>
                        </div>
                    </div>
            <div class="row">
                <div class="col-md-6 vid" style="padding: 0;">
                    <!-- <div class="video-container"> -->
                        <!-- <iframe src="https://drive.google.com/file/d/0B_ebHl4HpGxZRXExSmpOZzExTjQ/preview"></iframe> -->
                        <!-- <video class="video">
                            <source src="img/tbsv.mp4" class="img-responsive" type="video/mp4">
                        </video> -->
                        <!-- <iframe src="https://drive.google.com/file/d/0B_ebHl4HpGxZT1JVZlFaWVEwWXM/preview" class="video"></iframe> -->
                        <iframe src="https://drive.google.com/file/d/0B_e_IcPtn1OdbjJWeHNaa1BMekk/preview" class="video"></iframe>
                    <!-- </div> -->
                </div>
                <div class="col-md-6 vtext text-center">
                    <strong style="display: block;">JOHN RATTAN</strong>
                    <p>Since 1976 TBS has been dedicated to having the best customer service in the industry. It is important delivering what you say you’re going to deliver, and hopefully we will exceed your expectations. </p>
                </div>
            </div>

                    <div class="row">

                        <div class="col-md-6 vtext dtext text-center">
                            <strong class="dtext" style="display: block;">JESSICA RATTAN <br>ON COMMUNITY INVOLVEMENT</strong>
                            <p>At The Body Shop, we consider it a privilege to get involved with many community activities, as we work alongside other community members invested in making a difference.</p>
                        </div>

                        <div class="col-md-6 vid" style="padding: 0;">
                            <!-- <div class="video-container"> -->
                                <!-- <iframe src="https://drive.google.com/file/d/0B_ebHl4HpGxZRXExSmpOZzExTjQ/preview"></iframe> -->
                                <!-- <video class="video">
                                    <source src="img/tbsv.mp4" class="img-responsive" type="video/mp4">
                                </video> -->
                                <iframe src="https://drive.google.com/file/d/0B_ebHl4HpGxZRFZlQ2YyU0hsQ00/preview" class="video"></iframe>
                            <!-- </div> -->
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 vid" style="padding: 0;">

                                <iframe src="https://drive.google.com/file/d/0B1B9yaFIjiKXaUtvMkJHS0E1ZGc/preview" class="video"></iframe>
                        </div>
                        <div class="col-md-6 vtext text-center">
                            <strong style="display: block;">TERRIE RATTAN <br><span style="font-size: 22px">THE IMPORTANCE OF STRONG RELATIONSHIPS WITH YOUR CUSTOMERS AND VENDORS.</span></strong>
                            <p>Terrie Rattan is the VP of Marketing and Community Relations at TBS and enjoys that role as she utilizes her degree in marketing to build relationships with insurance agents, community members, and clients.</p>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 vtext dtext text-center">
                            <strong class="dtext" style="display: block;">JOHN &amp; TERRIE</strong>
                            <p>John has built a culture and business that is different from everybody else.  He has built this business and put a great team in place. We feel very fortunate that we have a business that provides for our family and the families of our employees. </p>
                        </div>

                        <div class="col-md-6 vid" style="padding: 0;">
                                <iframe src="https://drive.google.com/file/d/0B_ebHl4HpGxZT1JVZlFaWVEwWXM/preview" class="video"></iframe>
                                <!-- <iframe src="https://drive.google.com/file/d/0B_ebHl4HpGxZZkwzXzhmYnVyeDg/preview" class="video"></iframe> -->
                        </div>
                    </div>



            </div>
        </div>

        <div id="view-start" class="view">
            <div class="bgsec spacing" id="drop2">
                <section class="white-gradient text-center">
                    <h1 class="bold" style="margin-bottom: 40px;">
                        Get your overnight edits <br>
                        <small class="gtext">
                            Fast 24 Hour Turn-Around
                        </small>
                    </h1>
                    @if(Auth::user())
                    	{!! Form::open(['url' => '/upload-images', 'method' => 'POST', 'files'=>'true', 'id' => 'demo-upload1', 'class' => 'dropzone needsclick dz-clickable dz-started']) !!}
				                    <!-- <div id="dropp"> -->
				    					<input type="file" name="foto[]">

					                        <div class="dropp-ftext" onclick="$('#demo-upload1').click();">
					                            <strong class="gtext" style="font-size: 26px;">
					                                <span class="hidden-xs hidden-sm gtext bold" style="font-size: 26px;">Drop</span>
					                                <span class="visible-xs visible-sm gtext bold" style="font-size: 26px;">Upload</span>
					                                your images here!
					                                </strong>
					                            <br>
					                            <i class="fa fa-chevron-circle-down fa-2x" style="font-size: 80px;"></i>
					                        </div>

				                    <!-- </div> -->
								{!! Form::close() !!}

									<div class="row">
				                        <div class="col-md-12 text-center">
				                            <button onclick="$('#demo-upload1').submit()" class="btn-appointment">SUBMIT</button>
				                        </div>
				                    </div>
					@else
						<section class="white-gradient text-center">
		                    <h1 class="bold" style="margin-bottom: 40px;">
		                        Sign in to enjoy the service <br>
		                        <div class="btn-appointment" data-ref="view-signin"  style="width: 50%; margin: 20px auto;">SIGN IN</div>
		                    </h1>
		                </section>
					@endif
                </section>

            </div>
        </div>


        <!-- <div class="logos">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="img/blogoc2.png" class="blogo" alt="" class="img-responsive">
                        <img src="img/blogoc3.png" class="blogo" alt="" class="img-responsive">
                        <img src="img/blogoc1.png" class="blogo" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div> -->


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


    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/dropzone.js"></script>
    <script src="js/gsap/TweenMax.min.js"></script>
    @yield('scripts')
    @if(Session::get('panel') == 1)
	    <script>
			$(document).ready(function(){
				$('a#user-panel').click();
			});
	    </script>
    @endif

    @if(Session::has('img_save'))
    	@if(Session::get('image_save') == 1)
    	<script>
			$(document).ready(function(){
				$('a#cart').click();
			});
	    </script>
	    @endif
    @endif


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

    <script>
		function buyPlan(id)
		{
			$('#idUserPlan').val(id);
			$('div#modalPlan').modal('show');
			$('div.modal-backdrop.fade.in').removeClass("modal-backdrop fade in");

		}

		function changeStatus(id)
		{
			$('#idChange').val(id);
			$('div#myModal').modal('show');
			$('div.modal-backdrop.fade.in').removeClass("modal-backdrop fade in");
        }

        function upload(id)
        {
			$('#idUpload').val(id);
			$('div#uploadImage').modal('show');
			$('div.modal-backdrop.fade.in').removeClass("modal-backdrop fade in");
        }
    </script>

	<<!-- script>
        Dropzone.options.myDropzone = {
            autoProcessQueue: false,
            uploadMultiple: true,
            maxFilezise: 10,
            maxFiles: 2,

            init: function() {
                var submitBtn = document.querySelector("#submit");
                myDropzone = this;

                submitBtn.addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });

                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });

                this.on("success",
                    myDropzone.processQueue.bind(myDropzone)
                );
            }
        };
    </script> -->

    <script src="https://use.fontawesome.com/16f6b8af4b.js"></script>
    <!-- <script src="js/gsap/TimelineLite.min.js"></script> -->
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.15/datatables.min.js"></script>
	<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').DataTable();
			} );
		</script>
    </body>

</html>
