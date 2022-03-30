$con = pg_connect("host=localhost dbname=GEOCENTRUM user=postgres password=1234");
$frmText = $_POST['frmText'];
$sql = "INSERT INTO `co_lubie` (`id`, `Komentarz`) VALUES ('0', '$frmText')";
$rs = pg_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}

?>