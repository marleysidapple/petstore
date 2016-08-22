@extends('layouts.admin', ['pageBreadcrumb' => 'Orders', 'bodyClass' => 'order'])

@section('content')
<!-- table wrapper start -->
<div class="content-main">
	<div class="table-section">
		<div class="tab-wrapper-section">
			<div class="tab-pannel-wrap">
				<ul class="tabs">
					<li rel="tab1" class="active">Delivered</li>
					<li rel="tab2" class="">Pending</li>
				</ul>
				<div id="tab1" class="tab-content active" style="display: block;">
					<div class="questions">
						<div class="row">
							<div class="col-xs-12">
								<div class="table">
									<?php if (count($completeOrders) > 0): ?>
										<table class="table  table-responsive">
											<thead>
												<tr style="border:none !important;">
													<th>Order By</th>
													<th>Purchased</th>
													<th>Date</th>
													<th>Ship to</th>
													<th>Total</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($completeOrders as $completeOrder): ?>
													<tr>
														<td>
															<a href="#">
																<?= $completeOrder->orderPayment->shipTo->company_name ?> <?= $completeOrder->orderPayment->shipTo->email ?>
															</a>
														</td>
														<td><?= $completeOrder->quantity ?> Item</td>
														<td><?= $completeOrder->created_at->diffForHumans() ?></td>
														<td class="small"><?= $completeOrder->orderPayment->shipTo->shipping_address ?></td>
														<td><?= (float)$completeOrder->quantity * (float)$completeOrder->price ?></td>
														<td>
															<a href="<?= route('orders.markPending', $completeOrder->id) ?>"><button type="button" class="btn btn-info btn-sm">Mark Pending</button></a>
														</td>
													</tr>
												<?php endforeach ?>
												
											</tbody>
										</table>
										{{ $completeOrders->links() }}
									<?php else : ?>
										<p class="text-center">No delivered orders found.</p>
									<?php endif ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="tab2" class="tab-content active" style="display: none;">
					<div class="questions">
						<div class="row">
							<div class="col-xs-12">
								<div class="table">
									<?php if (count($pendingOrders) > 0): ?>
										<table class="table  table-responsive">
											<thead>
												<tr style="border:none !important;">
													<th>Order By</th>
													<th>Purchased</th>
													<th>Date</th>
													<th>Ship to</th>
													<th>Total</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($pendingOrders as $pendingOrder): ?>
													<tr>
														<td>
															<a href="#">
																<?= $pendingOrder->orderPayment->shipTo->company_name ?> <?= $pendingOrder->orderPayment->shipTo->email ?>
															</a>
														</td>
														<td><?= $pendingOrder->quantity ?> Item</td>
														<td><?= $pendingOrder->created_at->diffForHumans() ?></td>
														<td class="small"><?= $pendingOrder->orderPayment->shipTo->shipping_address ?></td>
														<td><?= (float)$pendingOrder->quantity * (float)$pendingOrder->price ?></td>
														<td>
															<a href="<?= route('orders.markComplete', $pendingOrder->id) ?>"><button type="button" class="btn btn-info btn-sm">Mark Delivered</button></a>
														</td>
													</tr>
												<?php endforeach ?>
											</tbody>
										</table>
										{{ $pendingOrders->links() }}
									<?php else : ?>
										<p class="text-center">No pending orders found.</p>
									<?php endif; ?>
								</div>  
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- table wrapper end  -->
@endsection

@section('footer')
<script>
$('.tab-wrapper-section .tab-pannel-wrap .tabs li').on('click', function(){
  $('.tab-wrapper-section .tab-pannel-wrap .tabs li.active').removeClass('active');
    $(this).addClass('active');
        var panelToShow = $(this).attr('rel');
        $('.tab-wrapper-section .tab-pannel-wrap .tab-content.active').fadeOut(100, function(){
        $(this).removeClass('active');
        $('#'+panelToShow).fadeIn(200, function(){
        $(this).addClass('active');
    });
  });
});
</script>
@endsection
