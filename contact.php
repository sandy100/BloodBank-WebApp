<?php session_start();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood Bank</title>
<meta name="keywords" content="graphite theme, professional, free templates, CSS, HTML" />
<meta name="description" content="Graphite Theme, professional free CSS template from templatemo.com website" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />


<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
  
</head>
<body id="sub_page">
<div id="templatemo_wrapper">
	<div id="templatemo_top"> 
    	<div id="templatemo_login">
            
<?php 
include('includes/top.inc.php');
?>
		</div> 
    </div> <!-- end of top -->
    
  	<div id="templatemo_header">
    	
		<div id="site_title">
		     <h1><a href="index.php" rel="nofollow">Blood bank</a></h1>
	    </div> 
        
		<div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
              	<li><a href="index.php">Home</a></li>
         		<li><a href="blood_request.php">Blood Request</a></li>
          		<li><a href="search.php">Search</a></li>
              	<li><a href="register.php">Register</a></li>
		        <li><a href="last_donations.php">Last Donations</a></li>
                <li><a href="contact.php"  class="selected">Contact</a></li>
				<li><a href="about_blood.php">About Blood</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->
    
    <div id="templatemo_main">
    	<h2>Contact Information</h2>
        <div class="col_w630 float_l">
        	
             <div id="contact_form">
        
                <h4>Send us a message...</h4>
                
                <form method="post" name="contact" action="process_contact.php">
					
					<label for="author">Name:</label> <input type="text" id="name" name="name" class="required input_field" />
					<div class="cleaner h10"></div>
																	
					<label for="email">Email:</label> <input type="text" class="validate-email required input_field" name="email" id="email" />
					<div class="cleaner h10"></div>
															
					<label for="subject">Subject:</label> <input type="text" class="validate-subject required input_field" name="subject" id="subject"/>				               
					<div class="cleaner h10"></div>
											
					<label for="text">Message:</label> <textarea id="message" name="message" rows="0" cols="0" class="required"></textarea>
					<div class="cleaner h10"></div>				
																
					<input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
					<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_l" />
										
				</form>
        
            </div> 
        </div>
        
        <div class="col_w300 float_r">
            <div class="col_fw">	
            	<h4>Mailing <a title="imagens vetoriais grátis from pt.mystockvector.com"  href="#"  class="col_allw300_title" target="_blank">Address</a></h4>
                <h6><strong>BloodBank Developer Team</strong></h6>
                
           <br />
				<h6><strong>Contact Numbers:</strong></h6>
				<strong>Phone:</strong>+977 9848701388 ,+977 9841450311,+977 9848858282<br />
                <strong>Email:</strong> <a href="mailto:saneep.bhatt59@gmail.com">sandeep.bhatt59@gmail.com</a>
            </div>            
            <div class="col_fw_last">
                <h4>Our Location</h4>
                <div id="map"><a class="pirobox" href="images/map.png" title="Our Location"><img src="images/map.png" alt="Our Location" /></a></div>                
            </div>
        </div>

        <div class="cleaner"></div>
    </div> <!-- end of main -->
</div> <!-- end of wrapper -->

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
        Copyright © 2015 <a href="#">BloodBank</a> | 
        Designed and Developed by <a href="" rel="nofollow" target="_parent">BloodBank Team</a>
        <div class="cleaner"></div>
    </div>
</div> 
  

<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>