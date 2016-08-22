@extends('layouts.admin', ['pageBreadcrumb' => 'FAQs'])

@section('content')
<div class="table-section">
	<?php if (count($faqs) > 0): ?>
		<table class="table table-responsive">
			<thead>
				<tr style="border:none !important;">
					<th>Title</th>
					<th>Updated Date</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($faqs as $faq): ?>
					<tr>
						<td><?= $faq->title ?></td>
						<td><?= $faq->published_at->toFormattedDateString() ?></td>
						<td>
							<form style="display: inline-block" action="<?= route('faqs.destroy', $faq->slug) ?>" method="post">
		                        {!! csrf_field() !!}
		                        {{ method_field('DELETE') }}
		                        <button type="submit" class="btn btn-danger delete-store"><i class="fa fa-close"></i></button>
		                    </form>
		                    <a href="<?= route('faqs.edit', $faq->slug) ?>">
		                    	<button type="button" class="btn btn-info delete-store">
		                    		<i class="fa fa-pencil"></i>
		                    	</button>
		                    </a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	<?php else: ?>
		<div class="alert alert-info">
			<p class="text-center">No FAQs found</p>
		</div>
	<?php endif ?>
</div>
<div class="container">
	{!! $faqs->links() !!}
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