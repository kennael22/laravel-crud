
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from appstack.bootlab.io/pages-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Nov 2019 14:04:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Sign In - AppStack - Admin &amp; Dashboard Template</title>

	<link rel="preconnect" href="http://fonts.gstatic.com/" crossorigin>

	<!-- PICK ONE OF THE STYLES BELOW -->
	<link href="/css/classic.css" rel="stylesheet">
	<!-- <link href="/css/corporate.css" rel="stylesheet"> -->
	<!-- <link href="css/modern.css" rel="stylesheet"> -->

	<!-- BEGIN SETTINGS -->
	<!-- You can remove this after picking a style -->
	<style>
		body {
			opacity: 0;
		}
	</style>
	<!-- <script src="js/settings.js"></script> -->
	<!-- END SETTINGS -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120946860-6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120946860-6');
</script></head>

<body>
	<main class="main d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row h-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Welcome back, Chris</h1>
							<p class="lead">
								Sign in to your account to continue
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<img src="/img/avatars/avatar.jpg" alt="Chris Wood" class="img-fluid rounded-circle" width="132" height="132" />
									</div>
									<form method="POST" id="frmlogin">
										<div class="form-group">
											<label>Email</label>
											<input class="form-control form-control-lg" type="text" name="email" id="email" placeholder="Enter your email" />
											<label id="validation-email-error" class="error jquery-validation-error small form-text invalid-feedback" for="dob"></label>
										</div>
										<div class="form-group">
											<label>Username</label>
											<input class="form-control form-control-lg" type="text" name="username" id="username" placeholder="Enter your username" />
											<label id="validation-username-error" class="error jquery-validation-error small form-text invalid-feedback" for="dob"></label>
											<!-- <small>
            <a href="pages-reset-password.html">Forgot password?</a>
          </small> -->
										</div>
										<div>
											<!-- <div class="custom-control custom-checkbox align-items-center">
												<input type="checkbox" class="custom-control-input" value="remember-me" name="remember-me" checked>
												<label class="custom-control-label text-small">Remember me next time</label>
											</div> -->
										</div>
										<div  id="main_msg" role="alert">
											
											<div id="message">
														<span   id="success_msg"></span>
									
											</div>
										</div>

										<div class="text-center mt-3">

											<!-- <a href="dashboard-default.html" class="btn btn-lg btn-primary">Sign in</a> -->
											<button type="submit" class="btn btn-lg btn-primary">Sign in</button>
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="/js/app.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			function clearmessage(){
				$('#username').removeClass('is-invalid');
				$('#validation-username-error').text('');
				$('#email').removeClass('is-invalid');
				$('#validation-email-error').text('');
					    	
			}
			$('#frmlogin').on('submit',function(e){
				e.preventDefault();
				$.ajax({
					    url: "<?php echo base_url("pages/validatelogin");?>",
					    method:"post",
					    type:'ajax',
					    data:{email:$('#email').val(),username:$('#username').val()},
					    dataType:'json',
					    success:function(data){
					    	if(data.success){
								window.location.href="http://ci4blog.test/pages/"+data.success;
								clearmessage();
					    	}
					    	if(data.error){
					    	$('#main_msg').addClass("alert alert-danger alert-dismissible");
			    			$('#message').addClass('alert-message');
			    			setTimeout(function(){$('#main_msg').removeClass('alert alert-success alert-dismissible');
	                        $('#success_msg').html("");$('#message').removeClass('alert-message');
	                        },5000);	
					    	$('#success_msg').text(data.error);
					    	clearmessage();
					    	}
					    	if(data.errors.email){
			    				$('#email').addClass('is-invalid');
			    				$('#validation-email-error').text(data.errors.email);
			    				// console.log(data.errors.name)
			    			}else{
			    				$('#email').removeClass('is-invalid');
			    				$('#validation-email-error').text('');
			    				
			    			}
			    			if(data.errors.username){
			    				$('#username').addClass('is-invalid');
			    				$('#validation-username-error').text(data.errors.username);
			    				// console.log(data.errors.name)
			    			}else{
			    				$('#username').removeClass('is-invalid');
			    				$('#validation-username-error').text('');
			    			}
					    }
					});
			});
		})
	</script>
</body>

<!-- Mirrored from appstack.bootlab.io/pages-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Nov 2019 14:04:46 GMT -->
</html>