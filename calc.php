
<?php
	require('header.php');
	require('rb.php');
	
	R::setup( 'mysql:host=localhost;dbname=GT4','root', 'iti' ); //connect to database
	$calc = R::dispense( 'calc' ); 
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if(isset($_POST['submit']))
		{
			if (!empty($_POST['num1']) && !empty($_POST['num2'])) 
			{
					
				$calc->num1=$_POST['num1'];
				$calc->num2=$_POST['num2'];

				$operand=$_POST['radio'];

				if ($operand=='+')
				{
				 	$calc->operand='+';
					$calc->result=$_POST['num1'] + $_POST['num2'];
					$op=$calc->num1 . '+' . $calc->num2 .'='.$calc->result;
					$calc->operation=$op;
					echo "<label style='margin-left:150px'><font color='black'><b> Result= ".$calc->result."</b></font></label>";	
				}
				elseif ($operand=='-') 
				{
					$calc->operand='-';		
					$calc->result=$_POST['num1']-$_POST['num2'];
					$op=$calc->num1 . '-' . $calc->num2 .'='.$calc->result;
					$calc->operation=$op;
					echo "<label style='margin-left:150px'><font color='black'><b> Result= ".$calc->result."</b></font></label>";	
					
				}
				elseif ($operand=='*') 
				{
					$calc->operand='*';	
					$calc->result=$_POST['num1']*$_POST['num2'];
					$op=$calc->num1 . '*' . $calc->num2 .'='.$calc->result;
					$calc->operation=$op;
					echo "<label style='margin-left:150px'><font color='black'><b> Result= ".$calc->result."</b></font></label>";	
					
				}
				else{
					$calc->operand='/';
					$calc->result=$_POST['num1']/$_POST['num2'];
					$op=$calc->num1 . '/' . $calc->num2 .'='.$calc->result;
					$calc->operation=$op;
					echo "<label style='margin-left:150px'><font color='black'><b> Result= ".$calc->result."</b></font></label>";	
					
				}
				$id = R::store( $calc);
			}
		}
		else
		{
			echo "error :( ";
		}
}
	
		
	

	?>
</div>