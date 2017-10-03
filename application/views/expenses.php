<!DOCTYPE html>
<html>
<head>
	<title>Salary</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
<div class="container">	
	<?php echo form_open('expenses/add'); ?>
		<div class="form-group col">
			<?php echo $this->session->flashdata('succ_msg'); ?>
			<h4>Salary</h4>

				<div class="col-lg-10">
					<select class="form-control col-lg-9" id="salary">
						<option value="">Select</option>
						<?php if(isset($salaries)) : ?>
							<?php foreach ($salaries as $salary) : ?>
								<option value="<?php echo $salary->id; ?>"><?php echo $salary->profit; ?></option>
							<?php endforeach; ?>
						<?php endif; ?>
					</select>
				</div>	
				<br>
				</div>
				<div class="col-sm-5">
			  	<label>SSS</label>
			    <input type="text" class="form-control click-exp"  id="sss"   name="sss">
		  	</div>

			  <div class="col-sm-5">
			  	<label>HMDF</label>
			    <input type="text" class="form-control click-exp" id="hdmf" name="hdmf" >
		  	</div>

		  	<div class="col-sm-5">
			  	<label>PHILHEALTH</label>
			    <input type="text" class="form-control click-exp" id="philhealth" name="philhealth">
		  	</div>

		  	<div class="col-sm-5">
			  	<label>TAX</label>
			    <input type="text" class="form-control click-exp" id="tax" name="tax">
		  	</div>

		  	<div class="col-sm-5">
			    <input type="submit" class="btn btn-default" value="Submit">
		  	</div>

		  	<div class="demo"></div>

		</div>
	<?php echo form_close(); ?>
</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready (function() {
  	$('#salary').change(function() {
      var salaryId = $(this).val();

      $.ajax({
          url: 'http://localhost/salary/index.php/expenses/get_salary/' + salaryId,
          dataType: 'json',
          type: 'get',
          success: function(data) {
              $('#sss').val(data.sss);
              $('#hdmf').val(data.hdmf);
              $('#philhealth').val(data.philhealth);
              $('#tax').val(data.tax);
          }
    		}); 
    }); 
});        

		/*
		$('#salary').change(function(){
			var salary = $(this).val();
			var data = salary.split('|');
			
			$('#sss').val(data[1]);
			$('#hdmf').val(data[2]);
			$('#philhealth').val(data[3]);
			$('#tax').val(data[4]);
		});
		*/
		/*
		$.ajax({
        url: 'faq/get_faq_data',
        data: ({ title: title }),
        dataType: 'json', 
        type: 'post',
        success: function(data) {
            response = jQuery.parseJSON(data);
            console.log(response);
        }             
    });
		/*
		$('#exp1').keyup(function()
		{
			var food;
			var transpo;

			food = parseFloat($('#exp').val());
			transpo = parseFloat($('#exp1').val());

			var result = food + transpo;
			console.log(result);
			$('#result').val(result);
		});
		

		$('.click-exp').on('blur', function(){
			var allowance = $('.click-exp1').val();
			var totalexpense = $('#result').val();
			var expense = $(this).val();

			total =parseInt(totalexpense) - parseInt(expense) ;


			//allowance =parseInt(allowance) - parseInt(totalexpense);
			//$('.demo').html(total);
			$('#result').val(total);
			
		});
		*/
</script>