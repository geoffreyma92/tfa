<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="img/favicon.ico">

	<title>UTS | Travel Funding Approval</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

	<!-- Custom styles for this template -->
	<link href="../css/styles.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<div class="navbar-brand">
					<div id="uts-logo" class="pull-left">
						<img src="http://www.uts.edu.au/sites/default/files/logo_2.png" class="img-responsive"/>
					</div>
				</div>
				<p class="navbar-text">TFAS</p>
			</div>
		</div>
	</nav>


	<div class="container">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist" id="myTab">
			<li id="personal-tab" class="active"><a href="#personal-details" role="tab" data-toggle="tab">Personal</a>
			</li>
			<li id="travel-tab"><a href="#travel-details" role="tab" data-toggle="tab">Travel</a>
			</li>
			<li id="funding-tab"><a href="#funding-details" role="tab" data-toggle="tab">Funding</a>
			</li>
		</ul>

		<form role="form">
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane fade in active" id="personal-details">
					<?php include 'personal-details.php'; ?>
					<?php// include 'travel-details.php'; ?>
				</div>

				<div class="tab-pane fade" id="travel-details">
					<?php include 'travel-details.php'; ?>
				</div>

				<div class="tab-pane fade" id="funding-details">
					<?php include 'funding-details.php'; ?>
				</div>
			</div>
		</form>
	</div>
	<!-- /container -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="js/workaround.js"></script>

	<script type="text/javascript">
		$(document).ready(function () {
			$('#myTab a').click(function (e) {
				e.preventDefault()
				$(this).tab('show')
			});

			$('#myTab a:first').tab('show');


			$('#personal-next').click(function (e) {
				$('#travel-tab').addClass('active');
				$('#personal-tab').removeClass('active');
			});

			$('#travel-next').click(function (e) {
				$('#funding-tab').addClass('active');
				$('#travel-tab').removeClass('active');
			});

			$('#travel-back').click(function (e) {
				$('#personal-tab').addClass('active');
				$('#travel-tab').removeClass('active');
			});


			$('#funding-back').click(function (e) {
				$('#travel-tab').addClass('active');
				$('#funding-details').removeClass('active');
			});

		    $("#other_conf").hide();


			$(".conf_quality").click(function () {
				var conf_q = $(this).val();
				if (conf_q == "other") {
					$("#other_conf").show();
					$("#conference_quality_div").removeClass('col-xs-12');
					$("#conference_quality_div").addClass('col-xs-6');
		        }
		        else{
		        	$("#other_conf").hide();
					$("#conference_quality_div").addClass('col-xs-12');
					$("#conference_quality_div").removeClass('col-xs-6');
		        }
			});

			$(".research-strength").hide();

			$(".rs").click(function () {
				var rs = $(this).val();
				if (rs == 1) {
					$(".research-strength").show();
		        }
		        else{
		        	$(".research-strength").hide();
		        }
			});

			$(".vc_grant_amount").hide();
			$(".vc_fund").click(function () {
				var vc_fund = $(this).val();
				if (vc_fund == 1) {
					$(".vc_grant_amount").show();
					$(".vc_fund_div").removeClass('col-sm-12');
					$(".vc_fund_div").addClass('col-sm-6');
		        }
		        else{
		        	$(".vc_grant_amount").hide();
		        	$(".vc_fund_div").addClass('col-sm-12');
					$(".vc_fund_div").removeClass('col-sm-6');
		        }
			});

			$(".pep-dates").hide();
			$(".pep").click(function () {
				var pep = $(this).val();
				if (pep == 1) {
					$(".pep-dates").show();
		        }
		        else{
		        	$(".pep-dates").hide();
		        }
			});

			$("#contrib_text").hide();
			$(".special_duties").click(function () {
				var pep = $(this).val();
				if (pep == 1) {
					$("#contrib_text").show();
		        }
		        else{
		        	$("#contrib_text").hide();
		        }
			});
			


		});
	</script>

	<script type="text/javascript">
		$(document).on('change', '.btn-file :file', function() {
	    var input = $(this),
	        numFiles = input.get(0).files ? input.get(0).files.length : 1,
	        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
	    input.trigger('fileselect', [numFiles, label]);
		});

		$(document).ready(function() {
		    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {

		        var input = $(this).parents('.input-group').find(':text'),
		            log = numFiles > 1 ? numFiles + ' files selected' : label;

		        if (input.length) {
		            input.val(log);
		        } else {
		            if (log) alert(log);
		        }

		    });
		});

	</script>


</body>

</html>
