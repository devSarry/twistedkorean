@extends('layouts.app')

@section('content')

<div class="container">
   <div class="panel panel-default">
	  <div class="panel-heading">
			<h3 class="panel-title">List of Signed Up Users</h3>
	  </div>
	  <div class="panel-body">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
						</tr>
					</thead>
					<tbody>
						@foreach($signedUpUsers as $user)
						<tr>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
	  </div>
	</div>
</div>


@endsection
