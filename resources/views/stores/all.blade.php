@extends('layouts.app', ['bodyClass' => 'find-us'])

@section('content')

<!-- store section start -->
<section class="store-section"> 
 <div class="container">
     <strong>stores</strong>
     <div class="ad-your-store">
         <a href="<?= route('stores.create') ?>" title="">Add Your New Store +</a>
     </div>
     <div class="row">
       <div class="store-wraper mange-store">
          <?php foreach ($stores as $store): ?>
             <div class="col-sm-6  col-md-6">
                 <div class="store-content">
                     <h4><?= $store->store_name ?></h4>
                     <p>
                       <?= $store->phone_number ?><br />
                       Address: <?= $store->street_address ?>, <?= $store->city ?><br>
                       ZipCode: <?= $store->zip ?><br>
                       Website: <?= $store->website ?><br>
                       Email: <?= $store->email ?><br>
                   </p>
                   <form action="<?= route('stores.destroy', $store->slug) ?>" method="post">
                        {!! csrf_field() !!}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-warning delete-store">Delete</button>
                    </form>
                    <a href="<?= route('stores.edit', $store->slug) ?>" type="btn" class="btn btn-primary" title="">Edit</a>
               </div>
           </div>
       <?php endforeach ?>
   </div>
</div>
</div>   
</section>
<!-- store section end  -->
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