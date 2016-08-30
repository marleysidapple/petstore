@extends('layouts.app', ['bodyClass' => 'carrer'])

@section('content')
<section class="mission-sections">
  <div class="container">
    <div class="row">
      <div class="join-us carrer" style="background:none;"> <strong style="color:#004e3b;">Our Product Analysis</strong>
        <div class="col-sm-6">
          <div class="mission-wrapper second-wrapper">
            <h5>Protein and Amino Acid:</h5>
            <p> Dog cannot survive on diets with protein deficiency. Dietary protein contains 10 different amino acids which dogs cannot make on their own. Our products contain more than 50% protein that has well-balanced percentage of amino acids essential for dogs. </p>
            <h5>Fats and Fatty Acid:</h5>
            <p> According to the rule of thumb, higher the fat content, lower the lactose content. Majority of dogs can tolerate any treat that contain less and 2 percentage of lactose. In our products, fat content varies from minimum of 0.7% to maximum of 0.9%, i.e. fat content is below 1 percentage </p>
            <h5>Energy Needs: </h5>
            <p> Dogs require balanced percentage of nutrition to stay energetic enough to perform their normal and periodic routines, including playing, growing, exercising and mothering. Generally measured in terms of calories, energy comes from three major components i.e. carbohydrates, protein and fat. In our products, carbohydrate content is 30 to 32 percentage. </p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="mission-wrapper ">
            <h5>Moisture:</h5>
            <p> Hardness and softness of dog chew depends upon its content. Milk containing higher water content makes soft dog chew, and milk containing low water content, makes hard chew. Our products have maximum of 10 to 11 percentage of water contents, thus are harder to chew, which dogs love the most. </p>
            <img src="{{asset('images/chart.jpg')}}" alt="Ingredients of Royal Dog Chew "> </div>
        </div>
        </p>
      </div>
    </div>
  </div>
</section>

@endsection