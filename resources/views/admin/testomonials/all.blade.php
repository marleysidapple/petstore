@extends('layouts.admin', ['pageBreadcrumb' => 'Products'])

@section('content')
<div class="table-section">
	<table class="table table-responsive">
		<thead>
			<tr style="border:none !important;">
				<th>Image</th>
				<th>Name</th>
				<th>Title</th>
				<th>Publish Date</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($testomonials as $testomonial): ?>
				<tr>
					<td><img width="100" src="<?= $testomonial->image ?>" /></td>
					<td><?= $testomonial->name ?></td>
					<td><?= $testomonial->title ?></td>
					<td><?= $testomonial->published_at->toFormattedDateString() ?></td>
					<td>
						<form style="display: inline-block" action="<?= route('testomonials.destroy', $testomonial->slug) ?>" method="post">
	                        {!! csrf_field() !!}
	                        {{ method_field('DELETE') }}
	                        <button type="submit" class="btn btn-danger delete-store"><i class="fa fa-close"></i></button>
	                    </form>
	                    <a href="<?= route('testomonials.edit', $testomonial->slug) ?>">
	                    	<button type="button" class="btn btn-info delete-store">
	                    		<i class="fa fa-pencil"></i>
	                    	</button>
	                    </a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
<div class="container">
	{!! $testomonials->links() !!}
</div>
@endsection

@section('footer')
<script type="text/javascript" src="<?= asset('js/bootbox.min.js') ?>"></script>
<script type="text/javascript">
    $(document).on('click', 'form', function(e) {
        var currentForm = $(this);
        e.preventDefault();
        bootbox.confirm('Are you sure?', function(result) {
            if(result) {
                currentForm.submit();
            }
        });
    });
</script>
@endsection