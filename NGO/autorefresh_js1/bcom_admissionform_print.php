<?php
	session_start();
	include("connection.php");
	ob_start();
	//echo $_SESSION['s_id'];
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js ie ie8"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->

    <head>

        <title>M.P. Shah College</title>

        <?php include("head.php"); ?>
        
        <script type="text/javascript">
        function printArticle() {
  var html = jQuery(".cContent").html();
  
  top.consoleRef=window.open('','articleprint',
    'width=900,height=600'
    +',menubar=0'
    +',toolbar=1'
    +',status=0'
    +',scrollbars=1'
    +',resizable=1');
  top.consoleRef.document.writeln(
    '<html><head></head>'
    +'<body onLoad="self.focus()"><div class="wrapper" style="margin-left:10px;" align="center">'
    +'<div class=".cContent">'+html+'</div>'
    +'</div></body></html>'
    );
  top.consoleRef.document.close();
}
</script>
    </head>

    <body style="width:100%" >

        <!-- SITE CONTENT -->

        <?php include("header.php"); ?>    

        <!-- CONTENT -->

        <div id="contentBk">
            <div id="content" class="clearfix">

                <div class="wrapper">

                    <div class="welcome column c-100 clearfix">
                        <h3>Admission Form</h3>
                        <a style="float:right; margin-left:10px;"><input class="submit" type="submit" onClick="printArticle();" value="Print"/></a>
                        <div class="cContent clearfix">
                        <?php
							$email=$_REQUEST['email'];
							$query="SELECT std.*,c.cat_name,g.group_name FROM student_detail as std INNER JOIN category as c ON std.cat_id=c.cat_id INNER JOIN sub_group as g ON std.group_id=g.group_id WHERE std.email="."'$email'";
							
							$sql = mysql_query($query) or die("error in query1");
							if(mysql_num_rows($sql)>0){
								$row=mysql_fetch_array($sql);
							}
							else
							{
								header("location:admissionform_print.php?msg=Oops ! Data Not Found");
							}
							
							?>
                            <div style="border:4px solid;border-radius:25px;">
                                             <table>
                                            <tr>
                                            	<td rowspan="2"><img src="img/collegelogo.JPG" width="80px" height="80px"></td></tr>
                                               <tr>
	                                               <td align="center"><h2>&nbsp;&nbsp;
                                                   SHREE M. P. SHAH COMMERCE COLLEGE</h2>
                                                <h3>&nbsp;&nbsp;SURENDRANAGAR</h3></td></tr>
                                                
                                                </table>
                                            
                            
                        	<table>
                            	<tr><td align="center">
                        	<table border="1" style="font-size:15px">
                            	<tr>
                                <td ><h3 align="center">ADMISSION FORM FOR THE COURSE OF</h3>
                                <h3 align="center"><b>BACHELOR IN COMMERCE</b></h3>
                                <h4 align="center">(Saurashtra University Recognised)</h4>
                                <h4 align="center">YEAR 2014 - 2015 </h4></td>
                                <td align="center"><img src="img/student_photo/<?php echo $row['stdpic'];?>" height="100px" width="100px" align="middle" border="1"></td>
                                </tr> 
                                <tr>
                                <td >Admission Form No.: </td>
                                <td ><?php echo $row['s_id'];?></td>
                                 </tr>                              
                                 <tr>
                                <td>Student full Name : </td>
                                <td><?php echo $row['s_name'];?></td>
                                 </tr>
                                <tr>
                                <td>Gender : </td>
                                <td><?php echo $row['gender'];?></td>
                                 </tr>
                                 <tr>
                                <td>Birth date: </td>
                                <td><?php echo $row['bdate'];?></td>
                                 </tr>
								<tr>
                                <td>Category : </td>
                                <td><?php echo $row['cat_name'];?></td>
                                 </tr>
 								<tr>
                                <td>Father's Full Name : : </td>
                                <td><?php echo $row['father_name'];?></td>
                                 </tr>
 								<tr>
                                <td>Father's Occupation : </td>
                                <td><?php echo $row['father_occupation'];?></td>
                                 </tr>
 								<tr>
                                <td>Father's Annuale Income : </td>
                                <td><?php echo $row['father_income'];?></td>
                                 </tr>
 								<tr>
                                <td>Address : </td>
                                <td><?php echo $row['address'];?></td>
                                 </tr>
 								<tr>
                                <td>City : </td>
                                <td><?php echo $row['city'];?></td>
                                 </tr>
 								<tr>
                                <td>Taluko : </td>
                                <td><?php echo $row['taluka'];?></td>
                                 </tr>
 								<tr>
                                <td>District  : </td>
                                <td><?php echo $row['district'];?></td>
                                 </tr>
 								<tr>
                                <td>Pincode No.: </td>
                                <td><?php echo $row['pincode'];?></td>
                                 </tr>
 								<tr>
                                <td>Mobile No.: </td>
                                <td><?php echo $row['mobileno'];?></td>
                                 </tr>
 								<tr>
                                <td>Email : </td>
                                <td><?php echo $row['email'];?></td>
                                 </tr>
 								<tr>
                                <td>Subject Group : </td>
                                <td><?php echo $row['group_name'];?></td>
                                 </tr>
 	
                            </table>  
                            
 							<br>	                         
                               
                                  <strong>&nbsp;Qualification</strong><br/> <br/>
                            <table border="1" bordercolor="#000000" style="font-size:15px">
                                     <tr>
                                     <td>Exam</td>
                                     <td>Board / University</td>
                                     <td>School Name</td>
                                     <td>Seat No.</td>
                                     <td>Year of Passing</td>
                                     <td>Obtaining Marks</td>
                                     
                                     <td>Percentage</td>
                                     <td>Attempt</td>
                                     </tr>
                                     <tr>
                                     <td>STD - 12</td>
                                     <td><?php echo $row['board'];?></td>
                                     <td><?php echo $row['schoolname'];?></td>
                                     <td><?php echo $row['seatno'];?></td>
                                     <td><?php echo $row['pass_year'];?></td>
                                     <td><?php echo $row['marks'];?></td>
                                     
                                     <td><?php echo $row['percentage'];?></td>
                                     <td><?php echo $row['attemp'];?></td>
                                     </tr>
										
                                   </table>
                                   <table>
                                   <tr>
                                   <td></td><td></td>
                                   </tr>
                                   <tr>
                                   <td><br><br>Parent's Signature : _________________
                                   </td>
                                   <td><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student's Signature : _________________</td>
                                   </tr>
                                   </table>
                                   
                                   <div align="left">
                                   
                            <h3>ENCL :</h3>
                                     <h5>1. Copy Of 12th Marksheet of all Attempts. (Originale and zerox)<br>
                            					2. Copy of School leving certificate.<br>
                                                3. Passport Size Photographs - 2 nos.<br>
                                                3. Copy of Cast Certificate (only for SC/ST/OBC ).<br>
                                                4. Copy of Income Certificate (only for SC/ST/OBC ).<br>	
  
                                     </h5>
                                     </div>
                                     </td></tr></table>
                          </div>
                    </div>
              
                    <div class="clear"></div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->

        <?php include("footer.php"); ?>

        <!-- END SITE CONTENT -->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script src="js/jquery.flexslider-min.js"></script>
        <script src="js/lightbox.js"></script>
        <script src="js/scripts.js"></script>

    z</body>
</html>
