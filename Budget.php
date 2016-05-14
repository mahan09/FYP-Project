<?php
    
      
        
           include 'includes/overall/header1.php';
           include 'includes/head.php';
           
           ?>
           
           

<?php



require_once "DBCLASS.php";

?>


 <html lang="en">
           <body>




<div class="container">
  <div class = "page-header">
   
   <h2>
   
      <small>Manage Your Budget</small>
   </h2>
   
</div>
  <div class="panel-group" id="accordion">
    <div class="panel panel-primary">
           
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-parent="#accordion">Automatic Reccomendation</a>
        </h4>
      </div>
        <div class="panel-body">
           
             
  <div class="form-group">
<select name="users" class="form-control"   onchange="showUser(this.value)">
  <option value="">Your Annual Income:</option>
  <option value="1">£3000</option>
  <option value="2">£4000</option>
  <option value="3">£5000</option>
  <option value="4">£6000</option>
  <option value="6">£7000</option>
  <option value="7">£8000</option>
  <option value="8">£9000</option>
  
  </select>
</div>
                                                                                 
  <div class="table-responsive">          

     <div id="txtHint"></div>

        </div>
      </div>
        
        
        
        
    </div>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Manual Recommendation</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
           
           <form> 
          

  <div class="form-group">
           <label for="exampleInputEmail1">Maintenance Loan:</label>
           <select class="form-control" name="maintenanceloan"  select id="MainLoan">
		<option>Select</option> 
        <option value="400-600" id="400-600">£400-600</option>
        <option value="600-1000" id="600-1000">£600-£1000</option>
        <option value="1000-1300" id="1000-1300">£1000-£1300</option>
		<option value="1300-1600" id="1300-1600">£1300-£1600</option>
		<option value="1600-1900" id="1600-1900">£1600-£1900</option>
		<option value="1900-2600" id="1900-2600">£1900-£2600</option>
		<option value="2600-3000" id="2600-3000">£2600-£3000</option>
	

</select>
</div>

 
   <div class="form-group">
           <label for="exampleInputEmail1">Maintenance Grant:</label>
<select class="form-control" name="maintenancegrant"  select id="MainGrant">
		<option>Select</option> 
		<option value="200-500" id="200-500">£200-£500</option>
        <option value="500-900" id="500-900">£500-£900</option>
        <option value="900-1200" id="900-1200">£900-£1200</option>
		<option value="1200-1500" id="1200-1500">£1200-£1500</option>
		<option value="1500-1900" id="1500-1900">£1500-£1900</option>
		<option value="1900-2500" id="1900-2500">£1900-£2500</option>
		<option value="2500-3000" id="2500-3000">£2500-£3000</option>
	

</select>
</div>

   
   <div class="form-group">
           <label for="exampleInputEmail1">Additonal Monthly Income:</label>
           <select class="form-control" name="income"  select id="IncomeList">
		<option>Select</option> 
        <option value="100-150" id="100-150">£100-£150</option>
        <option value="150-200" id="150-200">£150-£200</option>
        <option value="200-250" id="200-250">£200-£250</option>
		<option value="250-300" id="250-300">£250-£300</option>
		<option value="300-350" id="300-350">£300-£350</option>
		<option value="350-400" id="350-400">£350-£400</option>
		<option value="400-450" id="400-450">£450-£450</option>
	

</select>
</div>
   
      <div class="form-group">
           <label for="exampleInputEmail1">Monthly expense:</label>
           <select class="form-control" name="expense" select id="MonthlyExpense">
		<option>Select</option> 
        <option value="100-200" id="100-200">£100-£200</option>
        <option value="200-300" id="200-300">£200-£300</option>
        <option value="300-400" id="300-400">£300-£400</option>
		<option value="400-500" id="400-500">£400-£500</option>
        <option value="500-600" id="500-600">£500-£600</option>
        <option value="600-700" id="600-700">£600-£700</option>
		<option value="700-800" id="700-800">£600-£700</option>
</select>
</div>
  
  
        <div class="form-group">
           <label for="exampleInputEmail1">Your Accomodation:</label>
 <select class="form-control" name="additonal" select id="studentacm">
  	<option>Select</option> 
        <option value="Student Accomodation" id="Student Accomodation">Student Accomodation</option>
        <option value="Living with parent" id="Living with parent">With Parent</option>
       

</select>
</div>
  
  
 <br><input type="button" class="btn btn-default" value="Calculate" id="submit" /></br>
</form>
          
          
                <div id="sample">

</div> 
  
          
        </div>
        
      </div>
      
    </div>
    
    
    
    
    
  </div>

</div>




           <script type="text/javascript" src="js/income.js"></script>
           </body>         
           

<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;

    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}


</script>


     
 
           
           
        </style>     
           
             <?php include 'includes/footer.php'; ?>      
           