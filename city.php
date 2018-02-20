<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["keyword"])) {
$query ="SELECT * FROM holiday WHERE city like '" . $_POST["keyword"] . "%' ORDER BY city LIMIT 0,6";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="country-list">
<?php
foreach($result as $city) {
?>

<?php } ?>
</ul>
<?php } } ?>