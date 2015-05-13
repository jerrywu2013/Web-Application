<?php
mysql_connect("127.0.0.1","root","");
mysql_select_db("bfsdemo");
$q=mysql_query("SELECT * FROM highcharts_php WHERE id>'".$_REQUEST['id']."'"); 
while($e=mysql_fetch_assoc($q))
        $output[]=$e;
print(json_encode($output));

mysql_close();
?>