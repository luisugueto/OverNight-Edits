@extends('layouts.app')

@section('scripts')
	<script>
	$(document).ready(function(){
		$('a#user-panel').click();
		$('a[href="#cat"]').click();
	});
</script>
@endsection
