<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


require 'init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
	

    if (isset($_POST['login_as_admin'])) {
        // Login as admin
        $query = $db->prepare("SELECT * FROM auth WHERE username = :username AND password = :password");
        $query->bindParam(':username', $username, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);
        $query->execute();

        if ($query->rowCount() > 0) {
			$result = $query->fetch(PDO::FETCH_ASSOC);
            $_SESSION['admin_id'] = $result['id'];
            $_SESSION['admin_username'] = $result['username'];
            // Successful login as admin
            echo 'true';
            exit();
        } else {
            // Invalid credentials for admin
            echo 'false';
            exit();
        }
    } elseif (isset($_POST['login_as_lecturer'])) {
        // Login as lecturer
        $query = $db->prepare("SELECT * FROM lecturer WHERE username = :username AND password = :password");
        $query->bindParam(':username', $username, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);
        $query->execute();

        if ($query->rowCount() > 0) {
			$result = $query->fetch(PDO::FETCH_ASSOC);
            $_SESSION['lecturer_id'] = $result['id'];
            $_SESSION['lecturer_username'] = $result['username'];
			$_SESSION['lecturer_name'] = $result['name'];
            // Successful login as lecturer
            echo 'true';
            exit();
        } else {
            // Invalid credentials for lecturer
            echo 'false';
            exit();
        }
    }
}
?>




<?php
    // require 'init.php';
	// $username = $_POST['username'];
	// $password = $_POST['password'];

	// $query = $db->query("SELECT * from auth WHERE username = '$username' AND password = '$password' ");

	// if($query->rowCount() > 0){
	// 	$result = $query->fetchAll(PDO::FETCH_OBJ);
	// 	foreach($result as $data){
    //        $id = $data->id;
    //        $user = $data->username;

    //        $_SESSION['id'] = $id;
    //        $_SESSION['user'] = $user;
           
	// 	}
    //     echo 'true';
	// }else{
    //     echo 'false';
	// }
