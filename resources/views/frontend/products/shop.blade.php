@extends('layouts.app', ['bodyClass' => 'about'])

@section('content')

<!-- order section start -->
<section class="order-section">
	<h2>Order Form</h2>
	<p>Please Fill entire form to ensure prompt processing.</p>

    <div class="order-form">
    	<div class="row">
            <div class="container">
                @if (Session::has('flash_message'))
                    <div class="post-page alert alert-success {{ Session::has('flash_message_important') ? 'alert-important' : '' }}" style="margin-top: 4%">
                        @if(Session::has('flash_message_important'))
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        @endif
                        <p class="text-center">{{ session('flash_message') }}</p>
                    </div>
                @endif
                <form action="<?= route('transactions.process') ?>" method="post">
                    {!! csrf_field() !!}
                    <div class="order-form-wrapper">
                        <div class="form-group col-lg-6 col-xs-12  col-sm-6">
                            <input type="text" class="form-control"  name="company_name" placeholder="Company Name">
                        </div>
                        <div class="form-group col-lg-6 col-xs-12  col-sm-6">
                            <input type="text" class="form-control" name="contact_address" placeholder="Contact Address">
                        </div>
                        <div class="form-group col-lg-6 col-xs-12  col-sm-6">
                            <input type="text" class="form-control" name="phone_number" placeholder="phone Number">
                        </div>
                        <div class="form-group col-lg-6 col-xs-12  col-sm-6">
                            <input type="email" class="form-control" name="email" placeholder="email Address">
                        </div>
                        <div class="form-group col-lg-6 col-xs-12  col-sm-6">
                            <input type="text" class="form-control" name="ein_sale_tax" placeholder="Ein/Sale Tax #:">
                        </div>
                        <div class="form-group col-lg-6 col-xs-12  col-sm-6">
                            <input type="text" class="form-control" name="fax_number" placeholder="Fax Number">
                        </div>
                        <div class="form-group col-lg-6 col-xs-12  col-sm-6">
                            <input type="text" class="form-control" name="shipping_address" placeholder="Shipping address">
                        </div>
                        <div class="form-group col-lg-6 col-xs-12  col-sm-6">
                            <input type="text" class="form-control" name="billing_address" placeholder="Billing Address"> 
                        </div>
                        <div class="form-group col-lg-6 col-xs-12  col-sm-6">
                            <input type="text" class="form-control" name="zip" placeholder="Zip Code"> 
                        </div>
                    </div>
                    <div class="package-form">
                        <h5>Package Product</h5>
                        <div class="table-wrapper">
                            <div class="table-responsive">
                              <table>
                                    <thead>
                                      <tr>
                                        <th>MSRP</th>
                                        <th>UPC</th>
                                        <th>Product name</th>
                                        <th>Quantity</th>
                                        <th>Order Qty</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <input type="hidden" name="currency" value="USD">
                                        <?php foreach ($products as $key => $product): ?>
                                            <tr>
                                                <td>
                                                    $<?= $product->regular_price ?>
                                                    <input type="hidden" name="products[<?= $key ?>][product_id]" id="product<?= $key ?>ProductId" value="<?= $product->id ?>">
                                                    <input type="hidden" name="products[<?= $key ?>][price]" id="product<?= $key ?>Price" value="<?= $product->regular_price ?>" />
                                                </td>
                                                <td><?= $product->universal_product_code ?></td>
                                                <td>
                                                    <?= $product->name ?>
                                                    <input type="hidden" name="products[<?= $key ?>][name]" value="<?= $product->name ?>" />
                                                </td>
                                                <td>
                                                    <?= $product->quantity ?>
                                                    <input type="hidden" name="products[<?= $key ?>][weight]" value="<?= $product->quantity ?>">
                                                </td>
                                                <td><input type="number" name="products[<?= $key ?>][quantity]" class="form-control select-product" data-target="product<?= $key ?>Price" placeholder="number"></td> 
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>     
                            </div>
                            <div class="alert-sms">
                                <p class="alert alert-warning">
                            	 * Please ensure that the product is displayed in high and dry place in the store.<br>
                                * Bulk Product is intended to be sold by weight in ounces<br>
                                * There is no minimum to order.</p>
                            </div>
                            <div class="form-group col-lg-12 col-sm-12 ">
                                <label class="form-label">Payment Method</label>
                                <input type="radio" name="method" class="payment-choice" value="paypal" id="paypal-choice">
                                <label for="paypal-choice">Paypal</label>
                                <input type="radio" name="method" class="payment-choice" value="credit_card" id="card-choice">
                                <label for="card-choice">Card</label>
                            </div>
                            
                            <div id="method_card">
                                <div class="form-group col-lg-6 col-xs-12  col-sm-6">
                                    <input type="text" class="form-control" name="credit_card" placeholder="Card Holder Name">
                                </div>
                                <div class="form-group col-lg-6 col-xs-12  col-sm-6">
                                    <select class="form-control" name="card_type">
                                        <option>Visa</option>
                                        <option>Master Card</option>
                                        <option>American Express</option>
                                        <option>Discover</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 col-xs-12  col-sm-6">
                                    <input type="text" class="form-control" name="card_number" placeholder="Card Number">
                                </div>
                                <div class="form-group col-lg-6 col-xs-12  col-sm-6">
                                    <input type="text" class="form-control" name="card_expire_month" placeholder="Expire Month">
                                </div>
                                <div class="form-group col-lg-6 col-xs-12  col-sm-6">
                                    <input type="text" class="form-control" name="card_expire_year" placeholder="Expire Year">
                                </div>
                                <div class="form-group col-lg-6 col-xs-12  col-sm-6">
                                    <input type="text" class="form-control" name="card_cvv" placeholder="CCV">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                        </div>
                    </div>
                    <div class="counting">
                        <input type="hidden" name="total" id="totalAmountInput" value="0">
                        <h5>Total Price: <strong>$<span id="totalAmountText">0</span></strong></h5>
                    </div>
                </form>
            </div>  
        </div>
    </div>
</section>
<!-- order section end  -->
@endsection

@section('footer')
<script type="text/javascript">
    $('#method_card').hide();
    $(document).ready(function(e) {
        $(document).on('blur', '.select-product', function() {
            var scope = $(this),
                productKey = scope.attr('data-target'),
                noOfProduct = scope.val(),
                priceOfProduct = $('#' + productKey).val(),
                currentTotalAmount = $('#totalAmountInput').val(),
                total = parseInt(currentTotalAmount) + (noOfProduct * priceOfProduct);

                $('#totalAmountInput').val(total);
                $('#totalAmountText').text(total);
        });

        $(document).on('click', '.payment-choice', function() {
            var scope = $(this),
                value = scope.val();

            if('credit_card' === value) {
                $('#method_card').show();
            } else {
                $('#method_card').hide();
            }
            
        });
    });
</script>
@endsection

@section('footer')
<script type="text/javascript">
    $('div.alert').not('alert-important').delay(10000).slideUp(4000);
</script>
@endsection