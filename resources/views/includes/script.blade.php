<?php
$scripts = [
	'assets/javascripts/jquery-1.11.3.min.js',
	'assets/javascripts/app.min.js',
];
?>
@foreach ($scripts as $key => $value)
	<script src="{{ asset($value) }}"></script>
@endforeach

@section('script')
	<script src="{{ asset('assets/javascripts/init.js') }}"></script>
@show