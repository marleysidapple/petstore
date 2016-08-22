@extends('layouts.admin', ['pageBreadcrumb' => 'Users'])

@section('content')
<div class="table-section">
	<ul class="">
		<li class="list-item">
			<div class="row">
				<div class="col-sm-6">
					<div class="title-wrap">
						<strong class="main-tite">Name</strong>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="categories-wrap">
						<strong class="main-categories"><?= $user->name ?></strong>
					</div>
				</div>
			</div>
		</li>
		<li class="list-item">
			<div class="row">
				<div class="col-sm-6">
					<div class="title-wrap">
						<strong class="main-tite">Email</strong>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="categories-wrap">
						<strong class="main-categories"><?= $user->email ?></strong>
					</div>
				</div>
			</div>
		</li>
		<li class="list-item">
			<div class="row">
				<div class="col-sm-6">
					<div class="title-wrap">
						<strong class="main-tite">Company</strong>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="categories-wrap">
						<strong class="main-categories"><?= $user->company_store_name ?></strong>
					</div>
				</div>
			</div>
		</li>
		<li class="list-item">
			<div class="row">
				<div class="col-sm-6">
					<div class="title-wrap">
						<strong class="main-tite">Address</strong>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="categories-wrap">
						<strong class="main-categories"><?= $user->apt.', '.$user->street_address.', '.$user->city ?></strong>
					</div>
				</div>
			</div>
		</li>
		<li class="list-item">
			<div class="row">
				<div class="col-sm-6">
					<div class="title-wrap">
						<strong class="main-tite">Phone Number</strong>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="categories-wrap">
						<strong class="main-categories"><?= $user->phone_number ?></strong>
					</div>
				</div>
			</div>
		</li>
		<li class="list-item">
			<div class="row">
				<div class="col-sm-6">
					<div class="title-wrap">
						<strong class="main-tite">Website</strong>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="categories-wrap">
						<strong class="main-categories"><a href="http://<?= $user->website ?>" target="_blank"><?= $user->website ?></a></strong>
					</div>
				</div>
			</div>
		</li>

	</ul>
</div>
@endsection