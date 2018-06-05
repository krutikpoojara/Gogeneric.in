<?php
	include("connection.php");
	
	session_start();
	
	
	echo "<script type='text/javascript'>
					weatherRefresh.start();
				</script>";
	
/*	echo "<script type='text/javascript' src='autorefresh_js/timer.js'></script>";*/

	//echo preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $p);
	
	$question1=array();
		$op_a=array();
		$op_b=array();
		$op_c=array();
		$op_d=array();
		$op_ans=array();
		
	$sql_exam = "select * from tbl_exam where exam_id=".$_SESSION['e_id']; 
					//echo $sql_exam;
					
					$result_exam = mysql_query($sql_exam) or die("errer");
					$row_e=mysql_fetch_assoc($result_exam);	
		
	if(!isset($_SESSION['index']))
	{
			$_SESSION['index']=0;
			
							
	}
	else if($_SESSION['index']<$row_e['question_num']-1)
	{
		$_SESSION['index']=$_SESSION['index']+1;
	}
	else
	{
			//echo "Exam is Over...";
			session_destroy();
			echo "<script type='text/javascript'>
					weatherRefresh.over();
					clear_data2();
				</script>";
			echo "<br/>";	
			//echo "<img src='images/Exam Is Over.jpg'/>";
			$r="<div class='alert alert-success'><strong>Your Exam is Over..</strong></div>";
			$r1="<div class='alert alert-warning'><strong>Share Your Experience With Your Friends..</strong></div>";
			$r2="<div class='alert alert-info'><strong>Give Other Exams and Test Your Knowledge..</strong></div>";
			echo $r;
			echo $r1;
			echo $r2;
			//unset($_SESSION['index']);
			exit();
	
	}
	
		$qno=$_SESSION['index'];
		
		$i=0;
		$sql_question1 = "select * from tbl_question where exam_id=".$_SESSION['e_id'];
		
		$result_question = mysql_query($sql_question1) or die("errer");
		//$a = array();
		if(mysql_num_rows($result_question)){
			while($row_q=mysql_fetch_assoc($result_question)){
				
			$question1[$i]=$row_q['question_name'];
			$op_a[$i]=$row_q['option_a'];
			$op_b[$i]=$row_q['option_b'];
			$op_c[$i]=$row_q['option_c'];
			$op_d[$i]=$row_q['option_d'];
			$op_ans[$i]=$row_q['answer'];	
			$i++;
			}
		}

		//while($row_q=mysql_fetch_assoc($result_question)){
			//echo "<h2>&nbps;</h2>";
			$qno1=$qno+1;
		   $question="<h4>(".$qno1.")&nbsp;&nbsp;  ".$question1[$qno]."</h4>"; 
          
		  	echo $question;
			
			
           $optiona="<div class='alert alert-warning' value='A' name='q1' id='A' onClick='cheackans(this.id)'><strong name='A' id='A'>(A)&nbsp;&nbsp;&nbsp;&nbsp;</strong>".$op_a[$qno]."</div>";
           
		   $optionb="<div class='alert alert-warning' value='B' name='q1' id='B' onClick='cheackans(this.id)'><strong name='B' id='B'>(B)&nbsp;&nbsp;&nbsp;&nbsp;</strong>".$op_b[$qno]."</div>";
		   
		   $optionc="<div class='alert alert-warning' value='C' name='q1' id='C' onClick='cheackans(this.id)'><strong name='C' id='C'>(C)&nbsp;&nbsp;&nbsp;&nbsp;</strong>".$op_c[$qno]."</div>";
           
		   $optiond="<div class='alert alert-warning' value='D' name='q1' id='D' onClick='cheackans(this.id)'><strong name='D' id='D'>(D)&nbsp;&nbsp;&nbsp;&nbsp;</strong>".$op_d[$qno]."</div>";
           
            echo $optiona;
			echo $optionb;
			echo $optionc;
			echo $optiond;
			echo "<input type='hidden' id='ans2' name='ans2' value=".$op_ans[$qno].">";
			
			
				
?>