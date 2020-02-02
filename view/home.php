<?php
require_once "../model/user.php";
require_once "../controller/usercontroller.php";
if (isset($_SESSION['isLogin'])) {
	if ($_SESSION['isLogin']==true) {
		$fullname = $_SESSION['fullname'];
	}
}
 ?>
 <body>
 	<?php if ($user==null) { ?>
 		<button>Login</button>
 	<?php } else { ?>
 		<h1>Hello <?php echo $user->name ?></h1>
 	<?php } ?>
 </body>