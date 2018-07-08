<?php
session_start(); 



$Err="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$valid = true;
	
  if (empty($_POST["name"])) {
	  $valid=false;
    $Err = "Name is required";
  } else {
    $_SESSION['name'] = test_input($_POST["name"]);
  }
  
  if (empty($_POST["name_first"])) {
	  $valid=false;
    $Err = "First name is requird";
  } else {
    $_SESSION['name_first'] = test_input($_POST["name_first"]);
  }
    
  if (empty($_POST["surname"])) {
	  $valid=false;
    $Err = "Surname requird";
  } else {
    $_SESSION['surname'] = test_input($_POST["surname"]);
  }

  if (empty($_POST["fname"])) {
	  $valid=false;
    $Err = "Father Name Requird";
  } else {
    $_SESSION['fname'] = test_input($_POST["fname"]);
  }
  
  if (empty($_POST["dob"])) {
	  $valid=false;
    $Err = "Date Of Birth Requird";
  } else {
    $_SESSION['dob'] = test_input($_POST["dob"]);
  }

  if (empty($_POST["gender"])) {
	  $valid=false;
    $Err = "Gender Requird";
  } else {
    $_SESSION['gender'] = test_input($_POST["gender"]);
  }
  
  if (empty($_POST["bid"])) {
	  $valid=false;
    $Err = "Birth ID Requird";
  } else {
    $_SESSION['bid'] = test_input($_POST["bid"]);
  }
  
  if (empty($_POST["reli"])) {
	  $valid=false;
    $Err = "Religion Requird";
  } else {
    $_SESSION['reli'] = test_input($_POST["reli"]);
  }
  if (empty($_POST["email"])) {
	  $valid=false;
    $Err = "Email Requird";
  } else {
    $_SESSION['email'] = test_input($_POST["email"]);
  }
  if (empty($_POST["prepolice"])) {
	  $valid=false;
    $Err = "Address Requird";
  } else {
    $_SESSION['prepolice'] = test_input($_POST["prepolice"]);
  }
  if (empty($_POST["prepo"])) {
	  $valid=false;
    $Err = "Address Requird";
  } else {
    $_SESSION['prepo'] = test_input($_POST["prepo"]);
  }
  
    if($valid){
        header('location:pass_pg_2.php');
        exit();
    }
  

}
/*
 else
  {
  header("Location:pass_pg_2.php");
  exit();
  }
*/

if (isset($_POST['sub_form1'])) 
{
$_SESSION['apply'] = test_input($_POST["apply"]);
$_SESSION['brow'] = test_input($_POST["brow"]);
$_SESSION['fnational'] = test_input($_POST["fnational"]);
$_SESSION['fprof'] = test_input($_POST["fprof"]);
$_SESSION['mnational'] = test_input($_POST["mnational"]);
$_SESSION['mprof'] = test_input($_POST["mprof"]);
$_SESSION['sname'] = test_input($_POST["sname"]);
$_SESSION['snational'] = test_input($_POST["snational"]);
$_SESSION['sprof'] = test_input($_POST["sprof"]);
$_SESSION['appms'] = test_input($_POST["appms"]);
$_SESSION['anational'] = test_input($_POST[""]);
$_SESSION['cob'] = test_input($_POST["cob"]);
$_SESSION['nid'] = test_input($_POST["nid"]);
$_SESSION['tid'] = test_input($_POST["tid"]);
$_SESSION['previl'] = test_input($_POST["previl"]);
$_SESSION['preroad'] = test_input($_POST["preroad"]);
$_SESSION['parvil'] = test_input($_POST["parvil"]);
$_SESSION['parroad'] = test_input($_POST["parroad"]);
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



    <h3>Passport Application Information<h3>
	
	<p><span class="error">* required field </br> <?php echo $Err;?></span></p>
    
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >  

    Applying in:<select name="apply">
  <option value="Bangladesh" <?php echo OptionCheck("Bangladesh", "apply") ? "selected" : ''; ?> >Bangladeshi</option>
  <option value="India" <?php echo OptionCheck("India", "apply") ? "selected" : ''; ?> >India</option>
  <option value="USA" <?php echo OptionCheck("USA", "apply") ? "selected" : ''; ?> >USA</option>
  <option value="Uk" <?php echo OptionCheck("UK", "apply") ? "selected" : ''; ?> >UK</option>
  <option value="Africa" <?php echo OptionCheck("Africa", "apply") ? "selected" : ''; ?> >Africa</option>
  <option value="Thailand" <?php echo OptionCheck("Thailand", "apply") ? "selected" : ''; ?> >Thailand</option>
  <option value="Other" <?php echo OptionCheck("Other", "apply") ? "selected" : ''; ?> >Other</option>
  </select>
  
   

   
   </br>
   </br>
   
   
   Passport type:<select name="brow">
   
    <option value="Civilian" <?php echo OptionCheck("Civilian", "brow") ? "selected" : ''; ?> >Civilian</option>
    <option value="Govtofficial" <?php echo OptionCheck("GovtOfficial", "brow") ? "selected" : ''; ?> >Govt Official</option>
    <option value="VIP" <?php echo OptionCheck("VIP", "brow") ? "selected" : ''; ?> >VIP</option>
    <option value="Military" <?php echo OptionCheck("Military", "brow") ? "selected" : ''; ?> >Military</option>
   </select>
   
  
  
   </br>
   </br>
   
   Delivery Type: <input type="radio" name="delivery" value="Regular">Regular
  <input type="radio" name="delivery" value="Express">Express
  
     </br>
   </br>
      </br>
   </br>
  
  <h3>Personal Information</h3>
  
   <table>
     <tr>
      <td>Name of aplicant:</td> <td><input type="text" name="name"></td>
	 </tr>

	 
     <tr>
      <td>First part(given name):</td> <td><input type="text" name="name_first"></td>
	 </tr> 

     <tr>
      <td>Second part(surname):</td> <td><input type="text" name="surname"></td>
     </tr>
  
      <tr>
       <td>Guardian <input type="checkbox" name="Guardian"> "Tick" only if applicant is legally adapted</td>
	   </tr>
  
  
      <tr>
	  
       <td>Fathers Name:</td> <td><input type="text" name="fname"></td>
	   </tr>
    </table>
	
	
  Fathers Nationality:<select  name="fnational">
  <option value="Bangladeshi" <?php echo OptionCheck("Bangladeshi", "fnational") ? "selected" : ''; ?> >Bangladeshi</option>
  <option value="Indian" <?php echo OptionCheck("Indian", "fnational") ? "selected" : ''; ?> >Indian</option>
  <option value="American" <?php echo OptionCheck("American", "fnational") ? "selected" : ''; ?> >American</option>
  <option value="British" <?php echo OptionCheck("British", "fnational") ? "selected" : ''; ?> >British</option>
  <option value="African" <?php echo OptionCheck("African", "fnational") ? "selected" : ''; ?> >African</option>
  <option value="Thai" <?php echo OptionCheck("Thai", "fnational") ? "selected" : ''; ?> >Thai</option>
  <option value="Latin" <?php echo OptionCheck("Latin", "fnational") ? "selected" : ''; ?> >Latin</option>
  </select>
     </br>
   </br>
 
  Fathers Profession:<select name="fprof">
   <option value="Businessman" <?php echo OptionCheck("Businessman", "fprof") ? "selected" : ''; ?> >Civilian</option>>Business Man</option>
   <option value="Army" <?php echo OptionCheck("Army", "fprof") ? "selected" : ''; ?> >Army</option>
   <option value="Teacher" <?php echo OptionCheck("Teacher", "fprof") ? "selected" : ''; ?> >Teacher</option>
   <option value="Actor" <?php echo OptionCheck("Actor", "fprof") ? "selected" : ''; ?> >Actor</option>
   <option value="other" <?php echo OptionCheck("Other", "fprof") ? "selected" : ''; ?> >other</option>
  </select>
  <br>
  <br>
  
    Mothers Name: <input type="text" name="mname">
     </br>
   </br>
  
  Mothers Nationality:<select name="mnational">
  <option value="Bangladeshi" <?php echo OptionCheck("Bangladeshi", "mnational") ? "selected" : ''; ?> >Bangladeshi</option>
  <option value="Indian" <?php echo OptionCheck("Indian", "mnational") ? "selected" : ''; ?> >Indian</option>
  <option value="American" <?php echo OptionCheck("American", "mnational") ? "selected" : ''; ?> >American</option>
  <option value="British" <?php echo OptionCheck("British", "mnational") ? "selected" : ''; ?> >British</option>
  <option value="African" <?php echo OptionCheck("African", "mnational") ? "selected" : ''; ?> >African</option>
  <option value="Thai" <?php echo OptionCheck("Thai", "mnational") ? "selected" : ''; ?> >Thai</option>
  <option value="Latin" <?php echo OptionCheck("Latin", "mnational") ? "selected" : ''; ?> >Latin</option>
  </select>
     </br>
   </br>
 
  Mothers Profession:<select name="mprof">
   <option value="Businessman" <?php echo OptionCheck("Businessman", "mprof") ? "selected" : ''; ?> >Civilian</option>>Business Man</option>
   <option value="Army" <?php echo OptionCheck("Army", "mprof") ? "selected" : ''; ?> >Army</option>
   <option value="Teacher" <?php echo OptionCheck("Teacher", "mprof") ? "selected" : ''; ?> >Teacher</option>
   <option value="Actor" <?php echo OptionCheck("Actor", "mprof") ? "selected" : ''; ?> >Actor</option>
   <option value="other" <?php echo OptionCheck("Other", "mprof") ? "selected" : ''; ?> >other</option>
  </select>
  <br>
  <br>
  
  Spous Name: <input type="text" name="sname">
     </br>
   </br>
  
  Spouse Nationality:<select name="snational">
  <option value="Bangladeshi" <?php echo OptionCheck("Bangladeshi", "snational") ? "selected" : ''; ?> >Bangladeshi</option>
  <option value="Indian" <?php echo OptionCheck("Indian", "snational") ? "selected" : ''; ?> >Indian</option>
  <option value="American" <?php echo OptionCheck("American", "snational") ? "selected" : ''; ?> >American</option>
  <option value="British" <?php echo OptionCheck("British", "snational") ? "selected" : ''; ?> >British</option>
  <option value="African" <?php echo OptionCheck("African", "snational") ? "selected" : ''; ?> >African</option>
  <option value="Thai" <?php echo OptionCheck("Thai", "snational") ? "selected" : ''; ?> >Thai</option>
  <option value="Latin" <?php echo OptionCheck("Latin", "snational") ? "selected" : ''; ?> >Latin</option>
  </select>
     </br>
   </br>
 
  Spouse Profession:<select name="sprof">
   <option value="Businessman" <?php echo OptionCheck("Businessman", "sprof") ? "selected" : ''; ?> >Civilian</option>>Business Man</option>
   <option value="Army" <?php echo OptionCheck("Army", "sprof") ? "selected" : ''; ?> >Army</option>
   <option value="Teacher" <?php echo OptionCheck("Teacher", "sprof") ? "selected" : ''; ?> >Teacher</option>
   <option value="Actor" <?php echo OptionCheck("Actor", "sprof") ? "selected" : ''; ?> >Actor</option>
   <option value="other" <?php echo OptionCheck("Other", "sprof") ? "selected" : ''; ?> >other</option>
  </select>
  <br>
  <br>
  
  
  Marital status:<select name="appms">
   <option value="Married" <?php echo OptionCheck("Married", "appms") ? "selected" : ''; ?> >Married</option>
   <option value="Single" <?php echo OptionCheck("Single", "appms") ? "selected" : ''; ?> >Single</option>
   <option value="Widowed" <?php echo OptionCheck("Widowed", "appms") ? "selected" : ''; ?> >Widowed</option>
   </select>
     </br>
   </br>
  
  
  Applicants Profession:<select name="anational">
   <option value="Businessman" <?php echo OptionCheck("Businessman", "anational") ? "selected" : ''; ?> >Civilian</option>>Business Man</option>
   <option value="Army" <?php echo OptionCheck("Army", "anational") ? "selected" : ''; ?> >Army</option>
   <option value="Teacher" <?php echo OptionCheck("Teacher", "anational") ? "selected" : ''; ?> >Teacher</option>
   <option value="Actor" <?php echo OptionCheck("Actor", "anational") ? "selected" : ''; ?> >Actor</option>
   <option value="other" <?php echo OptionCheck("Other", "anational") ? "selected" : ''; ?> >other</option>
  </select>
  <br>
  <br>
  
  Country of birth:<select name="cob">
  <option value="Bangladesh" <?php echo OptionCheck("Bangladesh", "cob") ? "selected" : ''; ?> >Bangladeshi</option>
  <option value="India" <?php echo OptionCheck("India", "cob") ? "selected" : ''; ?> >India</option>
  <option value="USA" <?php echo OptionCheck("USA", "cob") ? "selected" : ''; ?> >USA</option>
  <option value="Uk" <?php echo OptionCheck("UK", "cob") ? "selected" : ''; ?> >UK</option>
  <option value="Africa" <?php echo OptionCheck("Africa", "cob") ? "selected" : ''; ?> >Africa</option>
  <option value="Thailand" <?php echo OptionCheck("Thailand", "cob") ? "selected" : ''; ?> >Thailand</option>
  <option value="Other" <?php echo OptionCheck("Other", "cob") ? "selected" : ''; ?> >Other</option>
  </select>
     </br>
   </br>
  
  
  Date of Birth: <input type="text" name="dob">
  <br><br> 
   
   Gender: <input type="radio" name="gender" value="Male">Male
   <input type="radio" name="gender" value="Female">Female
   <input type="radio" name="gender" value="Other">Other
      </br>
   </br>
  
  
  
  Birth ID No: <input type="text" name="bid">
  <br><br> 
  
  National Id: <input type="text" name="nid">
  <br><br> 
  
  Tax ID No: <input type="text" name="tid">
  <br><br> 
  
  Religion: <input type="text" name="reli">
  <br><br> 
  
  Email: <input type="text" name="email">
  <br><br> 
     </br>
   </br>
  
  <h4>Present Address</h4>
  <table>
  
    <tr>
	  <td>Village/house:</td>
	  <td><input type="text" name="previl"></td>
	</tr>
  
  
  
  
  <tr>
    <td>road:</td> 
    <td><input type="text" name="preroad"></td>
  
  
  
  <tr>
  
  <td>Police Station:</td> <td><input type="text" name="prepolice"></td>
  </tr>
 
  
  <tr>
  
    <td>Post Office:</td> <td><input type="text" name="prepo"></td>
   </tr>	
   </table>

  
  
  </br></br>
  
  
  
  <h4>Parmanent Address</h4>
  
  <table>
   <tr>
   
    <td>Village/house:</td> <td> <input type="text" name="parvil"></td>
	</tr>
   
  <tr>
  
   <td>road:</td> <td><input type="text" name="parroad"></td>
  </tr> 
  
  <tr>
    <td>Police Station:</td> <td><input type="text" name="parpolice"></td>
  </tr> 
  
  <tr>
    <td>Post Office:</td> <td><input type="text" name="parpo"></td>
  </tr>
  </table>
    
 </br></br>
  
 <input type="submit"  name="form1" value="Save & Next">
  

  </form>
  
  