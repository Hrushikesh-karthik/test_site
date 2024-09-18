<?php
$servername = "localhost";
$username = "root";
$password = "KARTHIK@2004";
$database = "sairam";
$conn = mysqli_connect($servername, $username, $password, $database);

$name = "";
$rbc = "";
$bp = "";
$sight = "";
$thyroid = "";
$wbc = "";
$test = "";
$phone = "";

$gender = "";
$age= "";
$haemo = "";
$t3= "";
$t4 = "";
$sight2 = "";
$weight= "";
$gynae = "";
$medicine= "";
$date="";

$errorMessage = "";
$successmsg = "";

try {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (!isset($_GET["id"])) {
            header("location: /mediadmin.php");
            exit;
        }

        $id = $_GET["id"];
        $sql = "SELECT * FROM medical WHERE id=?";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            throw new Exception("Error preparing statement: " . $conn->error);
        }

        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();

        if (!$result) {
            throw new Exception("Error executing query: " . $conn->error);
        }

        $row = $result->fetch_assoc();

        if (!$row) {
            header("location:/mediadmin.php");
            exit;
        }

        $name = htmlspecialchars($row["name"]);
        $phone = htmlspecialchars($row["phone"]);
        $test = htmlspecialchars($row["test"]);
        $sight = htmlspecialchars($row["sight"]);
        $rbc = htmlspecialchars($row["rbc"]);
        $wbc = htmlspecialchars($row["wbc"]);
        $thyroid = htmlspecialchars($row["thyroid"]);
        $bp = htmlspecialchars($row["bp"]);
        $gender = htmlspecialchars($row["gender"]);
        $age = htmlspecialchars($row["age"]);
        $haemo = htmlspecialchars($row["haemo"]);
        $t3 = htmlspecialchars($row["t3"]);
        $t4 = htmlspecialchars($row["t4"]);
        $sight2 = htmlspecialchars($row["sight2"]);
        $weight = htmlspecialchars($row["weight"]);
        $gynae = htmlspecialchars($row["gynae"]);
        $medicine = htmlspecialchars($row["medicine"]);
        $date=htmlspecialchars($row["dates"]);
    } else {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $test = $_POST["test"];
        $sight = $_POST["sight"];
        $rbc = $_POST["rbc"];
        $wbc = $_POST["wbc"];
        $thyroid = $_POST["thyroid"];
        $bp = $_POST["bp"];
        $gender = $_POST["gender"];
        $age = $_POST["age"];
        $haemo = $_POST["haemo"];
        $t3 = $_POST["t3"];
        $t4 = $_POST["t4"];
        $sight2 =$_POST["sight2"];
        $weight = $_POST["weight"];
        $gynae =$_POST["gynae"];
        $medicine = $_POST["medicine"];
        $date=$_POST["dates"];
        

        $sql = "UPDATE medical SET name=?, phone=?, test=?, sight=?, rbc=?, wbc=?, thyroid=?, bp=?, gender=?, age=?, haemo=?, t3=?, t4=?, sight2=?, weight=?, gynae=?, medicine=?, dates=? WHERE id=?";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            throw new Exception("Error preparing statement: " . $conn->error);
        }

        $stmt->bind_param("sssssssssiisssssssi", $name, $phone, $test, $sight, $rbc, $wbc, $thyroid, $bp, $gender, $age, $haemo, $t3, $t4, $sight2, $weight, $gynae, $medicine, $date, $id);
        $result = $stmt->execute();
        $stmt->close();

        if (!$result) {
            throw new Exception("Error executing query: " . $conn->error);
        }

        $successmsg = "Updated";
        header("location:/mediadmin.php");
        exit;
    }
} catch (Exception $e) {
    $errorMessage = "An error occurred: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Medical Report</title>
<style>
    body{
        font-size: 20px;
        background: #f2f3f2;
       margin: 0px;
    }
    .responsive{
        width: 1000%;
        height: 190px;
    }
    form{
        text-align: left;
       
    }
    .nm{
        justify-content: space-around;
        
        display: flex;
        background-color: aquamarine;
        margin: 0px;
        padding: 5px;
    }
    .n{
        justify-content: space-between;
        
        display: flex;
    }
   .a{
    justify-content: space-between;
    display: flex;
   }
   .p{
    justify-content: space-between;
    display: flex;
   }
   .input-name{
    justify-content: space-between;
    display: flex;
   }
    .box{
        background: white;
        width: 900px;
        padding: 25px;
        
        margin:0px;
        border-top: 5px solid orange;
        box-shadow: 0 0 7px 5px rgba(0, 0, 0, 0.5);
        
    }
    .box h2{
        font-size: 24px;
        line-height: 24px;
        padding: 30px;
        text-align: center;
    }
    @media (max-width:480px){
        .box{
            width: 100%;
        }
    }
</style>
</head>
<body>
   <!-- <div class="header">
        <img src="C:\Users\dell\Downloads\Your paragraph text (10).png" alt="nature" class="responsive">
      </div> -->
      <section class="text-gray-600b body-font">
        <div class="containers px-5 py-24 mx-auto">
          <div class="flexs flex-col text-center w-full mb-12">
           <!-- <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">MEDICAL REPORT</h1> -->
            <div class="box">
                <div class="nm">
                    <div class="mn">
                    <img src="swamilogo.png" style="border-radius: 50%;" width="80px" height="80px">
                    </div>
                    <div class="bn"><h2>MEDICAL CAMP - MEDCHAL MALKAJGIRI</h2><hr style="background-color: black;"></div>
                </div>
                
            <form action="#" method="post">
                <h2 style="text-align:center";>Medical Report</h2>
                <div class="p">
                    <div class="o">
                    <label for="date"><b>Date:</b></label>
                    <input type="text" id="dates" name="dates" value="<?php echo $date; ?>"><br><br>
                    </div>
                    <div class="t">
                    <label for="type"><b>Type of Check-up:</b></label>
                <input type="text" name="test"  value="<?php echo $test ?>">
                <br><br>
                    </div>
                </div>
                
                
                
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <div class="input-name">
                    <div class="g">
    <label for="name"><b>Name:&nbsp;&nbsp;</b></label><input type="text" id="name" name="name"   value="<?php echo $name ?>" >
    </div>
    <div class="h">
                    <label for="name"><b>Gender:&nbsp;&nbsp;</b></label><input type="text" id="name" name="gender"  value="<?php echo $gender ?>">
                <br><br>
                </div>
                </div>
                <div class="a">
                    <div class="s">
                    <label for="age"><b>Age:&nbsp;&nbsp;</b></label>
                <input type="number" id="age" name="age"  value="<?php echo $age ?>" ><br><br>
           
                    </div>
                    <div class="d">
                    <label for="contact"><b>Contact:&nbsp;&nbsp;</b></label>
                <input type="number" name="phone"  value="<?php echo $phone ?>"><br><br>
                    </div>
                </div>
                
            
                

                
        
                <label for="bloodTest"> <b>Blood Test:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Normal Range Results</b></label><br>
                <label for="bloodTest">RBC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" id="rbc" name="rbc" value="<?php echo $rbc ?>"><label for="bt"> Male: 4.7 to 6.1 million cells per microliter (cells/mcL)&nbsp;Female: 4.2 to 5.4 million cells/mcL</label>
                <br><br><hr>
                
                <label for="bloodTest">WBC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" id="wbc" name="wbc" value="<?php echo $wbc ?>"><label for="bt"> 4500-11,000/mm3</label>
                <br><br><hr>
                
                <label for="bloodTest">Haemoglobin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" id="Hemoglobin" name="haemo" value="<?php echo $haemo ?>"><label for="bt"> 	Male: 13.5-17.5 g/dL &nbsp;Female: 12.0-16.0 g/dL</label>
                <br><br>

                <label for="bloodTest"> <b>Thyroid:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Normal Range Results</b></label><br>
                <label for="thyroid">T3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" id="Thyroid" name="t3" value="<?php echo $t3 ?>"><label for="thy"> 1.2–2.8 nmol/L</label>
                <br><br><hr>
                <label for="thyroid">T4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" id="Thyroid" name="t4" value="<?php echo $t4 ?>"><label for="thy"> 77–155 nmol/l</label>
                <br><br><hr>
                <label for="thyroid">TSH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" id="Thyroid" name="thyroid" value="<?php echo $thyroid ?>" placeholder="Enter"><label for="thy">0.5 to 5.0 mIU/L</label>
                <br><br>
              <div class="n">
                <div class="b">
                <label for="eyeCheckup"><b>Eye Check-up:</b></label><br>
                <label for="eyeCheckup">Left eye:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="eyeCheckup" name="sight" value="<?php echo $sight ?>"><br>
                <label for="eyeCheckup">Right eye:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="eyeCheckup" name="sight2" value="<?php echo $sight2 ?>" ><br><br>
                </div>
               <div class="v">
               <label for="general"><b>General check-up:</b></label><br>
                <label for="general">Weight:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="general" name="weight" placeholder="Your weight" value="<?php echo $weight ?>"><br>
                <label for="general">BP:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="general" name="bp" placeholder="Your BP" value="<?php echo $bp ?>"><br><br>
              
                </div>
                </div>
                <div class="z">
                <label for="Gynaecology"><b>Gynaecology:</b></label><br>
                <input type="text" id="Gynaecology" name="gynae"  placeholder="Doctor's suggestions" value="<?php echo $gynae ?>"><br><br>
                
                
                </div>
                <label for="Medicine"><b>Medicine:</b></label><br>
                <input type="text" id="Medicine" name="medicine" style="width: 700px;" placeholder="Medicine prescribed" value="<?php echo $medicine ?>"><br><br>
               <button type="submit" style="background-color: darkcyan;font-weight:bold;width:80px;border-radius:10px;color:ivory" onclick="printPage()">Print</button> 
            </form>
            </div>
        </div>
        <script>
        function printPage() {
            window.print();
        }
    </script>
</body>
</html>