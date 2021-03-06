<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/social_media/includes/init.php');
include_once(USER_SERVER.'main_server.php');
$company=$katha->get_data(array('website_logo','website_name'),'website_data');
$website_name=$company['website_name'];
$website_logo=$company['website_logo']; 
include_once(USER_INCLUDES.'new_message.php');
include_once(USER_INCLUDES.'minimal_header.php');
if (isset($_GET['token'])) {$_SESSION['token'] = $_GET['token'];} 
?>
<link rel="stylesheet" href="<?= CSS_URL?>outside_login.css">
<title><?= $website_name; ?></title>
</head>
<body>
<?php include_once(INCLUDES.'main_menu_top.php')?>
  <div class="container">
    <div class="header">  	
      <h2>RESET PASSWORD</h2>
  </div>
	<form class="login-form" action="<?= BASE_URL?>new_password.php" method="post">	
	<?php displaymessage();?>
		<h2 class="form-title">New password</h2>
		<!-- form validation messages -->
		<div class="form-input-group">
			<label>New password</label>
			<input type="password" name="new_pass" id="newpass"class="form-control" required data-parsley-minlength="5" data-parsley-trigger="on change">
			
		</div>
		<div class="form-input-group">
			<label>Confirm new password</label>
			<input type="password" name="new_pass_c" class="form-control" required data-parsley-equalto="#newpass" data-parsley-minlength="5" data-parsley-trigger="on change">
		</div>
		<div class="form-input-group">		
			<button type="submit" name="new_password" class="btn btn-primary">Submit</button>
		</div>
	</form>
	</div>
</body>
</html>

<script>
$('document').ready(function(){
  
  $('.user_form').parsley();
});
  </script>