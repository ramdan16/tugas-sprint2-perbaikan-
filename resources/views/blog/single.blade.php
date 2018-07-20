
@extends('layout.master')

@section('title','single')
<style>
	.main i{
		font-size: 30px;
	}
</style>

@section('content')
<h4 class="text-center">Detail Data Suppliers	</h4>
<table class="table">
	<tr>
		<td>Name:</td>
		<td>{{ $blog->name }}</td>
	</tr>
	<tr>
		<td>address:</td>
		<td>{{ $blog->address }}</td>
	</tr>
	<tr>
		<td>region:</td>
		<td>{{ $blog->region }}</td>
	</tr>
	<tr>
		<td>city:</td>
		<td>{{ $blog->city }}</td>
	</tr>
	<tr>
		<td>contact_email:</td>
		<td>{{ $blog->contact_email }}</td>
	</tr>
	<tr>
		<tr>
			<td>contact_phone:</td>
			<td>{{ $blog->contact_phone }}</td>
		</tr>
		<tr>
			<td>contact_fax:</td>
			<td>{{ $blog->contact_fax }}</td>
		</tr>
		<tr>
			<td>contact_name:</td>
			<td>{{ $blog->contact_name }}</td>
		</tr>
		<tr>
			<td>contact_title:</td>
			<td>{{ $blog->contact_title }}</td>
		</tr>
		<td>zip_code:</td>
		<td>{{ $blog->zip_code }}</td>
	</tr>
	<tr>
		<td>postal_code:</td>
		<td>{{ $blog->postal_code }}</td>
	</tr>
	<tr>
		<td>created_at:</td>
		<td>{{ $blog->created_at }}</td>
	</tr>
	<tr>
		<td>updated_at:</td>
		<td>{{ $blog->updated_at }}</td>
	</tr>
</table>
<div class="main" >
	<div class="col-md-10-offset-2 pull-6 text-center">
	  <a href="/blogy/{{$blog->id}}/edit"><i class="fa fa-cogs"></i></a>&nbsp;&nbsp;&nbsp;		
	  <a href="/blogy/{{$blog->id}}/edit"><i class="fa fa-trash"></i></a>	
	</div>
	
</div>
@endsection
