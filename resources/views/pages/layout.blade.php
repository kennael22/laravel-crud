<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

    <title>My Layout</title>
    <link rel="stylesheet" type="text/css" href="/css/classic.css">
</head>

<body>
	<div class="wrapper">
		<?php echo view('templates/sidebar');?><!-- endofsidebar -->
		<div class="main"> <!-- startoftopbar -->
		<?php echo view('templates/topbar')?>
		<?php echo view($view)?>    <!-- contentofpage -->
		<?php echo view('templates/footer.php')?>    
		</div> <!-- endoftopbar -->
	</div>
    <script type="text/javascript" src="/js/app.js"></script>
    <!-- <script type="text/javascript" src="/js/settings.js"></script> -->
<script type="text/javascript">
	$(document).ready(function(){

	// Datatables basic
			$("#datatables-basic").DataTable({
				"lengthMenu":[[10,25,50,100,-1],[10,25,50,100,"All"]],
        		"processing": true,
				"responsive": true,
				"serverside":true,
				"order":[],
				"ajax": {
					"url":"<?php echo base_url('pages/tablelist')?>",
					"type":"post"
				}
				,
        "columnDefs": [{
            "targets":[5],
            "orderable":false
        }]
			});
			$('#datatables-basic tbody').on('click','.btnedit',function(){
					id=$(this).attr('id');
					$.ajax({
					    url: "<?php echo base_url("pages/edit");?>",
					    method:"POST",
					    data:{id:id},
					    type:'ajax',
					    dataType:'json',
					    success:function(data){
					    	$('#addModal').modal('show');
					    	$('#name').val(data[0].name);
					    	$('#username').val(data[0].username);
					    	$('#email').val(data[0].email);
					    	$('#phone').val(data[0].phone);
					    	$('#dob').val(data[0].dob);
					    	$('#addModal').modal('show');
					    	$('#id').val(id);
							$('.modal-title').text('Update Data');
							$('#type').html("<button type='submit' class='btn btn-primary' id='btnsave'>Update</button>")
						
					    	
			    }
			});
			});
			$('#datatables-basic tbody').on('click','.btndelete',function(){
					id=$(this).attr('id');
					$.ajax({
					    url: "<?php echo base_url("pages/delete");?>",
					    method:"post",
					    type:'ajax',
					    data:{id:id},
					    dataType:'json',
					    success:function(data){
					    	if(data.success){
					    		$('#success_msg').html(data.success);
			    		$('#main_msg').addClass("alert alert-success alert-dismissible");
			    			$('#message').addClass('alert-message');
			    			
			    			$('#frmadd')[0].reset();
			    			$('#addModal').modal('hide');
			    			setTimeout(function(){$('#main_msg').removeClass('alert alert-success alert-dismissible');
	                        $('#success_msg').html("");$('#message').removeClass('alert-message');
	                        },5000);
	                        // $("#mytbl").load(location.href + " #mytbl");
	                        $("#datatables-basic").DataTable().ajax.reload();

					    	}
					    }
					});

			});
			$('#btnadd').on('click',function(){
				$('#addModal').modal('show');
				$('.modal-title').text('Insert Data');
				$('#type').html("<button type='submit' class='btn btn-primary' id='btnsave'>Save</button>")
			});
			$("#addModal").on("hidden.bs.modal",function(){
				console.log('hidden');
				$('#validation-phone-error').text('');
				$('#validation-dob-error').text('');
				$('#validation-username-error').text('');
				$('#validation-email-error').text('');
				$('#validation-name-error').text('');

			    				$('#phone').removeClass('is-invalid');
			    				$('#dob').removeClass('is-invalid');
			    				$('#username').addClass('is-invalid');
			    				$('#email').removeClass('is-invalid');
			    				$('#name').removeClass('is-invalid');
			});
			$('#frmadd').on('submit',function(event){
				event.preventDefault();
				if($('#btnsave').text()=="Save"){
						$.ajax({
			    url: "<?php echo base_url("pages/insert/add");?>",
			    method:"post",
			    type:'ajax',
			    data:{name:$('#name').val(),email:$('#email').val(),username:$('#username').val(),phone:$('#phone').val(),dob:$('#dob').val()},
			    dataType:'json',
			    success:function(data){
			    	if(data.errors){
			    			if(data.errors.name){
			    				$('#name').addClass('is-invalid');
			    				$('#validation-name-error').text(data.errors.name);
			    				// console.log(data.errors.name)
			    			}else{
			    				$('#name').removeClass('is-invalid');
			    				$('#validation-name-error').text('');
			    				
			    			}
			    			if(data.errors.email){
			    				$('#email').addClass('is-invalid');
			    				$('#validation-email-error').text(data.errors.email);
			    				// console.log(data.errors.email)
			    			}else{
			    				$('#email').removeClass('is-invalid');
			    				$('#validation-email-error').text('');
			    				
			    			}
			    			if(data.errors.username){
			    				$('#username').addClass('is-invalid');
			    				$('#validation-username-error').text(data.errors.username);
			    				// console.log(data.errors.name)
			    			}else{
			    				$('#username').removeClass('is-invalid');
			    				$('#validation-username-error').text('');
			    				
			    			}
			    			if(data.errors.dob){
			    				$('#dob').addClass('is-invalid');
			    				$('#validation-dob-error').text(data.errors.dob);
			    				// console.log(data.errors.name)
			    			}else{
			    				$('#dob').removeClass('is-invalid');
			    				$('#validation-dob-error').text('');
			    				
			    			}
			    			if(data.errors.phone){
			    				$('#phone').addClass('is-invalid');
			    				$('#validation-phone-error').text(data.errors.phone);
			    				// console.log(data.errors.name)
			    			}else{
			    				$('#phone').removeClass('is-invalid');
			    				$('#validation-phone-error').text('');
			    				
			    			}
			    	}
			    	if(data.success){
			    		$('#success_msg').html(data.success);
			    		$('#main_msg').addClass("alert alert-success alert-dismissible");
			    			$('#message').addClass('alert-message');
			    			
			    			$('#frmadd')[0].reset();
			    			$('#addModal').modal('hide');
			    			setTimeout(function(){$('#main_msg').removeClass('alert alert-success alert-dismissible');
	                        $('#success_msg').html("");$('#message').removeClass('alert-message');
	                        },5000);
	                        // $("#mytbl").load(location.href + " #mytbl");
	                        $("#datatables-basic").DataTable().ajax.reload();


			    	}
			    }
			});
				}
				if($('#btnsave').text()=="Update"){
					$.ajax({
			    url: "<?php echo base_url("pages/insert/update");?>",
			    method:"post",
			    type:'ajax',
			    data:{id:$('#id').val(),name:$('#name').val(),email:$('#email').val(),username:$('#username').val(),phone:$('#phone').val(),dob:$('#dob').val()},
			    dataType:'json',
			    success:function(data){
			    	if(data.errors){
			    			if(data.errors.name){
			    				$('#name').addClass('is-invalid');
			    				$('#validation-name-error').text(data.errors.name);
			    				// console.log(data.errors.name)
			    			}else{
			    				$('#name').removeClass('is-invalid');
			    				$('#validation-name-error').text('');
			    				
			    			}
			    			if(data.errors.email){
			    				$('#email').addClass('is-invalid');
			    				$('#validation-email-error').text(data.errors.email);
			    				// console.log(data.errors.email)
			    			}else{
			    				$('#email').removeClass('is-invalid');
			    				$('#validation-email-error').text('');
			    				
			    			}
			    			if(data.errors.username){
			    				$('#username').addClass('is-invalid');
			    				$('#validation-username-error').text(data.errors.username);
			    				// console.log(data.errors.name)
			    			}else{
			    				$('#username').removeClass('is-invalid');
			    				$('#validation-username-error').text('');
			    				
			    			}
			    			if(data.errors.dob){
			    				$('#dob').addClass('is-invalid');
			    				$('#validation-dob-error').text(data.errors.dob);
			    				// console.log(data.errors.name)
			    			}else{
			    				$('#dob').removeClass('is-invalid');
			    				$('#validation-dob-error').text('');
			    				
			    			}
			    			if(data.errors.phone){
			    				$('#phone').addClass('is-invalid');
			    				$('#validation-phone-error').text(data.errors.phone);
			    				// console.log(data.errors.name)
			    			}else{
			    				$('#phone').removeClass('is-invalid');
			    				$('#validation-phone-error').text('');
			    				
			    			}
			    	}
			    	if(data.success){
			    			$('#success_msg').html(data.success);
			    			$('#main_msg').addClass("alert alert-success alert-dismissible");
			    			$('#message').addClass('alert-message');
			    			
			    			$('#frmadd')[0].reset();
			    			$('#addModal').modal('hide');
			    			setTimeout(function(){$('#main_msg').removeClass('alert alert-success alert-dismissible');
	                        $('#success_msg').html("");$('#message').removeClass('alert-message');
	                        },5000);
	                        // $("#mytbl").load(location.href + " #mytbl");
	                        $("#datatables-basic").DataTable().ajax.reload();

			    	}
			    }
			});
				}
				
			});
			function messages(){
							$('#main_msg').addClass("alert alert-success alert-dismissible");
			    			$('#message').addClass('alert-message');
			    			
			    			$('#frmadd')[0].reset();
			    			$('#addModal').modal('hide');
			    			setTimeout(function(){$('#main_msg').removeClass('alert alert-success alert-dismissible');
	                        $('#success_msg').html("");$('#message').removeClass('alert-message');
	                        },5000);
	                        // $("#mytbl").load(location.href + " #mytbl");
	                        $("#datatables-basic").DataTable().ajax.reload();
				}
				$("#usa_map").vectorMap({
				map: "us_aea",
				backgroundColor: "transparent",
				zoomOnScroll: false,
				normalizeFunction: "polynomial",
				hoverOpacity: .7,
				hoverColor: false,
				regionStyle: {
					initial: {
						fill: "#DCE3E8"
					}
				},
				markerStyle: {
					initial: {
						"r": 9,
						"fill": window.theme.info,
						"fill-opacity": .9,
						"stroke": "#fff",
						"stroke-width": 7,
						"stroke-opacity": .4
					},
					hover: {
						"stroke": "#fff",
						"fill-opacity": 1,
						"stroke-width": 1.5
					}
				},
				markers: [{
					latLng: [37.77, -122.41],
					name: "San Francisco: 375"
				}, {
					latLng: [40.71, -74.00],
					name: "New York: 350"
				}, {
					latLng: [39.09, -94.57],
					name: "Kansas City: 250"
				}, {
					latLng: [36.16, -115.13],
					name: "Las Vegas: 275"
				}, {
					latLng: [32.77, -96.79],
					name: "Dallas: 225"
				}]
			});
			setTimeout(function() {
				$(window).trigger('resize');
			}, 250)
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "line",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Sales ($)",
						fill: true,
						backgroundColor: "transparent",
						borderColor: window.theme.primary,
						data: [2015, 1465, 1487, 1796, 1387, 2123, 2866, 2548, 3902, 4938, 3917, 4927]
					}, {
						label: "Orders",
						fill: true,
						backgroundColor: "transparent",
						borderColor: window.theme.tertiary,
						borderDash: [4, 4],
						data: [928, 734, 626, 893, 921, 1202, 1396, 1232, 1524, 2102, 1506, 1887]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.05)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 500
							},
							display: true,
							borderDash: [5, 5],
							gridLines: {
								color: "rgba(0,0,0,0)",
								fontColor: "#fff"
							}
						}]
					}
				}
			});
			$("#datatables-dashboard-products").DataTable({
				pageLength: 6,
				lengthChange: false,
				bFilter: false,
				autoWidth: false
			});
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Last year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79]
					}, {
						label: "This year",
						backgroundColor: "#E8EAED",
						borderColor: "#E8EAED",
						hoverBackgroundColor: "#E8EAED",
						hoverBorderColor: "#E8EAED",
						data: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							barPercentage: .75,
							categoryPercentage: .5,
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
</script>
</body>

</html>