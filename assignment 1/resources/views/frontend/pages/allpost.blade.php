@extends('backend.layouts.layout')

@section('allpost')

<div class="card mb-3">
	<div class="card-header">
		<i class="fas fa-table"></i>
	Data Table Example</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>ID</th>
						<th>Title</th>
						<th>Description</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>ID</th>
						<th>Title</th>
						<th>Description</th>
					</tr>
				</tfoot>
				@foreach( $all_category_info as $v_category) 
				<tbody>
					<tr>
						<td>{{ $v_category->id }}</td>
						<td>{{ $v_category->title }}</td>
						<td>{{ $v_category->description }}</td>
					</tr>
				</tbody>
				@endforeach
				
			</table>
		</div>
	</div>
	<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

<p class="small text-center text-muted my-5">
	<em>More table examples coming soon...</em>
</p>


@endsection