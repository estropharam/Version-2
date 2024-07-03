  <?php 
  session_start();
  include('../inc/header.php');
  include '../Invoice.php';
  $invoice = new Invoice();
  $invoice->checkLoggedIn();
  if(!empty($_POST['companyName']) && $_POST['companyName']) {	
    $invoice->saveInvoice($_POST);
    header("../Location:invoice_list.php");	
  }
  ?>
<title>Invoice System</title>
<script src="../js/invoice2.js"></script>
<link href="../css/style.css" rel="stylesheet">
<?php include('../inc/container.php');?>
<div class="container content-invoice">
	<form action="" id="invoice-form" method="post" class="invoice-form" role="form" novalidate=""> 
		<div class="load-animate animated fadeInUp">
			<div class="row">
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<h2 class="title">Invoice System</h2>
					<?php include('../menu.php');?>	
				</div>		    		
			</div>
			<input id="currency" type="hidden" value="$">
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<h3>From,</h3>
					<?php echo $_SESSION['user']; ?><br>	
					<?php echo $_SESSION['address']; ?><br>	
					<?php echo $_SESSION['mobile']; ?><br>
					<?php echo $_SESSION['email']; ?><br>	
				</div>      		
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right">
					<h3>To,</h3>
					<div class="form-group">
						<input type="text" class="form-control" name="companyName" id="companyName" placeholder="Company Name" autocomplete="off">
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="3" name="address" id="address" placeholder="Your Address"></textarea>
					</div>
					
				</div>
			</div>
		</div>
	</form>
</div>