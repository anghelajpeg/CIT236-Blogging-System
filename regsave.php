<?php
require ("db_con.php");
$sqlstr = "INSERT INTO user ( username, password,email,user_status,role) VALUES
(:username, :password, :email,'active', 'user')";
$saveUser = $conn->prepare($sqlstr);
$saveUser->bindparam(':username', $_POST['username']);
$saveUser->bindparam(':password', $_POST['password']);
$saveUser->bindparam(':email', $_POST['email']);
$saveUser->execute();

echo "
			<script>
				alert ('Welcom User');
			</script> ";
			header('Location: blogger_home.php');
?>