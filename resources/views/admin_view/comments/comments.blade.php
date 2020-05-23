@extends('admin_view/layout_admin')

@include('functions')
@section('content')

	
<div class="container text-center header-view">
	<h1> Manage <span>Comments</span></h1>
	<p>here you can manage all users comments in system ......delete anything illegal</p>
</div>

<div class="container">
	<div class="responsive-table">
		<table class="table main-table table-striped table-bordered dt-responsive nowrap text-center">
			<thead>
				<tr>
					<th>Name</th>
					<th>Product_name</th>
					<th>Comment</th>
					<th>Comment_date</th>
					<th>Control</th>

				</tr>	
			</thead>
			@foreach ($comments as $comment) 
				<tr>
					<td>{{ $comment->user->name }}</td>
					<td>{{ $comment->product->name }}</td>
					<td>{{ $comment->comment }}</td>
					<td> <span style='color:grey;font-size:12px'>{{ calculate_diff_date($comment->created_at) }}</span></td>
					<td>
						<a href='/admin/comments/destroy/{{$comment->id}}' class='btn btn-danger confirm'><i class='fas fa-trash'></i> Delete</a>
					</td>
				</tr>
			@endforeach
		</table>	
	</div>
</div>



@endsection