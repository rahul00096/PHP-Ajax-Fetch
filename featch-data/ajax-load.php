<?php
$conn = mysqli_connect("localhost", "root", "", "test") or die("connection failed");

$sql="SELECT * FROM student";
$result=mysqli_query($conn,$sql)or die("sql query failed");
$output="";
if(mysqli_num_rows($result)>0){
$output='<table border="1" width="100%">
<tr>
<th>Id</th>
<th>Name</th>
</tr>';
while($row=mysqli_fetch_assoc($result)){
    $output.="<tr><td align='center'>{$row['id']}</td>
    <td align='center'>{$row['student_name']}</td>
   <tr>";
}
$output.="</table>";
echo $output;

}else{
echo"<h2>no record found</h2>";
}
?>