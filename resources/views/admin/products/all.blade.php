@extends('layouts.admin', ['pageBreadcrumb' => 'Products'])

@section('content')
<div class="table-section">
	<table class="table  table-responsive">
		<thead>
			<tr style="border:none !important;">
				<th>Name</th>
				<th>Price</th>
				<th>Discount Price</th>
				<th>Is Discount Active?</th>
				<th>Publish Date</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($products as $product): ?>
				<tr>
					<td><?= $product->name ?></td>
					<td><?= $product->regular_price ?></td>
					<td><?= $product->discount_price ?></td>
					<td><?= 1 === (int)$product->is_discount_active ? 'Active' : 'Not Active' ?></td>
					<td><?= $product->published_at->toFormattedDateString() ?></td>
					<td>
						<form style="display: inline-block" action="<?= route('products.destroy', $product->slug) ?>" method="post">
	                        {!! csrf_field() !!}
	                        {{ method_field('DELETE') }}
	                        <button type="submit" class="btn btn-danger delete-store"><i class="fa fa-close"></i></button>
	                    </form>
	                    <a href="<?= route('products.edit', $product->slug) ?>">
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
	{!! $products->links() !!}
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