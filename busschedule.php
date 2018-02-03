<!DOCTYPE html><html>
<style>
body
a{
text-decoration:none;
}
</style>
<table>
</form action="" method="post">
<tr><td>Bus RouteNumber</td><td><input type="text" name="no"></td></tr>

<tr><td><input type="submit" name="submit" value="submit"></td></tr>
<script>
function myFunction() {
    window.print();
}
</script>
</body></form>
</table>
</html><?php
$con=mysql_connect("localhost","root","");
mysql_select_db("college",$con);?>
<?php
if(isset($_POST['submit']))
{
$a=$_POST['no'];
$sel1=mysql_query("select * from bus where routno='".$a."' ",$con)or die (mysql_error());
while($row1=mysql_fetch_row(sel1,MYSQL_BOTH))
{
?>
<?php $row1[0]?>
<?php $row1[1]?>
<?php $row1[2]?>
<?php
}
}
?>
<button onclick="myFunction()">Print this page</button>