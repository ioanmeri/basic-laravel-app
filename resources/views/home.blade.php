@extends('layouts.app')

@section('content')
<h1>Welcome Home</h1>
@endsection

@section('sidebar')
	@Parent
	<p>This is appended to the sidebar</p>
@endsection
