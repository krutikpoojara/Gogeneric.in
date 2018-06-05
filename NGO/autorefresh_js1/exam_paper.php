<?php

	include("connection.php");
	session_start();
	if(!isset($_SESSION['exam_id']))
	{
			$_SESSION['e_id']=$_REQUEST['exam_id'];
	}
?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
</html><![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
</html><![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> </html><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <title>Magic Minds - Job Updates</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Description for my template" />
    <meta name="author" content="Esmet" />
    <meta charset="UTF-8" />

    <?php include("head.php");?>
    
    <!--<script type='text/javascript' src='autorefresh_js/load_unload_js.js'></script>
    <script type='text/javascript' src='autorefresh_js/cheackresult.js'></script>
    <script type='text/javascript' src='autorefresh_js/ca-pub-9165168790934890.js'></script>
    <script type='text/javascript' src='autorefresh_js/jquery.js'></script>
    <script type='text/javascript' src='autorefresh_js/load.js'></script>-->
	<script type="text/javascript">
	
	function removediv()
	{		
			//loadjscssfile("autorefresh_js/cheackresult.js", "js"); //dynamically load and add this .js file
			loadjscssfile("autorefresh_js/ca-pub-9165168790934890.js", "js"); //dynamically load "javascript.php" as a JavaScript file
			loadjscssfile("autorefresh_js/timer3.js", "js"); 
			loadjscssfile("autorefresh_js/jquery.js", "js"); ////dynamically load and add this .css file
			loadjscssfile("autorefresh_js/load.js", "js");
			
			//weatherRefresh.start();
			/*unloadJS('cheackresult.js','autorefresh_js/cheackresult.js');
			unloadJS('ca-pub-9165168790934890.js','autorefresh_js/ca-pub-9165168790934890.js');
			unloadJS('jquery.js','autorefresh_js/jquery.js');
			unloadJS('load.js','autorefresh_js/load.js');
			*/
			//var div1 = document.getElementById("instruction");
          	//div1.remove();
			//time_count2();
	}
	
	function rmovejs()
	{
		//setInterval('show_data()', 10000).stop();
  		//show_data();
		
	}
	
</script>

    
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="../../../../storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
        </div>
    <![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>

    <!-- This one in here is responsive menu for tablet and mobiles -->
   <?php include("header.php");?>
    
    
    <!-- Being Page Title -->
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="index.php">Home</a></h6>
                    <h6><span class="page-active">Paper</span></h6>
						
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <!-- Here begin Main Content -->
          <div class="col-md-8">

                
                <div class="row">
                    <div class="col-md-12">
                     
                     <div class="col-md-6">
                                <h4>Progress Bars</h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0" id="r_progress" name="r_progress">
                                        <span class="sr-only" id="r_p" name="r_p">0% Complete (success)</span>
                                    </div>
                                </div>
                                
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:0" id="w_progress" name="w_progress">
                                        <span class="sr-only" id="r_p" name="r_p">0% Complete</span>
                                    </div>
                                </div>
                                
                                <div class="alert alert-success">
                                    <h4 class="timer" align="center">Right Ans :- <span id="right_ans">0</span> </h4>
                                </div>
                                
                                <div class="alert alert-danger">
                                    <h4 class="timer" align="center">Wrong Ans :- <span id="wrong_ans">0</span> </h4>
                                </div>
                                 
                                <div class="alert alert-warning">
                                    <h4 id="countdown" class="timer" align="center"> </h4>
                                </div>

                               
                            </div>
                     
                     <div class="col-md-6">
                     				
                                <div class="show_content">
                                <h4></h4>
                                <div class="alert alert-success">
                                    <strong>Best of Luck..</strong> Exam Question is Appier Heare Wait for few secounds After Click on Start Exam Button. 
                                </div>
                                <div class="alert alert-info">
                                    <strong>Note :</strong> Just click once on the Answer. you can see that Right answer is in Green color and wrong anser is in Red color.
                                </div>
                                <div class="alert alert-warning">
                                    <strong>Warning !</strong> If you are not give the answer of the question in 30 sec. than new question is automaticaly display on screen .
                                </div>
                               
                               </div>
                            </div>  
                     </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

                
            </div> <!-- /.col-md-8 -->


            <!-- Here begin Sidebar -->
            <div class="col-md-4">

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Exam Instruction</h4>
                        
                    </div>
                    
                    <div class="widget-inner">
                        <div class="prof-list-item clearfix">
                            <div class="prof-details">
                            <?php
				  	
								$sql_exam = "select * from tbl_exam where exam_id=".$_REQUEST['exam_id']; 
								$result_exam = mysql_query($sql_exam) or die("errer");
								$row_e=mysql_fetch_assoc($result_exam);
								
								$sname="select subject_name from tbl_exam_subject where subject_id=".$_REQUEST['exam_id'];
								$result_sname = mysql_query($sname) or die("errer");
								$row_sn=mysql_fetch_assoc($result_sname);
								
								
		   					?>

                               
                                <h4>Subject Name :  <?php echo $row_sn['subject_name'];?></h4>
                                <h5 class="prof-name-list">Total No. of Question : <span id="qno" name="qno"><?php echo $row_e['question_num'];?></span></h5>
                                <h5 class="prof-name-list">Total Marks : <?php echo $row_e['exam_marks'];?> </h5>
                                <h5 class="prof-name-list">Don't refresh the page.</h5>
                                <p class="small-text">Each question carry 1 mark, no negative marks.</p>
                    			<input type="button" id="start_e" name="start_e" value="Click to Start Exam" onclick="removediv();" class="mainBtn pull-right" style="height:35px;width:150px"/>            
							            
	                                
                               
                            </div> <!-- /.prof-details -->
                        </div> <!-- /.prof-list-item -->
                                                
                        </div> <!-- /.prof-list-item -->
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

                
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

            </div> <!-- /.col-md-4 -->
    
        </div> <!-- /.row -->
    </div> <!-- /.container -->

    <!-- begin The Footer -->
    <?php include("footer.php");?>
    <!-- end of footer-->
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/plugins.js"></script>
    <script src="./js/custom.js"></script>
    
	<script type='text/javascript' src='autorefresh_js/load_unload_js.js'></script>
    <!--<script type='text/javascript' src='autorefresh_js/cheackresult.js'></script>-->
    <script type="text/javascript">
	
	
	function cheackans(i)
		{
			var counter_r=0;
			var counter_w=0;
					
			var da=document.getElementById("A");
			var db=document.getElementById("B");
			var dc=document.getElementById("C");
			var dd=document.getElementById("D");
			
			
			var rightans=document.getElementById("ans2").value;
			var temp=document.getElementById(rightans);
			
			if(i=="A")
			{
				if(rightans=="A")
				{
					
					da.className="alert alert-success";
					rprogress();	
					document.getElementById('right_ans').innerHTML = 1+parseInt(document.getElementById('right_ans').innerHTML);
				}
				else
				{
					
					
					da.className="alert alert-danger";
					temp.className="alert alert-success";
					wprogress()
					document.getElementById('wrong_ans').innerHTML = 1+parseInt(document.getElementById('wrong_ans').innerHTML);
				}
			
			}
			
			if(i=="B")
			{
				if(rightans=="B")
				{
					
					db.className="alert alert-success";
					rprogress();
					document.getElementById('right_ans').innerHTML = 1+parseInt(document.getElementById('right_ans').innerHTML);
				}
				else
				{
					
					db.className="alert alert-danger";
					temp.className="alert alert-success";
					wprogress();
					document.getElementById('wrong_ans').innerHTML = 1+parseInt(document.getElementById('wrong_ans').innerHTML);
				}

			}
			
			if(i=="C")
			{
				if(rightans=="C")
				{
					dc.className="alert alert-success";	
					rprogress();
					document.getElementById('right_ans').innerHTML = 1+parseInt(document.getElementById('right_ans').innerHTML);
				}
				else
				{
					
					dc.className="alert alert-danger";
					temp.className="alert alert-success";
					wprogress();
					document.getElementById('wrong_ans').innerHTML = 1+parseInt(document.getElementById('wrong_ans').innerHTML);
				}
			}
			
			if(i=="D")
			{
				if(rightans=="D")
				{
					
					dd.className="alert alert-success";
					rprogress();
					document.getElementById('right_ans').innerHTML = 1+parseInt(document.getElementById('right_ans').innerHTML);
				}
				else
				{
					
					dd.className="alert alert-danger";
					temp.className="alert alert-success";
					wprogress();
					document.getElementById('wrong_ans').innerHTML = 1+parseInt(document.getElementById('wrong_ans').innerHTML);
				}

			}
			
			da.disabled=true;
			db.disabled=true;
			dc.disabled=true;
			dd .disabled=true;
			
				
			var delay=3000;//1 seconds
			    setTimeout(function(){
				//(new countdown()).clear_timer();	
				//weatherRefresh.stop();
				weatherRefresh.start();
				clear_data();
				show_data();
				
				
    //your code to be executed after 1 seconds
    },delay);
			
		}
		
		function rprogress()
		{
			var qno=document.getElementById("qno").innerHTML;
			var p=100/qno;
		
			var r_progress=document.getElementById("r_progress");
			//var w_progress=document.getElementById("w_progress");
			var v=parseInt(r_progress.style.width)+p;
			
			
			r_progress.style.width=v+"%";
			//var qno=document.getElementById("qno").innerHTML;
			//var p=100/qno;
		}
		function wprogress()
		{
			var qno=document.getElementById("qno").innerHTML;
			var p=100/qno;
			
			//var r_progress=document.getElementById("r_progress");
			var w_progress=document.getElementById("w_progress");
			var v=parseInt(w_progress.style.width)+p;
			
			w_progress.style.width=v+"%";
			//var qno=document.getElementById("qno").innerHTML;
			//var p=100/qno;
		}
		/*function result()
		{
			document.getElementById('r_counter').innerHTML=0;
			document.getElementById('w_counter').innerHTML=0;
		}*/
		
	</script>
   
    <!--<script type='text/javascript' src='autorefresh_js/ca-pub-9165168790934890.js'></script>
    <script type='text/javascript' src='autorefresh_js/jquery.js'></script>
    <script type='text/javascript' src='autorefresh_js/load.js'></script>-->
</body>
</html>