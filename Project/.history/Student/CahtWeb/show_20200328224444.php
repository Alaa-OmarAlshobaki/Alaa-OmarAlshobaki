<?php

$con = new mysqli("localhost", "root", "", "traino");
$st = $con->prepare("select * from chat order by id desc");
$st->execute();
$rs = $st->get_result();

while ($row = $rs->fetch_assoc()) {
    echo '<b>' . $row["name"] . ':</b>';
    echo$row["msg"] . ':</br>';
    echo '.<textarea class="form-control z-depth-1" id="msg" rows="3" placeholder="Replay..."></textarea>.';

    echo $row["replay"] . ':</br>';
    echo '<i>' . $row["msg_tim"] . ':</i><br/><hr/>';
}
?>
