<?php include_once 'header.php'; ?>


	<div id="content" class="content" role="main">

				<div data-elementor-type="wp-page" data-elementor-id="23" class="elementor elementor-23" data-elementor-settings="[]">
							<div class="elementor-section-wrap">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-3c8ff4f3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3c8ff4f3" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6e11e478" data-id="6e11e478" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-background-overlay"></div>
								<div class="elementor-element elementor-element-46fea76c elementor-position-right elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="46fea76c" data-element_type="widget" data-widget_type="icon-box.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.5.2 - 22-12-2021 */
@media (min-width:768px){.elementor-widget-icon-box.elementor-position-left .elementor-icon-box-wrapper,.elementor-widget-icon-box.elementor-position-right .elementor-icon-box-wrapper{display:-webkit-box;display:-ms-flexbox;display:flex}.elementor-widget-icon-box.elementor-position-left .elementor-icon-box-icon,.elementor-widget-icon-box.elementor-position-right .elementor-icon-box-icon{display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto}.elementor-widget-icon-box.elementor-position-right .elementor-icon-box-wrapper{text-align:right;-webkit-box-orient:horizontal;-webkit-box-direction:reverse;-ms-flex-direction:row-reverse;flex-direction:row-reverse}.elementor-widget-icon-box.elementor-position-left .elementor-icon-box-wrapper{text-align:left;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row}.elementor-widget-icon-box.elementor-position-top .elementor-icon-box-img{margin:auto}.elementor-widget-icon-box.elementor-vertical-align-top .elementor-icon-box-wrapper{-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start}.elementor-widget-icon-box.elementor-vertical-align-middle .elementor-icon-box-wrapper{-webkit-box-align:center;-ms-flex-align:center;align-items:center}.elementor-widget-icon-box.elementor-vertical-align-bottom .elementor-icon-box-wrapper{-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end}}@media (max-width:767px){.elementor-widget-icon-box .elementor-icon-box-icon{margin-left:auto!important;margin-right:auto!important;margin-bottom:15px}}.elementor-widget-icon-box .elementor-icon-box-wrapper{text-align:center}.elementor-widget-icon-box .elementor-icon-box-title a{color:inherit}.elementor-widget-icon-box .elementor-icon-box-content{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1}.elementor-widget-icon-box .elementor-icon-box-description{margin:0}

.bottom_wrapper {
  position: relative;
  width: 100%;
  background-color: #fff;
  padding: 20px 20px;
  position: absolute;
  bottom: 0;
}
.bottom_wrapper .message_input_wrapper {
  display: inline-block;
  height: 50px;
  border-radius: 25px;
  border: 1px solid #bcbdc0;
  width: calc(100% - 160px);
  position: relative;
  padding: 0 20px;
}
.bottom_wrapper .message_input_wrapper .message_input {
  border: none;
  height: 100%;
  box-sizing: border-box;
  width: calc(100% - 40px);
  position: absolute;
  outline-width: 0;
  color: gray;
}
.bottom_wrapper .send_message {
  width: 140px;
  height: 50px;
  display: inline-block;
  border-radius: 50px;
  background-color: #a3d063;
  border: 2px solid #a3d063;
  color: #fff;
  cursor: pointer;
  transition: all 0.2s linear;
  text-align: center;
  float: right;
}
.bottom_wrapper .send_message:hover {
  color: #a3d063;
  /* background-color: #fff; */
}
.bottom_wrapper .send_message .text {
  font-size: 18px;
  font-weight: 300;
  display: inline-block;
  line-height: 48px;
}

.message_template {
  display: none;
}





</style>		<div class="elementor-icon-box-wrapper">
						<div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-">
				<i aria-hidden="true" class="fa fa-info-circle"></i>				</span>
			</div>
						<div class="elementor-icon-box-content">
				<h4 class="elementor-icon-box-title">
					<span>
						Do you have any suggestion on how to improve this great institution? 			</span>
				</h4>
                <?php
if(!isset($_COOKIE['suggestion_cookies'])){
	?>
				<form action="suggestion.php" method="post" >
									<p class="elementor-icon-box-description">
										<label> Fullname <span style="color: red;" >*</span><br>
											<input required type="text" name="fullname" value="" size="20" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"> </label><br />
											<label> Email <span style="color: red;" >*</span><br>
												<input required type="email" name="email" value="" size="20" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"> </label><br />
												<label> Subject <span style="color: red;" >*</span> <br>
													<input required type="text" name="subject" value="" size="20" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"> </label><br />

                                                    <label> Body <span style="color: red;" >*</span> <br>
													<textarea required name="body" row="5" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></textarea> </label><br />
													
													
														
															<input type="submit" value="Send your suggestion" class="wpcf7-form-control has-spinner wpcf7-submit"><span class="wpcf7-spinner"></span>
										</p>

			</form>
			<?php }else{
			?>
<?php include_once 'faq_content.php' ;?>
			<?php
			
		}
	
	?>		
		
	
	
		</div>

		</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6f31d961" data-id="6f31d961" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
					<div class="elementor-background-overlay"></div>
								<div class="elementor-element elementor-element-1870cb2 elementor-position-right elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="1870cb2" data-element_type="widget" data-widget_type="icon-box.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-box-wrapper">
						<div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-">
				<i aria-hidden="true" class="far fa-comments"></i>				</span>
			</div>
						<div class="elementor-icon-box-content">
				<h4 class="elementor-icon-box-title">
					<span>
						Say something to start a live chat. <a href="index.php?clear=1"><i style="font-size:10px">[Start New Chat]</i> </a>			</span>
				</h4>
									<p class="elementor-icon-box-description">
										</p>
	<?php
	if((isset($_POST['body'])) and ($_POST['body'] != "")){
		$fullname =  $_POST['fullname'];
		$email =  $_POST['email'];
		$subject =  $_POST['subject'];
		$body =  $_POST['body'];
		
		
		
		if(isset($email)){
		 $sql = "INSERT INTO `suggestions` (`subject`, `body`, `fullname`, `email`, `status`) VALUES 
        ( '$subject', '$body', '$fullname', '$email', '1');";
		//die();
		if (mysqli_query($conn, $sql)) {
			$last_id = mysqli_insert_id($conn);
			$chatapp_name = "suggestion_cookies";
			$chatapp_value = $last_id ;
			setcookie($chatapp_name, $chatapp_value, time() + (86400 * 30), "/"); 

}

			echo "Your Suggestion has been sent successfully";
		  } else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		  }
		}


		
						
		?>								
									</div>
									
		</div></div>
		
				
				
					
		<?php
if(isset($_COOKIE['chatapp_cookies'])){
	?>
	<iframe src="chatarea2.php" scrolling="no" width="90%" height="400px"></iframe>
					<form onsubmit="submit_chat();" action="javascript:void(0);">
				</div><ul class="messages"></ul><div class="bottom_wrapper clearfix"><div class="message_input_wrapper">
					<input autocomplete="off" autofocus="yes" class="message_input"  id="msg" name="message" placeholder="Type your message here..." /></div>
					<div onclick="submit_chat()" class="send_message"><div class="icon"></div><div class="text" >Send</div></div></div></div>
					<div class="message_template"><li class="message"><div class="avatar"></div><div class="text_wrapper">
						<div class="text"></div></div></li> </div>
						</form>


						<?php }else{  ?> 
<iframe src="chatarea.php" scrolling="no" width="90%" height="400px"></iframe>

<?php } ?>
				</div>
				<div >
					
				</div></div>
				
					</div>
					<!-- <iframe src="chatarea.php"></iframe> -->
					
		</div>
		
							</div>
							<script>
	
function submit_chat() {
	str = document.getElementById("msg").value;
  if (str.length == 0) {
    document.getElementById("msg").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       // document.getElementById("mnsg").innerHTML = this.responseText;
	   document.getElementById("msg").value = "";
	   console.log(this.responseText);
      }
    }
    xmlhttp.open("GET", "sendmsg.php?newmsg="+str, true);
    xmlhttp.send();
  }
}
</script>					
		
<?php
if(isset($_GET['clear'])){
	echo "pls stop cookies";

setcookie('chatapp_cookies', null);

?>

<script>
	document.cookie = "chatapp_cookies=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
	window.location.replace("http://localhost/support/index.php");
	</script>
<?php

}

?>

									
							
							</div>
		</section>
		
				<section class="elementor-section elementor-top-section elementor-element elementor-element-5d719f9d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5d719f9d" data-element_type="section">
						<div class="elementor-container elementor-column-gap-wider">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-58019c0a" data-id="58019c0a" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-58cada35 elementor-widget elementor-widget-heading" data-id="58cada35" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			
							</div>
		</section>
		
						</div>
					</div>
		
	</div><!-- #content -->

	


			</div><!-- .wf-container -->
		</div><!-- .wf-wrap -->

	
	</div><!-- #main -->

	

	
	<!-- !Footer -->
	<footer id="footer" class="footer solid-bg elementor-footer empty-footer">

		
			<div class="wf-wrap">
				<div class="wf-container-footer">
					<div class="wf-container">
								<div data-elementor-type="footer" data-elementor-id="414" class="elementor elementor-414 elementor-location-footer" data-elementor-settings="[]">
		<div class="elementor-section-wrap">
					<section class="elementor-section elementor-top-section elementor-element elementor-element-55d9fc84 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="55d9fc84" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-wider">
					<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-7cdd87dd" data-id="7cdd87dd" data-element_type="column">
			<div class="elementor-widget-wrap">
									</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-eba9a79" data-id="eba9a79" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-f858222 elementor-widget elementor-widget-image" data-id="f858222" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.5.2 - 22-12-2021 */
.elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src$=".svg"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}</style>												<img width="293" height="50" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/aapoly-1.png" class="attachment-large size-large" alt="" loading="lazy">															</div>
				</div>
				<div class="elementor-element elementor-element-0e46d7c elementor-widget elementor-widget-text-editor" data-id="0e46d7c" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<span style="font-size: 17px">During the second Republic, 1979 to 1983, the government of late Chief Olabisi Onabanjo tried establishing this Polytechnic. <strong><a href="https://aapoly.edu.ng/history/">Read More</a></strong></span>						</div>
				</div>
				<div class="elementor-element elementor-element-e9dadde e-grid-align-left elementor-shape-rounded elementor-grid-0 elementor-widget elementor-widget-social-icons" data-id="e9dadde" data-element_type="widget" data-widget_type="social-icons.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.5.2 - 22-12-2021 */
.elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,.elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,.elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container{line-height:1;font-size:0}.elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid{display:inline-grid}.elementor-widget-social-icons .elementor-grid{grid-column-gap:var(--grid-column-gap,5px);grid-row-gap:var(--grid-row-gap,5px);grid-template-columns:var(--grid-template-columns);-webkit-box-pack:var(--justify-content,center);-ms-flex-pack:var(--justify-content,center);justify-content:var(--justify-content,center);justify-items:var(--justify-content,center)}.elementor-icon.elementor-social-icon{font-size:var(--icon-size,25px);line-height:var(--icon-size,25px);width:calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));height:calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)))}.elementor-social-icon{--e-social-icon-icon-color:#fff;display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;background-color:#818a91;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;text-align:center;cursor:pointer}.elementor-social-icon i{color:var(--e-social-icon-icon-color)}.elementor-social-icon svg{fill:var(--e-social-icon-icon-color)}.elementor-social-icon:last-child{margin:0}.elementor-social-icon:hover{opacity:.9;color:#fff}.elementor-social-icon-android{background-color:#a4c639}.elementor-social-icon-apple{background-color:#999}.elementor-social-icon-behance{background-color:#1769ff}.elementor-social-icon-bitbucket{background-color:#205081}.elementor-social-icon-codepen{background-color:#000}.elementor-social-icon-delicious{background-color:#39f}.elementor-social-icon-deviantart{background-color:#05cc47}.elementor-social-icon-digg{background-color:#005be2}.elementor-social-icon-dribbble{background-color:#ea4c89}.elementor-social-icon-elementor{background-color:#d30c5c}.elementor-social-icon-envelope{background-color:#ea4335}.elementor-social-icon-facebook,.elementor-social-icon-facebook-f{background-color:#3b5998}.elementor-social-icon-flickr{background-color:#0063dc}.elementor-social-icon-foursquare{background-color:#2d5be3}.elementor-social-icon-free-code-camp,.elementor-social-icon-freecodecamp{background-color:#006400}.elementor-social-icon-github{background-color:#333}.elementor-social-icon-gitlab{background-color:#e24329}.elementor-social-icon-globe{background-color:#818a91}.elementor-social-icon-google-plus,.elementor-social-icon-google-plus-g{background-color:#dd4b39}.elementor-social-icon-houzz{background-color:#7ac142}.elementor-social-icon-instagram{background-color:#262626}.elementor-social-icon-jsfiddle{background-color:#487aa2}.elementor-social-icon-link{background-color:#818a91}.elementor-social-icon-linkedin,.elementor-social-icon-linkedin-in{background-color:#0077b5}.elementor-social-icon-medium{background-color:#00ab6b}.elementor-social-icon-meetup{background-color:#ec1c40}.elementor-social-icon-mixcloud{background-color:#273a4b}.elementor-social-icon-odnoklassniki{background-color:#f4731c}.elementor-social-icon-pinterest{background-color:#bd081c}.elementor-social-icon-product-hunt{background-color:#da552f}.elementor-social-icon-reddit{background-color:#ff4500}.elementor-social-icon-rss{background-color:#f26522}.elementor-social-icon-shopping-cart{background-color:#4caf50}.elementor-social-icon-skype{background-color:#00aff0}.elementor-social-icon-slideshare{background-color:#0077b5}.elementor-social-icon-snapchat{background-color:#fffc00}.elementor-social-icon-soundcloud{background-color:#f80}.elementor-social-icon-spotify{background-color:#2ebd59}.elementor-social-icon-stack-overflow{background-color:#fe7a15}.elementor-social-icon-steam{background-color:#00adee}.elementor-social-icon-stumbleupon{background-color:#eb4924}.elementor-social-icon-telegram{background-color:#2ca5e0}.elementor-social-icon-thumb-tack{background-color:#1aa1d8}.elementor-social-icon-tripadvisor{background-color:#589442}.elementor-social-icon-tumblr{background-color:#35465c}.elementor-social-icon-twitch{background-color:#6441a5}.elementor-social-icon-twitter{background-color:#1da1f2}.elementor-social-icon-viber{background-color:#665cac}.elementor-social-icon-vimeo{background-color:#1ab7ea}.elementor-social-icon-vk{background-color:#45668e}.elementor-social-icon-weibo{background-color:#dd2430}.elementor-social-icon-weixin{background-color:#31a918}.elementor-social-icon-whatsapp{background-color:#25d366}.elementor-social-icon-wordpress{background-color:#21759b}.elementor-social-icon-xing{background-color:#026466}.elementor-social-icon-yelp{background-color:#af0606}.elementor-social-icon-youtube{background-color:#cd201f}.elementor-social-icon-500px{background-color:#0099e5}.elementor-shape-rounded .elementor-icon.elementor-social-icon{-webkit-border-radius:10%;border-radius:10%}.elementor-shape-circle .elementor-icon.elementor-social-icon{-webkit-border-radius:50%;border-radius:50%}</style>		<div class="elementor-social-icons-wrapper elementor-grid">
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-d051ce9" target="_blank">
						<span class="elementor-screen-only">Facebook</span>
						<i class="fab fa-facebook"></i>					</a>
				</span>
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-de3cc71" target="_blank">
						<span class="elementor-screen-only">Twitter</span>
						<i class="fab fa-twitter"></i>					</a>
				</span>
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-c04cac7" target="_blank">
						<span class="elementor-screen-only">Youtube</span>
						<i class="fab fa-youtube"></i>					</a>
				</span>
					</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-63e38e25" data-id="63e38e25" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-0f82c4a elementor-widget elementor-widget-heading" data-id="0f82c4a" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Quick Links</h2>		</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-7abaeab elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7abaeab" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0577b2b" data-id="0577b2b" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-d9283d9 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="d9283d9" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.5.2 - 22-12-2021 */
.elementor-widget.elementor-icon-list--layout-inline .elementor-widget-container{overflow:hidden}.elementor-widget .elementor-icon-list-items.elementor-inline-items{margin-right:-8px;margin-left:-8px}.elementor-widget .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item{margin-right:8px;margin-left:8px}.elementor-widget .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after{width:auto;left:auto;right:auto;position:relative;height:100%;border-top:0;border-bottom:0;border-right:0;border-left-width:1px;border-style:solid;right:-8px}.elementor-widget .elementor-icon-list-items{list-style-type:none;margin:0;padding:0}.elementor-widget .elementor-icon-list-item{margin:0;padding:0;position:relative}.elementor-widget .elementor-icon-list-item:after{position:absolute;bottom:0;width:100%}.elementor-widget .elementor-icon-list-item,.elementor-widget .elementor-icon-list-item a{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;font-size:inherit}.elementor-widget .elementor-icon-list-icon+.elementor-icon-list-text{-ms-flex-item-align:center;align-self:center;padding-left:5px}.elementor-widget .elementor-icon-list-icon{display:-webkit-box;display:-ms-flexbox;display:flex}.elementor-widget .elementor-icon-list-icon svg{width:var(--e-icon-list-icon-size,1em);height:var(--e-icon-list-icon-size,1em)}.elementor-widget .elementor-icon-list-icon i{width:1.25em;font-size:var(--e-icon-list-icon-size)}.elementor-widget.elementor-widget-icon-list .elementor-icon-list-icon{text-align:var(--e-icon-list-icon-align)}.elementor-widget.elementor-widget-icon-list .elementor-icon-list-icon svg{margin:var(--e-icon-list-icon-margin,0 calc(var(--e-icon-list-icon-size, 1em) * .25) 0 0)}.elementor-widget.elementor-list-item-link-full_width a{width:100%}.elementor-widget.elementor-align-center .elementor-icon-list-item,.elementor-widget.elementor-align-center .elementor-icon-list-item a{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.elementor-widget.elementor-align-center .elementor-icon-list-item:after{margin:auto}.elementor-widget.elementor-align-center .elementor-inline-items{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.elementor-widget.elementor-align-left .elementor-icon-list-item,.elementor-widget.elementor-align-left .elementor-icon-list-item a{-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;text-align:left}.elementor-widget.elementor-align-left .elementor-inline-items{-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.elementor-widget.elementor-align-right .elementor-icon-list-item,.elementor-widget.elementor-align-right .elementor-icon-list-item a{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end;text-align:right}.elementor-widget.elementor-align-right .elementor-icon-list-items{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}.elementor-widget:not(.elementor-align-right) .elementor-icon-list-item:after{left:0}.elementor-widget:not(.elementor-align-left) .elementor-icon-list-item:after{right:0}@media (max-width:1024px){.elementor-widget.elementor-tablet-align-center .elementor-icon-list-item,.elementor-widget.elementor-tablet-align-center .elementor-icon-list-item a,.elementor-widget.elementor-tablet-align-center .elementor-icon-list-items{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.elementor-widget.elementor-tablet-align-center .elementor-icon-list-item:after{margin:auto}.elementor-widget.elementor-tablet-align-left .elementor-icon-list-items{-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.elementor-widget.elementor-tablet-align-left .elementor-icon-list-item,.elementor-widget.elementor-tablet-align-left .elementor-icon-list-item a{-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;text-align:left}.elementor-widget.elementor-tablet-align-right .elementor-icon-list-items{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}.elementor-widget.elementor-tablet-align-right .elementor-icon-list-item,.elementor-widget.elementor-tablet-align-right .elementor-icon-list-item a{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end;text-align:right}.elementor-widget:not(.elementor-tablet-align-right) .elementor-icon-list-item:after{left:0}.elementor-widget:not(.elementor-tablet-align-left) .elementor-icon-list-item:after{right:0}}@media (max-width:767px){.elementor-widget.elementor-mobile-align-center .elementor-icon-list-item,.elementor-widget.elementor-mobile-align-center .elementor-icon-list-item a,.elementor-widget.elementor-mobile-align-center .elementor-icon-list-items{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.elementor-widget.elementor-mobile-align-center .elementor-icon-list-item:after{margin:auto}.elementor-widget.elementor-mobile-align-left .elementor-icon-list-items{-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.elementor-widget.elementor-mobile-align-left .elementor-icon-list-item,.elementor-widget.elementor-mobile-align-left .elementor-icon-list-item a{-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;text-align:left}.elementor-widget.elementor-mobile-align-right .elementor-icon-list-items{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}.elementor-widget.elementor-mobile-align-right .elementor-icon-list-item,.elementor-widget.elementor-mobile-align-right .elementor-icon-list-item a{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end;text-align:right}.elementor-widget:not(.elementor-mobile-align-right) .elementor-icon-list-item:after{left:0}.elementor-widget:not(.elementor-mobile-align-left) .elementor-icon-list-item:after{right:0}}</style>		<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
										<span class="elementor-icon-list-text">Health Services</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
										<span class="elementor-icon-list-text">Institution Security</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
										<span class="elementor-icon-list-text">Security Alert</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
										<span class="elementor-icon-list-text">Careers</span>
									</li>
								<li class="elementor-icon-list-item">
											<a href="https://rugipo.etilen.com.ng/events/">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
										<span class="elementor-icon-list-text">Calendar</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
										<span class="elementor-icon-list-text">Enterprises</span>
									</li>
						</ul>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2179eda" data-id="2179eda" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-90f669a elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="90f669a" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
										<span class="elementor-icon-list-text">Campuses</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
										<span class="elementor-icon-list-text">Alumni</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
										<span class="elementor-icon-list-text">Donations</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
										<span class="elementor-icon-list-text">Privacy</span>
									</li>
								<li class="elementor-icon-list-item">
											<a href="https://rugipo.etilen.com.ng/site-map">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
										<span class="elementor-icon-list-text">Sitemap</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
										<span class="elementor-icon-list-text">Terms</span>
									</li>
						</ul>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-75645e44" data-id="75645e44" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-3f84c6a elementor-widget elementor-widget-heading" data-id="3f84c6a" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Global Location</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-771b57a elementor-widget elementor-widget-google_maps" data-id="771b57a" data-element_type="widget" data-widget_type="google_maps.default">
				<div class="elementor-widget-container">
					<div class="elementor-custom-embed">
			<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/maps(1).html" title="Abraham Adesanya Polytechnic, Ijebu Igbo" aria-label="Abraham Adesanya Polytechnic, Ijebu Igbo"></iframe>
		</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-ec815d1" data-id="ec815d1" data-element_type="column">
			<div class="elementor-widget-wrap">
									</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-9f2aedd elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9f2aedd" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-28408b6" data-id="28408b6" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-be0e92c elementor-widget elementor-widget-heading" data-id="be0e92c" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<div class="elementor-heading-title elementor-size-default">Copyright © 2021 Abraham Adesanya Polytechnic, Ijebu Igbo</div>		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				</div>
		</div>
							</div><!-- .wf-container -->
				</div><!-- .wf-container-footer -->
			</div><!-- .wf-wrap -->

			
	</footer><!-- #footer -->


	<a href="https://aapoly.edu.ng/contact/#" class="scroll-top off"><span class="screen-reader-text">Go to Top</span></a>

</div><!-- #page -->

	<script type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
	<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/main.min.js.download" id="dt-main-js"></script>
<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/core.min.js.download" id="jquery-ui-core-js"></script>
<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/datepicker.min.js.download" id="jquery-ui-datepicker-js"></script>
<script type="text/javascript" id="jquery-ui-datepicker-js-after">
jQuery(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
</script>
<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/jquery.typewatch.js.download" id="mec-typekit-script-js"></script>
<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/featherlight.js.download" id="featherlight-js"></script>
<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/select2.full.min.js.download" id="mec-select2-script-js"></script>
<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/tooltip.js.download" id="mec-tooltip-script-js"></script>
<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/lity.min.js.download" id="mec-lity-script-js"></script>
<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/colorbrightness.min.js.download" id="mec-colorbrightness-script-js"></script>
<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/owl.carousel.min.js.download" id="mec-owl-carousel-script-js"></script>
<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/regenerator-runtime.min.js.download" id="regenerator-runtime-js"></script>
<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/wp-polyfill.min.js.download" id="wp-polyfill-js"></script>
<script type="text/javascript" id="contact-form-7-js-extra">
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/aapoly.edu.ng\/wp-json\/","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/index.js.download" id="contact-form-7-js"></script>
<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/jquery.blockUI.min.js.download" id="jquery-blockui-js"></script>
<script type="text/javascript" id="wc-add-to-cart-js-extra">
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/aapoly.edu.ng","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/add-to-cart.min.js.download" id="wc-add-to-cart-js"></script>
<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/js.cookie.min.js.download" id="js-cookie-js"></script>
<script type="text/javascript" id="woocommerce-js-extra">
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/woocommerce.min.js(1).download" id="woocommerce-js"></script>
<script type="text/javascript" id="wc-cart-fragments-js-extra">
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_6378ec71cbc18df811981916a262259e","fragment_name":"wc_fragments_6378ec71cbc18df811981916a262259e","request_timeout":"5000"};
/* ]]> */
</script>
<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/cart-fragments.min.js.download" id="wc-cart-fragments-js"></script>
<script type="text/javascript" id="tinvwl-js-extra">
/* <![CDATA[ */
var tinvwl_add_to_wishlist = {"text_create":"Create New","text_already_in":"{product_name} already in Wishlist","simple_flow":"","hide_zero_counter":"","i18n_make_a_selection_text":"Please select some product options before adding this product to your wishlist.","tinvwl_break_submit":"No items or actions are selected.","tinvwl_clipboard":"Copied!","allow_parent_variable":"","block_ajax_wishlists_data":"","update_wishlists_data":"","hash_key":"ti_wishlist_data_6378ec71cbc18df811981916a262259e","nonce":"3b9b4661c9","rest_root":"https:\/\/aapoly.edu.ng\/wp-json\/","plugin_url":"https:\/\/aapoly.edu.ng\/wp-content\/plugins\/ti-woocommerce-wishlist\/"};
/* ]]> */
</script>
<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/public.min.js.download" id="tinvwl-js"></script>
<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/jquery-mousewheel.min.js.download" id="jquery-mousewheel-js"></script>
<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/custom-scrollbar.min.js.download" id="the7-custom-scrollbar-js"></script>
<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/webpack-pro.runtime.min.js.download" id="elementor-pro-webpack-runtime-js"></script>
<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/webpack.runtime.min.js.download" id="elementor-webpack-runtime-js"></script>
<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/frontend-modules.min.js.download" id="elementor-frontend-modules-js"></script>
<script type="text/javascript" id="elementor-pro-frontend-js-before">
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/aapoly.edu.ng\/wp-admin\/admin-ajax.php","nonce":"9aca50f754","urls":{"assets":"https:\/\/aapoly.edu.ng\/wp-content\/plugins\/elementor-pro\/assets\/"},"i18n":{"toc_no_headings_found":"No headings were found on this page."},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"google":{"title":"Google+","has_counter":true},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"menu_cart":{"cart_page_url":"https:\/\/aapoly.edu.ng","checkout_page_url":"https:\/\/aapoly.edu.ng"},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/aapoly.edu.ng\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
</script>
<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/frontend.min.js.download" id="elementor-pro-frontend-js"></script>
<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/waypoints.min.js.download" id="elementor-waypoints-js"></script>
<script type="text/javascript" id="elementor-frontend-js-before">
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.5.2","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"a11y_improvements":true,"e_import_export":true,"e_hidden_wordpress_widgets":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true,"form-submissions":true,"video-playlist":true},"urls":{"assets":"https:\/\/aapoly.edu.ng\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":23,"title":"Contact%20Us%20%E2%80%93%20Abraham%20Adesanya%20Polytechnic%2C%20Ijebu%20Igbo","excerpt":"","featuredImage":false}};
</script>
<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/frontend.min.js(1).download" id="elementor-frontend-js"></script><span id="elementor-device-mode" class="elementor-screen-only"></span>
<script type="text/javascript" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/elements-handlers.min.js.download" id="pro-elements-handlers-js"></script>
<script type="text/javascript">
window.addEventListener("load", function(event) {
jQuery(".cfx_form_main,.wpcf7-form,.wpforms-form,.gform_wrapper form").each(function(){
var form=jQuery(this); 
var screen_width=""; var screen_height="";
 if(screen_width == ""){
 if(screen){
   screen_width=screen.width;  
 }else{
     screen_width=jQuery(window).width();
 }    }  
  if(screen_height == ""){
 if(screen){
   screen_height=screen.height;  
 }else{
     screen_height=jQuery(window).height();
 }    }
form.append('<input type="hidden" name="vx_width" value="'+screen_width+'">');
form.append('<input type="hidden" name="vx_height" value="'+screen_height+'">');
form.append('<input type="hidden" name="vx_url" value="'+window.location.href+'">');  
}); 

});
</script> 

<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="pswp__bg"></div>
	<div class="pswp__scroll-wrap">
		<div class="pswp__container">
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
		</div>
		<div class="pswp__ui pswp__ui--hidden">
			<div class="pswp__top-bar">
				<div class="pswp__counter"></div>
				<button class="pswp__button pswp__button--close" title="Close (Esc)" aria-label="Close (Esc)"></button>
				<button class="pswp__button pswp__button--share" title="Share" aria-label="Share"></button>
				<button class="pswp__button pswp__button--fs" title="Toggle fullscreen" aria-label="Toggle fullscreen"></button>
				<button class="pswp__button pswp__button--zoom" title="Zoom in/out" aria-label="Zoom in/out"></button>
				<div class="pswp__preloader">
					<div class="pswp__preloader__icn">
						<div class="pswp__preloader__cut">
							<div class="pswp__preloader__donut"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
				<div class="pswp__share-tooltip"></div> 
			</div>
			<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)" aria-label="Previous (arrow left)">
			</button>
			<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)" aria-label="Next (arrow right)">
			</button>
			<div class="pswp__caption">
				<div class="pswp__caption__center"></div>
			</div>
		</div>
	</div>
</div>

<?php

include_once 'footer.php' ;
ob_end_flush(); // Flush the output from the buffer
?>
<div class=".mobile-sticky-sidebar-overlay"></div><div class="mobile-sticky-header-overlay"></div><div id="phantom" class="masthead classic-header justify bg-behind-menu logo-center full-height dividers surround shadow-mobile-header-decoration medium-mobile-menu-icon mobile-menu-icon-bg-on dt-parent-menu-clickable show-sub-menu-on-hover show-mobile-logo hide-phantom" ><div class="ph-wrap with-logo"><div class="logo-box"><a href="https://aapoly.edu.ng/"><img class=" preload-me" src="./Contact Us – Abraham Adesanya Polytechnic, Ijebu Igbo_files/aapol.png" srcset="https://aapoly.edu.ng/wp-content/uploads/2021/12/aapol.png 233w, https://aapoly.edu.ng/wp-content/uploads/2021/12/aapol.png 233w" width="233" height="37" sizes="233px" alt="Abraham Adesanya Polytechnic, Ijebu Igbo"> </a></div><div class="menu-box"><ul class="main-nav bg-outline-decoration hover-bg-decoration hover-line-decoration active-bg-decoration active-line-decoration" role="menubar"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1939 first" role="presentation"><a href="https://aapoly.edu.ng/" class=" mega-menu-img mega-menu-img-left" data-level="1" role="menuitem"><i class="fa-fw icomoon-the7-font-the7-home-021" style="margin: 0px 10px 0px 0px;"></i><span class="menu-item-text"><span class="menu-text">Home</span></span><span class="decoration-line"></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2024 has-children" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="1" role="menuitem"><span class="menu-item-text"><span class="menu-text">About Us</span></span><span class="decoration-line"></span></a><i class="next-level-button"></i><ul class="sub-nav level-arrows-on" role="menubar"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1962 first" role="presentation"><a href="https://aapoly.edu.ng/history" data-level="2" role="menuitem"><span class="menu-item-text"><span class="menu-text">History</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1969" role="presentation"><a href="https://aapoly.edu.ng/vision-and-mission" data-level="2" role="menuitem"><span class="menu-item-text"><span class="menu-text">Vision &amp; Mission</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1963 has-children" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="2" role="menuitem"><span class="menu-item-text"><span class="menu-text">Leadership</span></span></a><i class="next-level-button"></i><ul class="sub-nav level-arrows-on" role="menubar"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1964 first" role="presentation"><a href="https://aapoly.edu.ng/principal-officers" data-level="3" role="menuitem"><span class="menu-item-text"><span class="menu-text">Principal Officers</span></span></a></li> </ul></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1965" role="presentation"><a href="https://aapoly.edu.ng/welcome-statement" data-level="2" role="menuitem"><span class="menu-item-text"><span class="menu-text">Welcome Statement</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1968" role="presentation"><a href="https://aapoly.edu.ng/statutory-function" data-level="2" role="menuitem"><span class="menu-item-text"><span class="menu-text">Statutory Function</span></span></a></li> </ul></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1961 has-children" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="1" role="menuitem"><span class="menu-item-text"><span class="menu-text">Academics</span></span><span class="decoration-line"></span></a><i class="next-level-button"></i><ul class="sub-nav level-arrows-on" role="menubar"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1960 first has-children" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="2" role="menuitem"><span class="menu-item-text"><span class="menu-text">Programmes</span></span></a><i class="next-level-button"></i><ul class="sub-nav level-arrows-on" role="menubar"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1978 first" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="3" role="menuitem"><span class="menu-item-text"><span class="menu-text">Certificate and Remedial</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1979" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="3" role="menuitem"><span class="menu-item-text"><span class="menu-text">National Diploma (ND)</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1980" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="3" role="menuitem"><span class="menu-item-text"><span class="menu-text">Higher National Diploma (HND)</span></span></a></li> </ul></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1973" role="presentation"><a href="https://aapoly.edu.ng/entry-requirements" data-level="2" role="menuitem"><span class="menu-item-text"><span class="menu-text">Entry Requirements</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1971" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="2" role="menuitem"><span class="menu-item-text"><span class="menu-text">Library</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1974" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="2" role="menuitem"><span class="menu-item-text"><span class="menu-text">Research and Publications</span></span></a></li> </ul></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1970 has-children" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="1" role="menuitem"><span class="menu-item-text"><span class="menu-text">Schools</span></span><span class="decoration-line"></span></a><i class="next-level-button"></i><ul class="sub-nav level-arrows-on" role="menubar"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2104 first" role="presentation"><a href="https://aapoly.edu.ng/school-of-science" data-level="2" role="menuitem"><span class="menu-item-text"><span class="menu-text">School of Science</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2106" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="2" role="menuitem"><span class="menu-item-text"><span class="menu-text">School of Engineering Technology</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2107" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="2" role="menuitem"><span class="menu-item-text"><span class="menu-text">School of Management &amp; Business Studies</span></span></a></li> </ul></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1957 has-children" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="1" role="menuitem"><span class="menu-item-text"><span class="menu-text">TETFund Interventions</span></span><span class="decoration-line"></span></a><i class="next-level-button"></i><ul class="sub-nav level-arrows-on" role="menubar"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2048 first" role="presentation"><a href="http://tetfund.gov.ng/" data-level="2" role="menuitem"><span class="menu-item-text"><span class="menu-text">TETFund</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2049 has-children" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="2" role="menuitem"><span class="menu-item-text"><span class="menu-text">Special Intervention</span></span></a><i class="next-level-button"></i><ul class="sub-nav level-arrows-on" role="menubar"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2050 first" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="3" role="menuitem"><span class="menu-item-text"><span class="menu-text">High Impact Intervention</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2052" role="presentation"><a href="https://aapoly.edu.ng/zonal-intervention" data-level="3" role="menuitem"><span class="menu-item-text"><span class="menu-text">Zonal Intervention</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2053" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="3" role="menuitem"><span class="menu-item-text"><span class="menu-text">Disaster Recovery</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2054" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="3" role="menuitem"><span class="menu-item-text"><span class="menu-text">National Reseach Fund</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2055" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="3" role="menuitem"><span class="menu-item-text"><span class="menu-text">Institution-Based Research</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2056" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="3" role="menuitem"><span class="menu-item-text"><span class="menu-text">ICT Support</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2058" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="3" role="menuitem"><span class="menu-item-text"><span class="menu-text">Academic Research Journal</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2059" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="3" role="menuitem"><span class="menu-item-text"><span class="menu-text">Entrepreneurship</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2060" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="3" role="menuitem"><span class="menu-item-text"><span class="menu-text">Academic Manuscript Development</span></span></a></li> </ul></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2061 has-children" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="2" role="menuitem"><span class="menu-item-text"><span class="menu-text">Annual Intervention</span></span></a><i class="next-level-button"></i><ul class="sub-nav level-arrows-on" role="menubar"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2062 first" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="3" role="menuitem"><span class="menu-item-text"><span class="menu-text">Physical Infrastructure/Program Upgrade</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2063" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="3" role="menuitem"><span class="menu-item-text"><span class="menu-text">Academic Staff Training &amp; Development</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2067" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="3" role="menuitem"><span class="menu-item-text"><span class="menu-text">Library Development</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2068" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="3" role="menuitem"><span class="menu-item-text"><span class="menu-text">Conference Attendance</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2069" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="3" role="menuitem"><span class="menu-item-text"><span class="menu-text">Teaching Practice</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2070" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="3" role="menuitem"><span class="menu-item-text"><span class="menu-text">TETFund Project Maintenance</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2071" role="presentation"><a href="https://aapoly.edu.ng/contact/#" data-level="3" role="menuitem"><span class="menu-item-text"><span class="menu-text">Equipment Fabrication</span></span></a></li> </ul></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2072" role="presentation"><a href="https://education.gov.ng/" data-level="2" role="menuitem"><span class="menu-item-text"><span class="menu-text">Ministry of Education</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2073" role="presentation"><a href="https://net.nbte.gov.ng/" data-level="2" role="menuitem"><span class="menu-item-text"><span class="menu-text">National Board for Technical Education (NBTE)</span></span></a></li> </ul></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2118" role="presentation"><a href="https://aapoly.edu.ng/news/" data-level="1" role="menuitem"><span class="menu-item-text"><span class="menu-text">News</span></span><span class="decoration-line"></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1959" role="presentation"><a href="http://my.aapoly.edu.ng/" data-level="1" role="menuitem"><span class="menu-item-text"><span class="menu-text">Portal</span></span><span class="decoration-line"></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-2119 act" role="presentation"><a href="https://aapoly.edu.ng/contact/" data-level="1" role="menuitem"><span class="menu-item-text"><span class="menu-text">Contact</span></span><span class="decoration-line"></span></a></li> </ul></div><div class="widget-box"></div></div></div><div class="iso-preloader dt-posts-preload dt-posts-preload-active" style="display: none;"><div class="dt-posts-preload-activity"></div></div></body></html>