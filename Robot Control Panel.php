<!DOCTYPE html>
    
<html>
    <head>
        <meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet">
        <link href="styles.css" rel="stylesheet" type="text/css" />
          <style>
           h1{color: #b00d00} 
          div
          {
            text-align:center;
            }
			
          </style>
    </head>
	
<?php
$host="127.0.0.1 ";
$user="root";
$password="";
$database= "robot_control_panel";

$connect= mysqli_connect('127.0.0.1','root' , '', 'robot_control_panel');
if(mysqli_connect_errno()) {
die("cannot connect database".mysqli_connect_errno());
}
else {
 echo 'Database is Connected';
 }
 
?>
    
    <body>

     <div > <h1>Robot Control Panel</h1>  </div>
	 <table align="left">
	 <img src="https://h.top4top.io/p_163731cyt1.png" alt="myrobot" style="width:306px;height:409px;">
     
        <table align="right">
         
            <tr>
                   <td>   </td>
                   <td>  <button class="button">  <img src="https://g.top4top.io/p_16478hs3f1.png" width="150" height="150">  </button>  </td>
                   <td>   </td>
             </tr>
        
             <tr>
                   <td>  <button class="button"> <img src="https://h.top4top.io/p_1637hk77g1.png" width="150" height="150">  </button>   </td>
                   <td> <button class="button"> <img src="https://j.top4top.io/p_163755gte3.png" width="150" height="150"> </button> </td>
                   <td><button class="button"> <img src="https://i.top4top.io/p_1637k9xeo2.png" width="150" height="150">  </button> </td>
            </tr>
                        
              <tr>
                   <td>   </td>      <td>
                   <button class="button"> <img src="https://h.top4top.io/p_1647iyi1b2.png" width="150" height="150">  </button>  </td >
                   <td>   </td>
             </tr>
              
        </table>
      
    </body>
    
</html>