
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('/img/icon.ico') }}" type="image/x-icon"/>
	<script src="{{ asset('/js/plugin/webfont/webfont.min.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/fonts.min.css')}}">
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/atlantis.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/demo.css') }}">
	<link rel="stylesheet" href="{{ asset('/js/plugin/select2/css/select2.css') }}">
	<link rel="stylesheet" href="{{ asset('/js/plugin/sweetalert2/css/sweetalert2.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/js/plugin/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}">
	<link rel="stylesheet" href="{{ asset('/plugin/colorpicker/dist/css/bootstrap-colorpicker.css') }}">
	<style>
		.btn-me {
			margin-bottom: 10px;
		}
		.btn-save{
			margin-bottom: 10px;
			float: right;
		}
		.form-control{
			border-color: #dbe0e2;
		}
		.btn-add {
			padding: 6px 10px 6px 10px;
			margin: 5px;
		}
	</style>
	<meta name="csrf-token" content="{{ csrf_token() }}" />
