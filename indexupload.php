<?php
require('vendor/autoload.php');
$con=mysqli_connect('localhost','root','','capstone');
$res=mysqli_query($con,"select * from tbl_user");
if(mysqli_num_rows($res)>0){
	$html='<style></style><table class="table">';
		$html.='<tr><td></td><td>Job Recruitments</td><td></td></tr>';
		while($row=mysqli_fetch_assoc($res)){
			$html.='<tr><td></td><td><img src="'.$row['file_name'].'"></td></tr>';
			$html.='<tr><td></td><td>  "'.$row['full_name'].'" </td></tr>';
			$html.='<tr><td></td><td>  "'.$row['file_name'].'" </td></tr>';
			$html.='<tr><td></td><td>  "'.$row['email'].'" </td></tr>';
					}
	$html.='</table>';
}else{
	$html="Data not found";
}
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='media/'.time().'.pdf';
$mpdf->output($file,'I');
//D
//I
//F
//S
?>