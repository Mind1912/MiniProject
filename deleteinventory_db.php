<?php include ('connect_db.php');
$itemid = $_GET['itemid'];
try {

  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
  $sql = "DELETE FROM `sci_inventory` WHERE Item_id=$itemid";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Record deleted successfully";
} catch(PDOException $e) {
  echo $e->getMessage();
}

$conn = null;
?>