<?php
session_start(); 



$Err="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$valid = true;
	
  if (empty($_POST["ename"])) {
	  $valid=false;
    $Err = "Name is required";
  } else {
    $_SESSION['ename'] = test_input($_POST["ename"]);
  }
  
  if (empty($_POST["evil"])) {
	  $valid=false;
    $Err = "Address is requird";
  } else {
    $_SESSION['evil'] = test_input($_POST["evil"]);
  }
    
  if (empty($_POST["eroad"])) {
	  $valid=false;
    $Err = "Address requird";
  } else {
    $_SESSION['eroad'] = test_input($_POST["eroad"]);
  }

  
  if (empty($_POST["eemail"])) {
	  $valid=false;
    $Err = "Email Requird";
  } else {
    $_SESSION['eemail'] = test_input($_POST["eemail"]);
  }
  if (empty($_POST["epolice"])) {
	  $valid=false;
    $Err = "Address Requird";
  } else {
    $_SESSION['epolice'] = test_input($_POST["epolice"]);
  }
  if (empty($_POST["prepo"])) {
	  $valid=false;
    $Err = "Address Requird";
  } else {
    $_SESSION['epo'] = test_input($_POST["epo"]);
  }
  
    if (empty($_POST["eemail"])) {
		$valid=false;
    $Err = "Email Requird";
  } else {
    $_SESSION['eemail'] = test_input($_POST["eemail"]);
  }
  
  if($valid){
        header('location:form_show.php');
        exit();
    }

}


if (isset($_POST['sub_form1'])) 
{
$_SESSION['country'] = test_input($_POST["country"]);

}

 function OptionCheck($option, $select)
 {
 	if(isset($_SESSION[$select])) 
	{
		$select= $_SESSION[$select];
	 	if($option==$select)
	 	{
	 		return true;
	 	}
	}
 	return false;
 }
function test_input($data)
{
	$data= trim($data);
	$data= stripcslashes($data);
	$data= htmlspecialchars($data);
	return $data;
}



?>

<style>
.error {color: #FF0000;}
</style>



<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" > 

  Name: <input type="text" name="ename">
  <br><br>
  
  
  
   Country:<select name="country">
  <option value="Bangladesh" <?php echo OptionCheck("Bangladesh", "apply") ? "selected" : ''; ?> >Bangladeshi</option>
  <option value="India" <?php echo OptionCheck("India", "apply") ? "selected" : ''; ?> >India</option>
  <option value="USA" <?php echo OptionCheck("USA", "apply") ? "selected" : ''; ?> >USA</option>
  <option value="Uk" <?php echo OptionCheck("UK", "apply") ? "selected" : ''; ?> >UK</option>
  <option value="Africa" <?php echo OptionCheck("Africa", "apply") ? "selected" : ''; ?> >Africa</option>
  <option value="Thailand" <?php echo OptionCheck("Thailand", "apply") ? "selected" : ''; ?> >Thailand</option>
  <option value="Other" <?php echo OptionCheck("Other", "apply") ? "selected" : ''; ?> >Other</option>
  </select>
  
  
  
    Village/house: <input type="text" name="evil">
  <br><br> 
  
  road: <input type="text" name="eroad">
  <br><br> 
  
  Police Station: <input type="text" name="epolice">
  <br><br> 
  
  Post Office: <input type="text" name="epo">
  <br><br> 
  
  Email: <input type="text" name="eemail">
  <br><br>
  
  
  <input type="submit" name="form2" value="Save & Next">
  </form>
  


