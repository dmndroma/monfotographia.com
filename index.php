<?php
	

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="indx.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<title>Index</title>
	</head>

		<style>
			* {box-sizing: border-box;}
			body
			{
			 background-color: black;
			}
			.mySlides {display: none;}
			img {vertical-align: middle;}

			/* Slideshow container */
			.slideshow-container {
   			position: relative;
  			margin: auto;
			}

			/* The dots/bullets/indicators */
			.dot {
 			height: 15px;
 	 		width: 15px;
  			margin: 0 2px;
  			background-color: #bbb;
  			border-radius: 50%;
  			display: inline-block;
  			transition: background-color 0.6s ease;
			}

			.active {
  			background-color: #717171;
			}

			/* Fading animation */
			.fade {
  			-webkit-animation-name: fade;
  			-webkit-animation-duration: 1.5s;
  			animation-name: fade;
  			animation-duration: 1.5s;
			}

			@-webkit-keyframes fade {
  			from {opacity: .4} 
  			to {opacity: 1}
			}

			@keyframes fade {
  			from {opacity: .4} 
  			to {opacity: 1}
			}

			/* On smaller screens, decrease text size */
			@media only screen and (max-width: 300px) {
  			.text {font-size: 11px}
			}

			.har
			{
				font-family: harrington;
				font-size: 50px;
				color: white;
			}

			.btn2 
			{
				width: 20%;
				border: 2px solid black;
				color: black;
				padding: 5px;
				font-size: 18px;
				cursor: pointer;
				margin: 12px 0;
			}

			.gallery 
			{
  				margin: 45px;
  				border: 1px solid #ccc;
  				float: left;
  				width: 350px;
  				display: block;
			}

			.gallery:hover 
			{
  				border: 1px solid #777;
			}

			.gallery img 
			{
  				width: 100%;
  				height: auto;
			}
		</style>
	</head>

	<body>
		<nav class="navbar navbar-inverse">
  			<div class="container-fluid">
    			<div class="navbar-header">
      				<a class="navbar-brand" href="#">Welcome to Fotographia</a>
    			</div>


    			<a href="signup.php">
					<input class="btn btn-danger navbar-btn" type="button" name="" value="Sign up" style="float: right;">
				</a>

    			<a href="login.php">
					<input class="btn btn-danger navbar-btn" type="button" name="" value="Log in" style="float: right;">
				</a>
  			</div>
		</nav>

		<div>
			<h2 style="text-align: center; color: white;"><span class="har">W</span>elcome to Fotografia!</h2>
		</div>


		<div class="slideshow-container">

			<div class="mySlides fade">
  				<img src="https://lh3.googleusercontent.com/6g8adT19CQGLFMHKH9Te0bSu0LtkoHwpWQZW14vD38cZ8MdhhBvBBsVfyNcEbs4A7kcTaHZUVsNq9jH8huLiPbucogzuwdkZ3NzXCZEgwoDG2L1LIHGXPVKGzEjqLYv_DophyKEn1bAVRoIAAJecXsTGaeIaykccoGxZNddbywFBUH5QpFzXZGywUJeazjtTvvjEagkpAUHYXiDQwvrwXBYLchU8Qa02nJkwbT0v4MgD6G_EG9RM5m3w08BIPz-IQWm1GXsyxoLXRixDzC3iLvWygWlAYK_A5_gljOJxJ8JYzVAtUIVuMLil-fk3Qmgu9Geosod7vho0rXU6Wig-JKis9BLgnatLmpLNaeTWVaKDcD8zxSrXcXIvdGiFyG7n_hOJSA5vtnUNwEI0TpEgqXPdeaG2hAqeph3R3BGrwJROa2RnY8FbGWPXZGH0g-nEZTr6-eDE4g0XuPCboGygTowdyG76d-1j1FOGpzO1vYKP37Sk6Pt4mZDd2gPQDx4pZ_O_dU_UoT3RchTj6nRZM7Vb6sRB8UjyL_ST-4wz8E3dETsbFXEZIbH61lg1RRZlcCdpjNBmWehiodVKTNnARRBDmtuXrttcgNVc-HD5mlWq00eyYZ6zxDtdt1hay0TlFm3PjsXK--juw6cYqLygrmhcMH0Wv8IPwrtpKtGTDxLa0g6xf7DnqRqBnTZh8IifTqn3Q3gtA_oIVBpSEw5tnig=w1080-h607-no?authuser=0" style="width:100%; height: 500px">
			</div>

			<div class="mySlides fade">
   				<img src="https://lh3.googleusercontent.com/xP_iiyYokG-rqYAZ69LqwLvaJrerVyb9H_X0pPxopqlKYsulA15LRynX49IHULJXzXui9IJAMicmxYmQXwtNaGJGn9jPh9U_MPCeqpowxkN0EYkbbJDIBU_JJ7a2ulU1uKyBHQfHrNvRr9tGG8iOcR9kg7lFDv0d0VHfDcE_O6NbqWfte-GZiqjdPM_aElJfwr0pDHXQdJosDnQvaZ_eIsjIKz4JnsFxhEaM5z_s7dtESGC6NUXKAOOp2MToEPG97soOxBSWz_OAtlVqJETuu1kcGda6giE7OINYFh9ChlHEd2c75KqO3WFNqq_cj0C5b8CdTaf39XZQDLZ25tG2tNnQYlmoZ3phAkQqvwuvcoEkPsp-EnVY5hmYyRUci4P2Zx7u3s1BIhVM3JJfMjfQNWZLTR3xu46S5qloTIYVf1dR6Tu73XJK2MlzT2v_a1aMZcWKzbhapFbRWwjap5HIAbx9k-z2UlOlMocADlFsK7PkN-NTH_65ShL0X9981uPNokxHWalQnL5ILZF54OkQREY93Sa0qCyytJ_PTnEMnXsiMCJ8nB0olv2zDXPfZJgidBpo_tlWHwtu0U8IgJ3JKC8T-3mmswGS0kNGQkOSfAcKorVe925uSAKP6HnsgAyh9W30sHRUpvHvSa6r_pfemkVuKyb833KZ8vPSG2nmLPsKjbDTAsHeG4OZcoR8zt4IMHxiawLYfp9LFK0mx6a1gXo=w1080-h680-no?authuser=0" style="width:100%; height: 500px">
			</div>

			<div class="mySlides fade">
  				<img src="https://lh3.googleusercontent.com/MEvJbeXsR0f-uqRsQpB1MLsQVWzaTCKQ_3V0228tkZaOy9Jpj6pirXDW_-GaJcBH9l94Ox1MMU7X8YKu9XAkMMox2TKEwsHTYq4g4AeekfRBIZ2BN_RY7vVo9g0uT2IBh7sp6jvMOzTQLdEUAcaODKEpTvkawfgaduSxXwy8-6aAfOwRYv-t0rpd3lk4A9TS2DEZWVUQXKqxp0D9bTTFgfMTbqm0zxi0yvveLhPUzSjCEPfqefy0lOFCaLJGim5n6folP6cYScsnPIQ4C1FETWqX3h8Awy_w8vJv3f9CNNnH8em4tIgCYJGRaCSjfyfi5Il_U0GMiIMYMG0BmkuvXK0kH1lGv6PpAABvsh5u-BXhVSapInDC6Jv1McYz7DbyMOU-f7A53-Jn_mAA7ilfJbXh0nXS6mH7jGgdvv5eXgw_oELYnAYi0uOWn8ehcLKs6ZjV_b3WsqtN_U2faxDOVcfayCpgieXw_QD0DJ4uvEqiinouX3JeyjyWR2tF3s2n1aW42kmn2-7-N5AdIdtmIGdVEcAW_RATiUwXjXUY7WXVbhAkAAar5SAa2hRD9Sf-vrD8QBypD_3snEXzvvvQcmO8GiFLdhJWsRwaVWoz9BwxYyrAHhLI7_5I-W_yvJwD-A-F42w7fp6bKS77KMG_fvGDe4NrB0TUms2UI3Obsfzp4LmfN91TfAboyXuu7Ztq06yp2hBM3b2NbGsEqLZ2Lp8=w1080-h614-no?authuser=0" style="width:100%; height: 500px">
			</div>
		</div>
		<br>
		<div style="text-align:center">
  			<span class="dot"></span> 
  			<span class="dot"></span> 
  			<span class="dot"></span> 
		</div>

		<container>
			<div class="gallery">
  				<a target="_blank" href="#">
    				<img src="https://lh3.googleusercontent.com/y1Fp0nzW7eD_mikC-ldFb7MJJI2bQO3V4_25UcvwWenY3OkoYI7yShfBqWShidhMDy3WP8nSR8vF8_KFvVIu6f1J3whX5QnGuVV-JQy_bv7G3WVkbcZInokq82Z1B5QbBDlYbHrTBQqLpDkb5F4hDY5O1enwLCfm8vmUX47zrff43qcp5CrKPFET6AWNwBWdidaq-hpys8aLg2Us7GqHITbrb4VIYfB8Ram-AI6qCAYTo43HxCiNIi6GYIvgAuKbMXgTfgbD4OXGhjNtInUnrpTiY2a3OlJT8HIgN59_PEurpPsjJLfRLFn7h2GJzJtifh9bnByPObKW7eWOFQDj-7PIiZx_mdQ5KmequBtng8Sz_joaH5ho8EqE1M0dmeSNBB4lqT4hnY5k6FphUMEPxYA68zyNy5vBOZJBk9wlCY1xT_voKwqEUzC-PPRT7CcJEXP7MfBNMZHQERI91saWmEIKSJnssg5OVCRtfNwqgERiWLMFhQayL6Fut_qe9Pz7b6eBV6h7UiwDh-JjOuezx3vWcHfoLUqCnkhc-fu4MjU7QBOmJB7NTlRchStezDPRl7zgTPw122NORoWqr9kjFs7U5lY98UsNqR_HUHM26MR9eSriCU5EzunT9v5-M2lKYrPSDXFIoFwszeAd6g99n944JpOYeMzIBxi1ZE2DhKPW-JoVfiREhZR_1Fo9Rt-spCYZkx_SA-ZCbEPCzu7q0Yw=s696-no?authuser=0" alt="Cinque Terre">
  				</a>
			</div>

			<div class="gallery">
 	 			<a target="_blank" href="#">
    				<img src="https://lh3.googleusercontent.com/YEY6vAluglsFm49LA-Wy1jbRyEWa0Dt_wUtVvKrlm47wf4cXQqv0pG9VCt72ItK_gN2P33vFwZpFlV4AUwZQAuSLOTdlq6vZGsxe560PS2dIpOtxzWg8yaehUqRamadZUJ_3bruHzzhYE--KbPrDCwlCSpkbwrpot3bBeqzqJl10hLrqGOm2p9Inl7Iqw_7AXvkwUVNufB87QU3sX6NvOR0qDoCUQrv2m6dxGFMb1uWpEEYdy8J9c6QK61qj2AbPAc9bLIGKrI-EeXA76RHLvGLBHMU3M-XyboFBwDnIMu-YSEwiUT24k7iqF5BthRCy_IyUPiXyORtukNfUOmNQoPVVtWsLGK61p3jlXV7N7zz7uT6yGj2eXWXnk0lD5CspRiaiVQf90r92YeJNdIANE8psGTvUMUa2FdUwipr2mXt8zl4zSjCT1D7vUt7vuvX7ml9aUzDvul07jbLsYR0S53oS7HDN4z7AySXH-1Wh2YKNMlrKBHacmDovRJ0AJNysBUX9gfhLQ0q5RmaT-2ty0-_OXnKMPhltjhJ_D3_VK4RkFCWi5f4watf6JaJ_s-JkKkFTaMA_8S8HbBYQDWXtklgH21mtNYhQinqGg_aU6bpLVK5Xe92ePo_UBJJvpRWGrHcGx6EzCoVPL2Gj8XCBefbbYtdOSW17P10S3Tx4jokJim01BlVUzdqxwB8db3ldOZu2QMghcUZRFo11EmnW8UQ=s696-no?authuser=0" alt="Forest" width="00" height="400">
  				</a>
			</div>

			<div class="gallery">
  				<a target="_blank" href="#">
  					<img src="https://lh3.googleusercontent.com/ZO_U8-p_3P8nRoc2tewXMtS-M3j5ZKtQwH5ObbCY-4vxcceTVL791X8iBcb64j5GI5hw5DWTYEux8TraRJIkwxKaKG82dCsyybxRrYtjcZXOwg7IcbZ0pseU9q9dY-edQfdTJDQ_RSqT5eNco95uPA86-qJY--WIVmjPjY87Do6R5rAE_kbRfjk2JUoRiXaLF6Q2ZKmRh6QKiC1Li7CUIJli7meS6D_5GXZRMmm7JHGxci3lcaOHdFWRV1L6dSBeaK0-dUAQr1NRZdMQhTr2nNkmAdDu-DXdJxwUs-Rrpo-6FswYCYU8o5qDCVGLjlEAP3xPIrvinIzalZ0WC792zX_NZmxm04Ty_5WNYF1rnSK8ga8YOfIey4nxZ0lY1xlNC70qFSh9LzWsF6pgqWv-lokZx6cbHP1zVXj1wkQogHp0_V_Ned1mGjwT3xWw2riRP5gNcHv814HDBuc2J2ItfhcguJsjPy58-GZpaq-l0Zm_-T9QRoW9hakjeqQ5PznCl0xf2Ap15QVTPMwvTM0fAqpNMkrgHpUAARmWrNIDrQG_uHE6gXh6-VH_D3yLSDfEFzivtCOAQ8rXWt_e1qwfegL0X5276HKVTqjomYGTwInYNh7Rk9Uf_Vflkxg-gl5dwKiv3RGuhTf2aU4uwDhraUdQExyJhYYKvZ1n8Sv0nZ-jJWHjC4hHBN4b6vj8LzRmf9OW1k6xKs4JL70CWj55uAw=s696-no?authuser=0" alt="Northern Lights" width="600" height="400">
  				</a>
			</div>

			<div class="gallery">
  				<a target="_blank" href="#">
    				<img src="uno.jpg" alt="Cinque Terre">
  				</a>
			</div>

			<div class="gallery">
 	 			<a target="_blank" href="dos.jpg">
    				<img src="dos.jpg" alt="Forest" width="00" height="400">
  				</a>
			</div>

			<div class="gallery">
  				<a target="_blank" href="tres.jpg">
    				<img src="tres.jpg" alt="Northern Lights" width="600" height="400">
  				</a>
			</div>

			<div class="gallery">
  				<a target="_blank" href="reina.jpg">
    				<img src="reina.jpg" alt="Cinque Terre">
  				</a>
			</div>

			<div class="gallery">
 	 			<a target="_blank" href="#">
    				<img src="jake.jpg" alt="Forest" width="00" height="400">
  				</a>
			</div>

			<div class="gallery">
  				<a target="_blank" href="#">
    				<img src="honey.jpg" alt="Northern Lights" width="600" height="400">
  				</a>
			</div>
		</container>
		<h2 style="text-align: center; font-family: Century Gothic; font-size: 23px; color: white;">Please Log In/Sign Up for more and for other transaction. Thank you.</h2>


		<script>
			var slideIndex = 0;
			showSlides();

			function showSlides() {
			var i;
  			var slides = document.getElementsByClassName("mySlides");
  			var dots = document.getElementsByClassName("dot");
  			for (i = 0; i < slides.length; i++) {
    		slides[i].style.display = "none";  
  			}
  			slideIndex++;
  			if (slideIndex > slides.length) {slideIndex = 1}    
  			for (i = 0; i < dots.length; i++) {
    		dots[i].className = dots[i].className.replace(" active", "");
  			}
  			slides[slideIndex-1].style.display = "block";  
  			dots[slideIndex-1].className += " active";
  			setTimeout(showSlides, 2000); // Change image every 2 seconds
			}
		</script>
	</body>
</html> 