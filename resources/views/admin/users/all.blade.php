@extends('layouts.admin', ['pageBreadcrumb' => 'Users'])

@section('content')
<div class="table-section">
	<ul>
		<li class="main-heading">
			<div class="row">
				<div class="col-sm-3">
					<div class="title-wrap">
						<strong class="main-tite">User</strong>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="categories-wrap">
						<strong class="main-categories">Company</strong>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="categories-wrap">
						<strong class="main-categories">Address</strong>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="categories-wrap">
						<strong class="main-categories">Phone Number</strong>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="date-wrap">
						<strong class="main-date">Approve</strong>
					</div>
				</div>
			</div>
		</li>
		<?php foreach ($users as $user): ?>
			<li class="list-item">
				<div class="row">
					<div class="col-sm-3">
						<div class="title-wrap">
							<a href="<?= route('users.show', $user->username) ?>"><?= $user->name ?></a>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="categories-wrap">
							<strong><?= $user->company_store_name ?></strong>
						</div>
					</div>	
					<div class="col-sm-3">
						<div class="categories-wrap">
							<strong><?= $user->street_address.', '. $user->city ?></strong>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="categories-wrap">
							<strong><?= $user->phone_number ?></strong>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="date-wrap">
		                    <a href="<?= route('users.approve') ?>?status=true&user=<?= $user->username ?>">
		                    	<button type="button" class="btn btn-info">
		                    		<i class="fa fa-pencil"></i>
		                    	</button>
		                    </a>
		                    <a href="<?= route('users.approve') ?>?status=false&user=<?= $user->username ?>">
		                    	<button type="button" class="btn btn-danger">
		                    		<i class="fa fa-close"></i>
		                    	</button>
		                    </a>
						</div>
					</div>
				</div>
			</li>
		<?php endforeach ?>
	</ul>
</div>
<div class="container">
	{!! $users->links() !!}
</div>
@endsection