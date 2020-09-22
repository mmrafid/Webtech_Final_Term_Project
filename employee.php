<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Search Employee</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  
  <link rel="stylesheet" href="employee.css">
  
 </head>
 
 <body>
 
 
  <section class="container">
   <br />
   <h2 align="center">Search for employee</h2><br />
   <center><div class="searchDiv">
    <div class="searchx">
     <span class="indicateSearchField">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by employee name" class="search" />
    </div>
   </div>
   </center>
   
   <br />
   <div id="result"></div>
  </section>
  
  
  
 </body>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"employeeSearch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>