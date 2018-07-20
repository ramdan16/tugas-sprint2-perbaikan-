<script src="{{ asset('js/materialize.min.js') }}"></script>
	<script type="text/javascript">
		(function($){
			$(function(){

				$('.button-collapse').sidenav();
			});
			
		})(jquery);
	</script>
	@section('js')
	
	{{-- @show --}}
@extends('layout.master')


@section('content')
	 
	<div class="container">
		<div class="col-md-8">
			<div class="row">
				<h1>Data Suppliers</h1>
			</div>
			<!-- display data  -->
			@if(count($blogs) > 0)
			<table class="table">
				<thead>
					<th>ID</th>
					<th>NAME</th>
					<th>ADDRESS</th>
					<th>COUNTRY</th>
					<th>CITY</th>
					<th rowspan="3" colspan="3" class="text-center">ACTION</th>
				</thead>
				{{-- {{ $blogs }} --}}
				<tbody>
					@foreach($blogs as $blogs)
					<tr>
						<th>{{ $blogs-> id }}</th>
						<td>{{ $blogs-> name }}</td>
						<td>{{ $blogs-> address }}</td>
						<td>{{ $blogs-> country }}</td>
						<td>{{ $blogs-> city }}</td>
						{{-- display  action --}}
						<div class="col-md-3">
							<td>
							<a href="/blogy/{{$blogs->id}}"><i class="fa fa-check"></i>
							</a>
						</td>
						</div>

						<td>
							<a href="/blogy/{{$blogs->id}}/edit"><i class="fa fa-pencil"></i>
						    </a>
					    </td>
					    {{-- tombol hapus --}}
					    <td>
					    <form action="/blogy/{{$blogs->id}}" method="post">
					     <input type="submit" class="btn btn-danger" value="delete">
					    	{{ csrf_field() }}
					    	<input type="hidden" name="_method" value="DELETE">
					    </form>
					</td>
					</tr>
					@endforeach
				</tbody>
				
			</table>
			@endif
		</div>
	</div>
	@endsection