<?php
session_start();
$user_id = $_SESSION['user_id'];
$connection = mysqli_connect("localhost", "root", "", "dental");
$queryy = mysqli_query($connection, "SELECT * FROM main_user WHERE user_id  = '".$_GET['user_id']."'");
while($row = mysqli_fetch_array($queryy)):


?>
<!DOCTYPE html>
<html>
<title>Tayamen Dental Clinic</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="css.css">   
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>    
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
</style>
      
    
<body>

<!-- Navigation bar with social media icons -->

  
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->


  <!-- Header -->
 
  
  <!-- Image header -->
 

  <!-- Grid -->
  <form id="msform" method="POST">
  <!-- progressbar -->

  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Tayamen Record Form</h2>
    <h3 class="fs-subtitle">This is step 1/8</h3><br/>
    <input class="form-control" type="text" name="fullname" placeholder="Fullname" value="" />
    <input class="form-control" type="text" name="age" placeholder="Age " />
    <input class="form-control" type="text" name="religion" placeholder="Religion " />
     <input class="form-control" type="text" name="nationality" placeholder="Nationality " />
      <input class="form-control" type="text" name="occupation" placeholder="Occupation " />
       <input class="form-control" type="text" name="dental_insurance" placeholder="Dental Insurance " />
        <div>
       <label>Type of service</label>
           <select class="form-control" name="type_service">
          <option value=""></option>
          <option value="Incisors">Incisors</option>
          <option value="Canines">Canines</option>
          <option value="Premolars">Premolars</option>
          <option value="Molars">Molars</option>
        </select>
        </div>
       <label>Effective Date</label>
       
        <input type="date" name="effective_date"  />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Tayamen Record Form</h2>
    <h3 class="fs-subtitle">This is step 2/8</h3><br/>
    <input class="form-control" type="text" name="p_guardian_name" placeholder="Parents Guardian's Name" />
    <input class="form-control" type="text" name="referring" placeholder="Whom We Thank For Referring You" />
    <input class="form-control" type="text" name="r_dental_consultation" placeholder="What Is Your Reason For Dental Consult" />
     <input class="form-control" type="text" name="predental_history" placeholder="Dental History" />
   <div>
     <label>Gender</label>
     <select class="form-control" name="gender" >
       <option>--</option>
       <option>Male</option>
       <option>Female</option>
     </select>
   </div>
   <br/>
    <input class="form-control" type="text" name="nickname" placeholder="Nickname" />
     <input class="form-control" type="text" name="home_no" placeholder="Home No." />
      <input class="form-control" type="text" name="office_no" placeholder="Office No." />
    <input  type="button" name="previous" class="previous action-button" value="Previous" />
    <input  type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Tayamen Record Form</h2>
    <h3 class="fs-subtitle">This is step 3/8</h3><br/>
    <input class="form-control" type="text" name="fax_no" placeholder="Fax No." />
    <input class="form-control" type="text" name="contact_no" placeholder="Contact No." />
    <input class="form-control" type="email" name="email" placeholder="Email" />
    <input class="form-control" type="text" name="name_physician" placeholder="Name Of Physician" />
    <input class="form-control" type="text" name="office_address" placeholder="Office Address" />
    <input class="form-control" type="text" name="specialty_applicable" placeholder="Specialty If Applicable" />
    <div class="msform">
    <label>1. Are You In A Good Health?</label><br/>
    <select class="form-control" data-placement="right" name="are_good_health" >
      <option>--</option>
      <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select>
  </div>
     <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>

        <fieldset>
          <h2 class="fs-title">Tayamen Record Form</h2>
           <h3 class="fs-subtitle">This is step 4/8</h3><br/>
        <label>2. Are you in a medical treatment now?</label><br/>
       Yes: <input type="checkbox" id="myCheck"  onclick="myFunction()"/>
         No: <input type="checkbox" name ="medical_treatment_array" value="No Medical Treatment"/>
          <input id="text" name ="medical_treatment" placeholder="If So, What Is The Condition Being Treated?" style="display: none;"/>
           <label>3. Have you ever had serious illness or operation?</label><br/>
       Yes: <input type="checkbox" id="yourCheck"  onclick="yourFunction()"/>
         No: <input type="checkbox" name="illnessbox_array" value="No Illness Or Operation Past"/>
          <input id="hey" name ="illness_operation" placeholder="If So What Illness Or Operation?" style="display: none;"/>
          <label>4. Have you ever been hospitalized?</label><br/>
          Yes: <input type="checkbox" id="hosCheck" onclick="hosFunction()"/>
          No: <input type="checkbox" name="hospitalized_history_array" value="No Hospitalized History"/>
          <input id="hos" name="hospitalized_history" placeholder="If So, When And Why?"  style="display: none;"/>
          <label>5. Are you taking prescription non-prescription medication?</label>
          Yes:<input type="checkbox" id="presCheck" onclick="presFunction()"/>
          No: <input type="checkbox" name="prescription_non_array" value="No Prescription Non-Prescription Medication"/>
          <input id="pres" name="prescription_non" placeholder="If So, Pleace Specify" style="display: none;"/>
            <label>6. Do you use tobacco products?</label><br/>
        <select class="form-control" name="tobacco_products">
          <option>--</option>
          <option>Yes</option>
          <option>No</option>
        </select>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
  <h2 class="fs-title">Tayamen Record Form</h2>
    <h3 class="fs-subtitle">This is step 5/8</h3><br/>
    <label>7. Do you use alcohol, cocaine or any dangerous drugs? </label>
    <select class="form-control" name="alcohol_drugs">
      <option>--</option>
      <option>Yes</option>
      <option>No</option>
    </select>
    <h4>8. Are You Allergic To Any Of The Following?</h4>
    <label>Local Anesthetics</label>
       <input type="checkbox" name="allergic_following[]" value="Local Anesthetics" />
    <label>Penicilin Antibiotics</label>
    <input type="checkbox" name="allergic_following[]" value="Penicilin Antibiotics" />
    <label>Latex</label>
    <input type="checkbox" name="allergic_following[]" value="Latex" />
    <label>Sulfia Drugs</label>
    <input type="checkbox" name="allergic_following[]" value="Sulfia Drugs" />
    <label>Aspirin</label>
    <input type="checkbox" name="allergic_following[]" value="Aspirin" />
    <label>None</label>
    <input type="checkbox" name="allergic_following[]" value="None" />
    <label>9. Blood Type</label>
    <input class="form-control" type="text" name="blood_type" placeholder="Blood Type">
    <label>10. Blood Preassure</label>
    <input class="form-control" type="text" name="blood_preassure" placeholder="Blood Preassure">
   <input type="button" name="previous" class="previous action-button" value="Previous" />
   <input type="button" name="next" class="next action-button" value="Next" />
</fieldset>

<fieldset>
  <h2 class="fs-title">Tayamen Record Form</h2>
    <h3 class="fs-subtitle">This is step 6/8</h3><br/>
  <label>11. Do you have or have had any of the following? Check which apply </label>
 High Blood Preassure: <input type="checkbox" name="illnessbox[]" value="High Blood Preassure"/> 
 Low Blood Preassure: <input type="checkbox" name="illnessbox[]" value="Low Blood Preassure"/>
 Epilepsy: <input type="checkbox" name="illnessbox[]" value="Epilepsy"/>
 AID's or HIV infection: <input type="checkbox" name="illnessbox[]" value="AID's or HIV infection"/>
 Sexualty Transmitted Disease: <input type="checkbox" name="illnessbox[]" value="Sexualty Transmitted Disease"/> 
 Stomach Trouble Ulcer: <input type="checkbox" name="illnessbox[]" value="Stomach Trouble Ulcer"/>
 Fainting Seizure: <input type="checkbox" name="illnessbox[]" value="Fainting Seizure"/>
 Rapid Weight Loss: <input type="checkbox" name="illnessbox[]" value="Rapid Weight Loss"/>
 Radiation Theraphy: <input type="checkbox" name="illnessbox[]" value="Radiation Theraphy"/>
 Joint Replacement Implant: <input type="checkbox" name="illnessbox[]" value="Joint Replacement Implant"/>
 
  <input type="button" name="previous" class="previous action-button" value="Previous" />
   <input type="button" name="next" class="next action-button" value="Next" />
</fieldset>
<fieldset>
  <h2 class="fs-title">Tayamen Record Form</h2>
    <h3 class="fs-subtitle">This is step 7/8</h3><br/>
  Heart Disease: <input type="checkbox" name="illnessbox[]" value="Heart Disease"/>
  Hepatitis Liver Disease: <input type="checkbox" name="illnessbox[]" value="Hepatitis Liver Disease"/>
  Rheumatic Fever: <input type="checkbox" name="illnessbox[]" value="Rheumatic Disease"/>
  Hay Fever/ Allergies: <input type="checkbox" name="illnessbox[]" value="Hay Fever/ Allergies"/>
  Respiratory Problem: <input type="checkbox" name="illnessbox[]" value="Respiratory Problem"/>
  Hepatitis/Jaundice: <input type="checkbox" name="illnessbox[]" value="Hepatitis/Jaundice"/>
  Tubercolosis: <input type="checkbox" name="illnessbox[]" value="Tubercolosis"/>
  Swollen Ankles: <input type="checkbox" name="illnessbox[]" value="Swollen Ankles"/>
  Kidney Disease: <input type="checkbox" name="illnessbox[]" value="Kidney Disease"/>
  Diabetes: <input type="checkbox" name="illnessbox[]" value="Diabetes"/>
  Chest Pain: <input type="checkbox" name="illnessbox[]" value="Chest Pain"/>
  Stroke: <input type="checkbox" name="illnessbox[]" value="Stroke"/>

  <input type="button" name="previous" class="previous action-button" value="Previous" />
   <input type="button" name="next" class="next action-button" value="Next" />
</fieldset>
<fieldset>
  <h2 class="fs-title">Tayamen Record Form</h2>
    <h3 class="fs-subtitle">This is step 8/8</h3><br/>
  Heart Surgery: <input type="checkbox" name="illnessbox[]" value="Heart Surgery"/>
 Heart Attack: <input type="checkbox" name="illnessbox[]" value="Heart Attack"/>
 Tyroid Problems: <input type="checkbox" name="illnessbox[]" value="Tyroid Problems">
 Cancer/Tumors: <input type="checkbox" name="illnessbox[]" value="Cancer/Tumors"/>
 Anemia: <input type="checkbox" name="illnessbox[]" value="Anemia"/>
Angina: <input type="checkbox" name="illnessbox[]" value="Angina">
Asthma:<input type="checkbox" name="illnessbox[]" value="Asthma"/>
Enphysema: <input type="checkbox" name="illnessbox[]" value="Enphysema"/>
Blood Disease: <input type="checkbox" name="illnessbox[]" value="Blood Disease"/>
Head Injuries: <input type="checkbox" name="illnessbox[]" value="Head Injuries"/>
Athritis/Rheumatism: <input type="checkbox" name="illnessbox[]" value="Athritis/Rheumatism"/>
Others: <input type="checkbox" name="illnessbox[]" value="Others">
  <input type="button" name="previous" class="previous action-button" value="Previous" />
  <input type="submit" name="submit"  />
</fieldset>

</form>
<?php endwhile;?>
<?php
include "dental_connect.php";
if(isset($_POST['submit']))
{
$fullname = $_POST['fullname'];
$age = $_POST['age'];
$religion = $_POST['religion'];
$nationality = $_POST['nationality'];
$occupation = $_POST['occupation'];
$dental_insurance = $_POST['dental_insurance'];
$type_service = $_POST['type_service'];
$effective_date = $_POST['effective_date'];
$p_guardian_name = $_POST['p_guardian_name'];
$referring = $_POST['referring'];
$r_dental_consultation = $_POST['r_dental_consultation'];
$predental_history = $_POST['predental_history'];
$gender = $_POST['gender'];
$nickname = $_POST['nickname'];
$home_no = $_POST['home_no'];
$office_no = $_POST['office_no'];
$fax_no = $_POST['fax_no'];
$contact_no = $_POST['contact_no'];
$email = $_POST['email'];
$name_physician = $_POST['name_physician'];
$office_address = $_POST['office_address'];
$specialty_applicable = $_POST['specialty_applicable'];
$are_good_health = $_POST['are_good_health'];
$medical_treatment = $_POST['medical_treatment'];
$illness_operation = $_POST['illness_operation'];
$hospitalized_history = $_POST['hospitalized_history'];
$prescription_non = $_POST['prescription_non'];
$tobacco_products = $_POST['tobacco_products'];
$alcohol_drugs = $_POST['alcohol_drugs'];
$blood_type = $_POST['blood_type'];
$blood_preassure = $_POST['blood_preassure'];
$a = $_POST['allergic_following'];
$allergic_following = implode(',', $a);
$b = $_POST['illnessbox'];
$illnessbox = implode(',', $b);
$type = "patient";
$connection = mysqli_connect("localhost", "root", "", "dental");
$user_id = $_SESSION['user_id'];
$insert = mysqli_query($connection, "INSERT INTO patient_form( user_id, fullname, age, religion, nationality, occupation,  dental_insurance,type_service, effective_date, p_guardian_name, referring, r_dental_consultation, predental_history, gender, nickname, home_no, office_no, fax_no, contact_no, email, name_physician, office_address, specialty_applicable, are_good_health, medical_treatment, illness_operation, hospitalized_history, prescription_non, tobacco_products, alcohol_drugs, blood_type, blood_preassure, allergic_following, illnessbox, type) VALUES('$user_id','$fullname', '$age', '$religion', '$nationality', '$occupation', '$dental_insurance', '$type_service', '$effective_date', '$p_guardian_name', '$referring', '$r_dental_consultation', '$predental_history', '$gender', '$nickname', '$home_no', '$office_no', '$fax_no', '$contact_no', '$email', '$name_physician', '$office_address', '$specialty_applicable', '$are_good_health', '$medical_treatment', '$illness_operation', '$hospitalized_history', '$prescription_non', '$tobacco_products', '$alcohol_drugs', '$blood_type', '$blood_preassure', '$allergic_following', '$illnessbox', '$type')");
if(!$insert)
{
  echo 'mysql_error()';
}
else
{
                            echo'<script>';
                            echo'alert("You Already Registered");';
                            echo'window.location.href="patient_panel.php";';
                            echo'</script>';
}
}

?>



<script>
function myFunction() {
    var checkBox = document.getElementById("myCheck");
    var text = document.getElementById("text");
    if (checkBox.checked == true){
        text.style.display = "block";
    } else {
       text.style.display = "none";
    }
}
</script>

<script>
function yourFunction() {
    var checkBox = document.getElementById("yourCheck");
    var hey = document.getElementById("hey");
    if (checkBox.checked == true){
        hey.style.display = "block";
    } else {
       hey.style.display = "none";
    }
}
</script>
<script>
  function hosFunction(){
    var checkbox = document.getElementById("hosCheck");
    var hos = document.getElementById("hos");
    if(checkbox.checked == true){
      hos.style.display = "block";
    }
    else{
      hos.style.display = "none";
    }
  }
</script>
<script>
  function presFunction(){
    var checkbox = document.getElementById("presCheck");
    var pres = document.getElementById("pres");
    if(checkbox.checked == true){
      pres.style.display = "block";
    }
    else{
      pres.style.display = "none";
    }
  }
</script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

    <script src="js/index.js"></script>
</body>
</html>
















 
