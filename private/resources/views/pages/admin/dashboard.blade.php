<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title >My Blog - Admin</title>
	<link href="{{asset('template/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{asset('template/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('template/css/datepicker3.css')}}" rel="stylesheet">
	<link href="{{asset('template/css/styles.css')}}" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

</head>
<body>
	<div class="">
		@include('pages.admin.header')
		@yield('main')
	</div>
	@yield('footer')
	
	
	<script src="{{asset('template/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{asset('template/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('template/js/chart.min.js')}}"></script>
	<script src="{{asset('template/js/chart-data.js')}}"></script>
	<script src="{{asset('template/js/easypiechart.js')}}"></script>
	<script src="{{asset('template/js/easypiechart-data.js')}}"></script>
	<script src="{{asset('template/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('template/js/custom.js')}}"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>

	<script>
		function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
	</script>
	
	<!--<script type="text/javascript" src="public/ckeditor/ckeditor.js"></script>
	<script>
	CKEDITOR.replace('isi_berita',{})</script>-->
</body>
</html>