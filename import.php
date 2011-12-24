
<?php
require_once '../lib/mod_lib.php';
$keys = getConfigKeys(getAuthToken("portcullis"));
if(!array_key_exists('dbname', $keys) || !array_key_exists('dbpass', $keys)
|| !array_key_exists('dbuser', $keys))
{
	notifyerr("<b >Module Not Configured Properly!</b>");
	redirect("?m=modules");
}
$dbname = $keys["dbname"][1];
$dbuser = $keys["dbuser"][1];
$dbpass = $keys["dbpass"][1];
$con = mysql_connect("localhost",$dbuser,$dbpass);
mysql_select_db($dbname, $con);

?>
<fieldset>
	<legend>Import From A Portcullis Database</legend>
	<body>
		<center>
			
			
		<?php
		if($_GET["tabid"]==NULL){

			echo "<div class='box' style='width:60%'>";
			echo  "<h3 class='label success'>Available Results</h3>";
			echo "<form action='#' class='uniForm' method='post'>";
			$q = mysql_query("select * from MRESULTT");
			echo "<table class='bttable'>";
			while($row = mysql_fetch_array($q))
			{
				echo "<tr><td>";
				$table = $row["rtabname"];
				$resname = $row["rname"];
				echo "<a href='?m=marks_portcullis&tabid=".$table."' style='display:block'>".$resname."</a><br>";
				echo "</td></tr>";
			}
		}
		else{
			
		}
		?>
			</div>
		</center>
	</body>
</fieldset>
