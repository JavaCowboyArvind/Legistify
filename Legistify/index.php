<!DOCTYPE html>
<html>
<head>
<title>Home | Legistify</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
<link rel="icon" type="image/x-ico" href="fav.ico">
<link rel="stylesheet" type="text/css" href="style.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="ajax_alert.js" type="text/javascript"></script>
   <script src="validation.js" type="text/javascript"></script>
</head>
<body>		
 
	<div id="cover_box">
		<div id="wrap_cover">
		<div id="drop_cover_box">
			<div id="logo_contact">
				<div id="logo_label"><h2>legistify</h2> <img src="fav2.png"/></div>
				<div id="contact_label">
					<header>For any query, reach out to us here:</header>
				</div>
				<div id="contact_label1">
					<div class="contact_inner">
					<header><small>mobile:</small> +91 9086600001<br><small>tel:</small> 011-685-0000<br><small>mail:</small> legistify@gmail.com</header>
					</div>
				</div>
			</div>
			<div id="navbar">
				<div id='cssmenu'>
					<ul>
							<li class='active'><a href=''><span>Home</span></a></li>
							<li id="lengthy"><a href=''><span>Legal Services</span></a>
								<ul>
									<li><a href="">Lawyers</a></li>
									<li><a href="">Verify Documents</a></li>
								</ul>  
							</li>
							<li id="lengthy"><a href=''><span>Legal Documents</span></a>	
								<ul>
									<li><a href="">Professional</a></li>
									<li><a href="">Popular</a></li>
									<li><a href="">Browse All</a></li>
								</ul>
							</li>
							<li class='last'><a href=''><span>Testimonials</span></a></li>
							<li class='last'><a href=''><span>Partners</span></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="drop_light_box">
			<form id="search_form">
				<div id="search_div">
					<input type="text" placeholder="Search" id="search_input" />
				</div> 
				<button type="submit" id="search">
				Submit
				</button>
			</form>
			<a id="login" href="#modal-one">
				Login
			</a>
			<a id="signup" href="#modal-one">
				SignUp
			</a>
		</div>
		</div>
				<script type="text/javascript">

$("#login").click(function()
{  $('#tab1').click();
});
$("#signup").click(function()
{ 
	 $('#tab2').click();
});
 
				</script>
<!-- Modal -->
<div class="modal" id="modal-one" aria-hidden="true">
  <div class="modal-dialog">
 
                      <div class="modal-body">
					  <div class="modal-header">
                         <a href="#close" class="btn-close" aria-hidden="true"><img src="cross.png"/></a> <!--CHANGED TO "#close"-->
                     </div>
<ul class="tabs">
    <li>
        <input type="radio" name="tabs" id="tab1" checked />
        <label for="tab1">Login</label>
	   <div id="tab-content1" class="tab-content">
					<div id="login1"> 
                     <form>
                       <input type="email" placeholder="Email" />
                       <input type="password" placeholder="Password" />
                       <input type="submit" value="Log in" />
					   <h3>Forgot Password?</h3>
                     </form>
                    </div>
         </div>
    </li>
  
    <li>
        <input type="radio" name="tabs" id="tab2" />
        <label for="tab2">SignUp</label>
        <div id="tab-content2" class="tab-content">
      		
		<div id="cover_signup_form">
	<form id="signup_form">
		<div id="signup_form_r1">
			<div id="signup_form_r1_first">
				<input type="text" name="namef"  onblur="validate('namef', this.value)" Placeholder="First Name" id="input_fn" />
			</div>
			<div id="signup_form_r1_second">
				<input type="text" name="namel"  onblur="validate('namel', this.value)" Placeholder="Last Name" id="input_ln" />
			</div><div class="inline_div"><div id="namef"></div><div id="namel"></div></div>
			<div id="custom_signup_form_r1">
			</div>
		</div>
		<div id="signup_form_r2">
			<input type="text"  name="inmail"  onblur="validate('inmail', this.value)" Placeholder="Email" id="input_m" />
			<div class="mailid"><div id="inmail"></div></div>
			<input type="password" name="inpass"   onblur="validate('inpass', this.value)" Placeholder="Password " id="input_p" />
			<div class="passid"><div id="inpass"></div></div>
		</div>
		<h3 id="h3_conditions">
			By creating an account, you agree to our <span id="span_tandc_signup"><a href="#" id="tandc_signup">Terms &amp; Conditions</a></span>
		</h3>
		<div id="signup_form_submit">
			<input type="button"  onclick="checkForm()" value="Create account" id="input_submit" />
		</div>
		<div id="signup_form_submit_custom">
		</div>
	</form> 
</div>
		</div>
    </li>
	<li>
        <input type="radio" name="tabs" id="tab3" />
        <label for="tab3">Social?</label>
	   <div id="tab-content3" class="tab-content">
					<div id="social_signup_form"> 
                     
                       <div id="fb_outer">
	<div id="fb_outer_link">
		<a id="fb_outer_link_a" > 
		<ul id="fb_outer_ul">
			<i id="fb_outer_i"></i>
			<li id="fb_outer_li">
				Connect with Facebook
			</li>
			<div id="fb_outer_div">
			</div>
		</ul></a>
	</div><br>
	<div id="li_outer">
		<a href="" id="li_outer_link">
		<ul id="li_outer_ul">
			<i id="li_outer_i"></i>
			<li id="li_outer_li">
				Connect with Linked In
			</li>
			<div id="li_outer_div">
			</div>
		</ul></a>
	</div>
	<div id="div_outer">
	
	</div>
</div>  
			</div>
         </div>
    </li>
</ul>
<br style="clear: both;" /> </div> <div class="modal-footer">
                                   </div>

<div id="status"></div>
	</div>
  </div>  
				
	<div id="this">
		<div id="cover_both">
		<div id="popular">
			<div id="header">
				<h2>Our most popular legal Documents:</h2>
			</div>
			<div id="items">
				<div class="grid">
					<figure class="effect">
						<img src="copyright.jpg"/>
						<figcaption>
							<h2>Copyright <span>Policy</span></h2>
							<p>Instant creation
							</p>
						</figcaption>			
					</figure>
					<figure class="effect">
						<img src="employment.jpg"/>
						<figcaption>
							<h2>Employment <span>Agreement</span></h2>
							<p>Instant creation
							</p>
						</figcaption>			
					</figure>
					<figure class="effect">
						<img src="cookies.jpg"/>
						<figcaption>
							<h2>Cookies <span>Policy</span></h2>
							<p>Instant creation
							</p>
						</figcaption>			
					</figure>
					<figure class="effect">
						<img src="eula.jpg"/>
						<figcaption>
							<h2>EULA <span>Agreement</span></h2>
							<p>Instant creation
							</p>
						</figcaption>			
					</figure>
				</div>
			
			</div>
		
		</div><!--popular-->
		<div id="facts">
			<div id="header">
				<h2>Key facts about our Legal Documents:</h2>
			</div>
			<div id="items">
				<div id="box_cover">
				<div class="box1"><h2>100% Genuine</h2></div>
				<div class="box1"><h2>Instant Creation</h2></div>
				</div>
				<div id="box_cover">
				<div class="box1"><h2>Friendly Format</h2></div>
				<div class="box1"><h2>Easy Purchase</h2></div>
				</div>
				<div id="box_cover">
				<div class="box1"><h2>24*7 Help</h2></div>
				<div class="box1"><h2>Strong Content</h2></div>
				</div>
			</div>
		</div>
	</div><!--cover_both-->
	<div id="cover_right">
		<div id="box2">
			<div id="header1"><h2>Legal Notices</h2></div>
			<p>Privacy Policy</p><hr>
			<p>Anti-Spam Policy</p><hr>
			<p>Website Policy</p><hr>
			<p>Cookies Policy</p><hr>
			<p>Copyright Notice</p><hr>
			<p>Other Notice</p>
		</div>
		<div id="box3">
			<div id="header1"><h2>Contracts</h2></div>
			<p>EULA</p><hr>
			<p>Software License Agreement</p>
		</div>
		<div id="box4">
			<div id="header1"><h2>Disclaimer</h2></div>
			<p>Employment Agreement</p><hr>
			<p>Consultancy Agreement</p><hr>
			<p>Newsletter Disclaimer</p><hr>
			<p>Report Disclaimer</p>
		</div>
	</div>
  </div><!--this-->
	<div id="footer">
		<div class="logo">legistify</div>
		<div class="list_items"><a>Privacy Policy</a> | <a>Terms &#38; Conditions</a> | <a>Contact Us</a> | <a>Newsletter</a> | <a>Become a Partner</a></div>
		<div class="social">
		<img src="google.png"/><img src="linkedin.png"/><img src="fb.png"/><img src="twitter.png"/><img src="blog.png"/>
		</div>
		<div class="copy"><em>&copy; legistify 2013 - All Rights Reserved</em></div>
	</div>
	</div><!--cover box-->
</body>
</html>