@extends('admin_view/layout_admin')

@include('functions')
@section('content')


	<div class="container text-center header-view">
		<h1> Manage <span>Accounts</span></h1>
		<p>here you can manage all users in system ......edit or delete anyone</p>
	</div>


	<div class="container">
		<div class="responsive-table">
			<table class="table main-table table-striped table-bordered dt-responsive nowrap text-center">

				<thead>
				<tr>
					<th>#ID</th>
					<th>FullName</th>
					<th>Email</th>
					<th>Role</th>
					<th>Gender</th>
					<th>Age</th>
					<th>Register Date</th>
					<th>Control</th>
				</tr>
				</thead>

                @foreach($users as $row)
				<tr>
					<td>{{$row->id}}</td>
					<td>{{$row->name}}</td>
					<td>{{$row->email}}</td>
					<td>{{$row->role}}</td>
					<td>{{$row->gender}}</td>
					<td>{{$row->age}}</td>
					<td>{{calculate_diff_date($row->created_at)}}</td>
					<td>
						<a href='/deleteuser/{{$row->id}}' class='btn btn-danger confirm'><i class='fas fa-trash'></i> Delete</a>
					</td>
				</tr>

				@endforeach
			</table>
		</div>
	</div>
@endsection