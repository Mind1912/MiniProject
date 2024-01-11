<?php include ('connect_db.php');
        $itemid = $_POST['itemid'];
        $initemid = $_POST['initemid'];
        $subtype = $_POST['subtype'];
        $serialno = $_POST['serialno'];
        $ryear = $_POST['ryear'];
        $budgettype = $_POST['budgettype'];
        $cost = $_POST['cost'];
        $buyid = $_POST['buyid'];
        $method = $_POST['method'];
        $depname = $_POST['depname'];
        $place = $_POST['place'];
        $jobdetail = $_POST['jobdetail'];
        try {
            //$conn = new PDO("mysql:host=$servername;dbname=mydb", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE sci_inventory SET Item_id='$itemid',Initem_id='$initemid',
           Dep_name='$depname',Place='$place',Subtype='$subtype',Method='$method',Buy_id='$buyid',
            Budget_type='$budgettype',Cost='$cost',Serial_no='$serialno',R_year='$ryear',
            Job_Detail='$jobdetail' WHERE Item_id = '$itemid'";
            // use exec() because no results are returned
            $stmt = $conn->prepare($sql);

            // execute the query
            $stmt->execute();
            //echo "New record created successfully";
            header('Location:inventory.php');
          } catch(PDOException $e) {
            //echo $sql . "<br>" . $e->getMessage();
          }
?>