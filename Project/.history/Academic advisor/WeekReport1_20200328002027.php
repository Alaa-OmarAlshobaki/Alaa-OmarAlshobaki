<!DOCTYPE html>
<?php include "header.php"; ?>
<style>
    .pad {
        font-family:sans-serif;
        margin-left:400px;
    }
    .b{
        border-style: inset;
        border-width: 4px;
        border-color: darckgray;
    }
    .b1
    {
        border-style:solid;
        border-width:1px;
        width:200;
        border-radius: 3px;	
        border-color:white;
        font-size:110%;
        border-bottom-color: black
    }
    .hh
    {
        font-size:130%;
    }
    .aa
    {
        border-style:solid;
        border-width:2px;
        border-radius:7px;
        padding-left:40px;
        margin-right:206px
    }
</style>
<body>
<?php
 if (isset($_GET["increment"])) {
        $con = new mysqli("localhost", "root", "", "traino");
        $st = $con->prepare("select*from weekly_report where trainee_Name=?");
        $st->bind_param("s", $_POST["trainee_Name"]);
        $st->execute();
        $rs = $st->get_result();
        while ($row = $rs->fetch_assoc()) {
            ?>
            <form method="POST"id="Weeklyreport">
                <section class="pad aa">
                    <img src="../img/ttt.png" alt="my form" text-align="Center"/>
                    <div style="width:728px">
                        <p class="b hh">  Weekly Report</p>
                    </div>
                    <div action="/action_page.php" style="width:600px" >
                        <label class="hh"for="Week no.">Week no:</label>
                        <input type="text" class="b1" name="Week_number" value="<?php echo $row['Week_number'] ?>"/><br><br>
                        <label class="hh" for="Date" >Date :</label>
                        <input class="b1 hh" type="date"name="date"value="<?php echo $row['date'] ?>"/><br><br>
                        <label class="hh" for="Trainee name" >Trainee Name :</label>
                        <input class="b1" type="text"name="trainee_Name"value="<?php echo $row['trainee_Name'] ?>"/><br><br><br>
                        <label for="Description" class="hh">Description of Tasks/Assignments :</label> 
                        <br><br>
                    </div>
                    <div action="/action_page.php" style="width:728px">
                        <textarea class="b1" rows="17" cols="89"name="description"  ><?php echo $row['description'] ?></textarea><br><br>
                    </div>
                    <div action="/action_page.php" style="width:728px">
                        <label for="Training Supervisor Remarks" class="hh" >Training Supervisor Remarks : </label>  <br><br>
                        <textarea class="b1" rows="9" cols="89" name="info" ><?php echo $row['info'] ?></textarea>
                    </div><br><br>
                    <div action="/action_page.php" style="width:600px">
                        <label class="hh" for="Training Supervisor">Training Supervisor Name :</label>
                        <input class="b1" type="text" name="Supervisor_Name"value="<?php echo $row['Supervisor_Name'] ?>"/><br><br>
                        <br><br>
                    </div>
                </section>
            </form>
            <?php
        }
    }
    
    ?>
    <form style="align-content: center">
        <div class="rhead-container" > 
            <input type="button" onclick="myPrint('Weeklyreport')" value="print">
        </div>
    </form>
    <script>
        function myPrint(Weeklyreport) {
            var printdata = document.getElementById(Weeklyreport);
            newwin = window.open("");
            newwin.document.write(printdata.outerHTML);
            newwin.print();
            newwin.close();
        }
    </script>
</body>