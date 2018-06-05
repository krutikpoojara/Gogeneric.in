<div class=" row">
	<?php /*?><?php
		$query2="select * from tbl_emp_registration";
		$sql2=mysql_query($query2) or die("error in query2");
		$count2=mysql_num_rows($sql2);
		
		$query3="select * from tbl_company_registration";
		$sql3=mysql_query($query3) or die("error in query3");
		$count3=mysql_num_rows($sql3);
		
		$query4="select * from tbl_partner";
		$sql4=mysql_query($query4) or die("error in query4");
		$count4=mysql_num_rows($sql4);
	?><?php */?>
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="6 new members." class="well top-block" href="#">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Total Users</div>
            <div><?php //echo $count2; ?></div>
            <span class="notification">6</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="4 new pro members." class="well top-block" href="#">
            <i class="glyphicon glyphicon-star green"></i>

            <div>Companies</div>
            <div><?php //echo $count3; ?></div>
            <span class="notification green">4</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="$34 new sales." class="well top-block" href="#">
            <i class="glyphicon glyphicon-shopping-cart yellow"></i>

            <div>Sales</div>
            <div>$13320</div>
            <span class="notification yellow">$34</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="12 new messages." class="well top-block" href="#">
            <i class="glyphicon glyphicon-random red"></i>

            <div>partners</div>
            <div><?php //echo $count4; ?></div>
            <span class="notification red">12</span>
        </a>
    </div>
</div>