<?php
session_start(); 
//extract($_SESSION['post']);

$_SESSION['name'] = $name


$newfile = fopen("form-data1.txt", "w");


$txt = "Personal Information Summary: $name\n";
fwrite($newfile, $txt);

$txt = "Name Of The Applicant: $name\n";
fwrite($newfile, $txt);

/*
$txt = "Applying Country: $_SESSION['apply']\n";
fwrite($newfile, $txt);

$txt = "Gender: $_SESSION['gender']\n";
fwrite($newfile, $txt);

$txt = "Nationality: $applicantNationality\n";
fwrite($newfile, $txt);

$txt = "Name Of The Applicant: $name\n";
fwrite($newfile, $txt);

$txt = "Date Of Birth: $_SESSION['dob']\n";
fwrite($newfile, $txt);

$txt = "Place Of Birth: $districtBirth, $countryOfBirth $dob\n";
fwrite($newfile, $txt);

$txt = "Father's Name: $_SESSION['fname']\n";
fwrite($newfile, $txt);

$txt = "Mother's Name: $$_SESSION['mname']\n";
fwrite($newfile, $txt);

$txt = "Spouse's Name: $_SESSION['sname']\n";
fwrite($newfile, $txt);

$txt = "Birth ID No: $_SESSION['birthID']\n";
fwrite($newfile, $txt);

$txt = "National ID No: $_SESSION['nid']\n";
fwrite($newfile, $txt);

$txt = "Applying In: $_SESSION['anational']\n";
fwrite($newfile, $txt);

$txt = "Passport Type: $_SESSION['brow']\n";
fwrite($newfile, $txt);

$txt = "Application Type: New\n";
fwrite($newfile, $txt);

$txt = "\n\nContact Information Summary\n\n";
fwrite($newfile, $txt);

$txt = "Mobile No: $applicantMobile\n";
fwrite($newfile, $txt);

$txt = "Present Address: $_SESSION['previl'] $_SESSION['preroad'] $_SESSION['preolice']\n";
fwrite($newfile, $txt);

*/
?>

<!DOCTYPE html>
<html>
 </body>


                   <div >
                        <label>Name Of The Applicant:</label> <?php echo $_SESSION['name']; ?>
                    </div>

                    <div>
                        <label>Applying Country:</label> <?php echo $_SESSION['apply']; ?>
                    </div>

                    <div>
                        <label>Gender:</label> <?php echo $_SESSION['gender']; ?>
                    </div>

                    
                    
                    <div>
                        <label>Date Of Birth:</label> <?php echo $_SESSION['dob']; ?>
                    </div>
                    
                    
                    
                    <div>
                        <label>Father's Name:</label> <?php echo $_SESSION['fname']; ?>
                    </div>                            

                    <div>
                        <label>Mother's Name:</label> <?php echo $_SESSION['mname']; ?>
                    </div> 

                    <div>
                        <label>Spouse's Name:</label> <?php echo $_SESSION['sname']; ?>
                    </div> 

                    <div>
                        <label>Birth ID No:</label> <?php echo $_SESSION['birthID']; ?>
                    </div> 

                    <div>
                        <label>National ID No:</label> <?php echo $_SESSION['nid']; ?>
                    </div> 


             

               

                    <div>
                        <label>Applying In:</label> <?php echo $_SESSION['anational']; ?>
                    </div>

                    <div>
                        <label>Passport Type:</label> <?php echo $_SESSION['brow']; ?>
                    </div>

                    <div>
                        <label>Application Type:</label> New
                    </div>

                  

                    <div>
                        <label>Present Address:</label> <?php echo $_SESSION['previl']. ", ".$_SESSION['preroad'].", ".$_SESSION['preolice']. ", ".$_SESSION['prepo']  ; ?>
                    </div> 

                    <div>


                <input type="submit"  name="formshow" value="Save File">
                


              </div>
            </div>  
			
  </body>			
</html>			