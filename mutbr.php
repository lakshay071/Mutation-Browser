<html>
<center><h1>
MUTATION BROWSER FOR SOD1 PROTEIN
</h1></center>
<br>
<hr>
<br>
</html>
<script>
function changepos(){
	
	residue=document.getElementById('res').value
	window.location="mutbr.php?cat1="+residue;

}
function mut(res){
	
	pos=document.getElementById('pos').value
    window.location="mutbr.php?cat1="+res+"&cat2="+pos;
	
}
</script>

<?php
$con=mysqli_connect('localhost','root','','mutdb');
$q="select distinct RESIDUES from mutdb";

$ch=mysqli_query($con,$q);
echo "<select id=res name=res onchange=changepos()>
<option>select one</option>";
while ($row=mysqli_fetch_array($ch))
{
	
	$x=$row['RESIDUES'];
	echo"<option>$x</option>";
	
}
echo "</select>";


if(isset($_GET['cat1'])){

$cat1=$_GET['cat1'];
$sql="select distinct POSITION from mutdb where RESIDUES='$cat1'";
$ch=mysqli_query($con,$sql);
echo "<br><br><select id=pos name=pos onchange=mut('$cat1')>
<option>select one</option>";
while ($row=mysqli_fetch_array($ch))
{
	
	$x=$row['POSITION'];
	echo"<option>$x</option>";
	
}
echo "</select>";
}
if (isset($_GET['cat1']) && isset($_GET['cat2'])){
$cat1=$_GET['cat1'];
$cat2=$_GET['cat2'];
$sql="select MUTATIONS from mutdb where RESIDUES='$cat1' and POSITION='$cat2'";
$ch=mysqli_query($con,$sql);
echo "<br><br><select id=mut name=mut>
<option>select one</option>";
while ($row=mysqli_fetch_array($ch))
{
	$x=$row['MUTATIONS'];
	echo"<option>$x</option>";	
}
echo "</select>";
echo "<br><br><input type=button value=Sub onclick=alert('$cat1'+'$cat2'+document.getElementById('mut').value)>";
}
?>