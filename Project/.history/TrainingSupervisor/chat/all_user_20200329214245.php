<?php
date_default_timezone_set('Asia/Kolkata');
include 'class/user.php';
session_start();
if(!isset($_SESSION['phone'],$_SESSION['email']))
{
 header('location:login.php');
}
$user_id=$_SESSION['phone'];


$db = new config();
$pdo = $db->db();

$user = new user();

$sql = "SELECT * FROM student WHERE phone=:user_id";
$query= $user->runQuery($sql);
$query->bindParam(':user_id',$user_id,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

?>

	<div class="details">
		<table class="table table-bordered table-striped">
			

  			<tr>
  				<td>student</td>
  				<td>Status</td>
  				<td>Active</td>
  			</tr>
<?php	foreach ($results as $row) {  
				$status = '';
				$current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
				$current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
				// $user_last_activity = $user->fetch_last_activity($row->$_SESSION['id_student']);
				// if($user_last_activity > $current_timestamp)
				// {
				//   $status = '<span class="label label-success">Online</span>';
				// }
				// else
				// {
				  $status = '<span class="label label-danger">Offline</span>';
				// } 
?>
			<tr>
				<td>
					<?php echo $row->name ; ?>
					<?php echo $user->count_unseen_message($row->id_student,$user_id) ; ?>
					<?php echo $user->fetch_is_type_status($row->id_student) ; ?>
				</td>
				<td>
					<?php echo $status ; ?>
				</td>
				<td>
					<button type="button" class="btn btn-info btn-xs start_chat" data-touserid="<?php echo $row->id_student ;?>" data-tousername="<?php echo $row->name ;?>">Start Chat</button>
				</td>
			</tr>
<?php 	} 	?>			
		</table>
	</div>
<?php

$sq2 = "SELECT trainingadvisor.name ,student.id_academicadvisor FROM student
        INNER JOIN trainingadvisor
		ON student.id_academicadvisor=trainingadvisor.phone
        WHERE id_academicadvisor=:user_id";
$query= $user->runQuery($sq2);
$query->bindParam(':user_id',$user_id,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

?>

	<div class="details">
		<table class="table table-bordered table-striped">
			

  			<tr>
  				<td>training</td>
  				<td>Status</td>
  				<td>Active</td>
  			</tr>
<?php	foreach ($results as $row) {  
				$status = '';
				$current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
				$current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
				// $user_last_activity = $user->fetch_last_activity($row->$_SESSION['id_student']);
				// if($user_last_activity > $current_timestamp)
				// {
				//   $status = '<span class="label label-success">Online</span>';
				// }
				// else
				// {
				  $status = '<span class="label label-danger">Offline</span>';
				// } 
?>
			<tr>
				<td>
					<?php echo $row->name ; ?>
					<?php echo $user->count_unseen_message($row->id_trainingadvisor,$user_id) ; ?>
					<?php echo $user->fetch_is_type_status($row->id_trainingadvisor) ; ?>
				</td>
				<td>
					<?php echo $status ; ?>
				</td>
				<td>
					<button type="button" class="btn btn-info btn-xs start_chat" data-touserid="<?php echo $row->id_trainingadvisor ;?>" data-tousername="<?php echo $row->name ;?>">Start Chat</button>
				</td>
			</tr>
<?php 	} 	?>			
		</table>
	</div>