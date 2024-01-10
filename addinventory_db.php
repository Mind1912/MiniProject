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
            $sql = "INSERT INTO `sci_inventory`(`Item_id`, `Initem_id`,`Subtype`,`Serial_no`,`R_year`,`Budget_type`,`Cost`,`Buy_id`,`Method`,
            `Dep_name`,`Place`,`Job_Detail`) VALUES ('[$itemid]','[$initemid]','[$subtype]','[$serialno]',
            '[$ryear]','[$budgettype]','[$cost]','[$buyid]','[$method]','[$depname]','[$place]','[$jobdetail]')";
            // use exec() because no results are returned
            $conn->exec($sql);
            //echo "New record created successfully";
            header('Location:inventory.php');
          } catch(PDOException $e) {
            //echo $sql . "<br>" . $e->getMessage();
          }
?>