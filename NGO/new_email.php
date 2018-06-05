<?php
	session_start();
	if(isset($_SESSION['admin_name']))
	{
		include("../connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("head.php"); ?>
    <script src="ckeditor/ckeditor.js"></script>
	<!--<link href="sample.css" rel="stylesheet">-->
    <script>
				var editor;

		function changeEnter() {
			// If we already have an editor, let's destroy it first.
			if ( editor )
				editor.destroy( true );

			// Create the editor again, with the appropriate settings.
			editor = CKEDITOR.replace( 'editable', {
				extraPlugins: 'enterkey',
				enterMode:2,
				shiftEnterMode:2
			});
		}

		window.onload = changeEnter;
		
		function GetContents() {
			// Get the editor instance that you want to interact with.
			var editor = CKEDITOR.instances.editable;
		
			// Get editor contents
			// http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-getData
			document.getElementById( 'ddd' ).value = editor.getData();
		}

	</script>
    <style>

		/* Style the CKEditor element to look like a textfield */
		.cke_textarea_inline
		{
			padding: 10px;
			height: 200px;
			overflow: auto;

			border: 1px solid gray;
			-webkit-appearance: textfield;
		}

	</style>
</head>

<body>
    <?php include("header.php"); ?>
<div class="ch-container">
    <div class="row">

		<?php include("sidebar.php"); ?>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Send Email</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
      
            <div class="box-content">
                <form role="form" action="new_email_code.php" method="post">
                	<?php
						$id=$_GET['id'];
					?>
                    <div class="form-group">
                    	<label for="exampleInputEmail1">Subject</label>
                        <input type="text" name="sub" class="form-control" id="exampleInputEmail1" placeholder="Subject of Email">
                        <input type="hidden" name="id" value="<?php echo $id; ?>" >
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Message</label>
                        <!--<div id="editable" contenteditable="true" style="border:inset thin !important">
                        </div>-->
                        <textarea class="cke_textarea_inline" name="body" id="editable" rows="10"></textarea>
                    <br />
                    
                    <button type="submit" name="submit" class="btn btn-default">Submit</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->


    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>

</div><!--/.fluid-container-->

	<?php include("js.php"); ?>
	<script>
		CKEDITOR.inline( 'editable', {
			filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?Type=Images',
			filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?Type=Flash',
			filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
		});
		
		// We need to turn off the automatic editor creation first.
		CKEDITOR.disableAutoInline = true;

		var editor = CKEDITOR.inline( 'editable' );
	</script>

</body>
</html>
<?php
	}
	else
	{
		header("Location:index.php");
	}
?>