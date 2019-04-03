@extends('layouts.app')

@section('headder')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
	$(document).ready(function(){

		jQuery('#interior-selector').on('change',function(){
      updateinterior($(this).val());
		});

		jQuery('#exterior-selector').on('change',function(){
      updateExterior($(this).val());
		});

		jQuery('#car-type').on('click',function(){
      uppdateType($(this).val());
		});

    jQuery('#load-btn').on('click',function(){
      @foreach($SavedCars as $car)
        if('{{$car->name}}' == $("#user-cars").val()){
          uppdateType('{{$car->type}}');
          updateExterior('{{$car->exterior_color}}');
          updateinterior('{{$car->interior_color}}');
        }
      @endforeach
    });

    function updateinterior(color){
      $(".interior").attr("fill", color);
      $("#interior-form").attr("value", color);
      $('#interior-selector').attr("value", color);
    }

    function updateExterior(color){
      $(".exterior").attr("fill", color);
      $("#exterior-form").attr("value", color);
      $('#exterior-selector').attr("value", color);
    }

    function uppdateType(type){
      $("#type-form").attr("value", type);
      $('#car-type option[value='+type+']').attr('selected','selected');
      $('.car-drawing').each(function(obj) {
        if(type == $(this).attr('id')){
          $(this).show();
        }
        else{
          $(this).hide();
        }
      });
    }

	});
</script>

@endsection

@section('content')

    @if(session()->has('message'))
      <div class="alert alert-success">
          {{ session()->get('message') }}
      </div>
    @endif


    @if($type == 'CAR')
  	<div align="center" id="CAR" class="car-drawing">
    @else
    <div align="center" id="CAR" class="car-drawing" style="display:none">
    @endif
		<svg width="640" height="480" >
		<g>
			<circle r="29" cy="339.66667" cx="218" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" stroke="#000000" fill="#000000"/>
			<circle r="29" cy="339.66667" cx="423" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" stroke="#000000" fill="#000000"/>
			<path class="exterior" fill={{$exterior}} stroke="#000000" stroke-width="3" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" d="m151,340.66667c0,0 28,1 28,0.33333c0,-0.66667 5,-39.33333 39,-38c34,1.33333 38,42.66667 38,42c0,-0.66667 129,-0.33333 129,-1c0,-0.66667 -3,-40.33333 37,-41c40,-0.66667 38,43.66667 38,43c0,-0.66667 53,-0.33333 53,-1c0,-0.66667 -2,-63.33333 -2,-64c0,-0.66667 -71,-7.33333 -71,-8c0,-0.66667 -69,-56.33333 -69,-57c0,-0.66667 -164,-0.33333 -164,-1c0,-0.66667 -20,60.66667 -20,60.66667c0,0 -34,4 -34,3.33333c0,-0.66667 -2,61.66667 -2,61.66667z" />
			<rect stroke="#000000" fill="#ffffff" stroke-width="3" x="316.5" y="228.66665" width="56" height="85.99999" />
			<rect stroke="#000000" fill="#ffffff" stroke-width="3" x="249" y="228.66667" width="56" height="85.99999"/>
			<path class="interior" fill={{$interior}} stroke="#000000" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" d="m323,241.66666c0,0 17,0 17,0c0,0 3,53 3,53c0,0 24,0 24,0c0,0 0,13 0,13c0,0 -48,0 -48,0c0,0 4,-66 4,-66z" />
			<path class="interior" fill={{$interior}} stroke="#000000" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" d="m257,242.66666c0,0 17,0 17,0c0,0 3,53 3,53c0,0 24,0 24,0c0,0 0,13 0,13c0,0 -48,0 -48,0c0,0 4,-66 4,-66z"/>
		</g>
		</svg>
	</div>

  @if($type == 'SUV')
  <div align="center" id="SUV" class="car-drawing">
  @else
  <div align="center" id="SUV" class="car-drawing" style="display:none">
  @endif
		<svg width="640" height="480">
		<g>
			<path class="exterior" fill={{$exterior}} stroke="#000000" stroke-width="3" d="m158.33333,344.33333c0,0 23,0 22.66667,-0.33333c-0.33333,-0.33333 1.33333,-38.66667 38,-38c36.66667,0.66667 36.33333,40.33333 36.33333,40.33333c0,0 109,0 108.66667,-0.33333c-0.33333,-0.33333 -2.66667,-39.66667 37,-40c39.66667,-0.33333 35.33333,42.33333 35,42c-0.33333,-0.33333 59.33333,0.33333 59,0c-0.33333,-0.33333 0.33333,-75.66667 0,-76c-0.33333,-0.33333 -71.66667,-5.66667 -72,-6c-0.33333,-0.33333 -56.66667,-65.66667 -57,-66c-0.33333,-0.33333 -207.66667,-1.66667 -208,-2c-0.33333,-0.33333 0.33333,146.33333 0.33333,146.33333z" />
			<circle r="29" cy="342.66667" cx="218" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" stroke="#000000" fill="#000000"/>
			<circle r="29" cy="343.66667" cx="400" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" stroke="#000000" fill="#000000"/>
			<rect stroke="#000000" height="87.99999" width="59" y="211.66667" x="208" stroke-width="3" fill="#ffffff"/>
			<rect stroke="#000000" height="87.99999" width="59" y="211.66665" x="294.5" stroke-width="3" fill="#ffffff"/>
			<path class="interior" fill={{$interior}} d="m217,227.66667c0,0 17,0 17,0c0,0 3,53 3,53c0,0 24,0 24,0c0,0 0,13 0,13c0,0 -48,0 -48,0c0,0 4,-66 4,-66z" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke="#000000"/>
			<path class="interior" fill={{$interior}} d="m304,227.66666c0,0 17,0 17,0c0,0 3,53 3,53c0,0 24,0 24,0c0,0 0,13 0,13c0,0 -48,0 -48,0c0,0 4,-66 4,-66z" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke="#000000"/>
		</g>
		</svg>
	</div>

  @if($type == 'CNV')
  <div align="center" id="CNV" class="car-drawing">
  @else
  <div align="center" id="CNV" class="car-drawing" style="display:none">
  @endif
		<svg width="640" height="480">
		 <g>
		  <circle r="29" cy="335.66667" cx="218" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" stroke="#000000" fill="#000000"/>
		  <circle r="29" cy="335.66667" cx="423" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="5" stroke="#000000" fill="#000000"/>
		  <path class="interior" fill={{$interior}} stroke="#000000" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" d="m323,231.66666c0,0 17,0 17,0c0,0 3,53 3,53c0,0 24,0 24,0c0,0 0,13 0,13c0,0 -48,0 -48,0c0,0 4,-66 4,-66z" id="svg_6"/>
		  <path class="interior" fill={{$interior}} stroke="#000000" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" d="m254,230.66666c0,0 17,0 17,0c0,0 3,53 3,53c0,0 24,0 24,0c0,0 0,13 0,13c0,0 -48,0 -48,0c0,0 4,-66 4,-66z"/>
		  <line y2="227.66667" x2="399" y1="263.66667" x1="430" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="3" stroke="#000000" fill="none"/>
		  <path class="exterior" fill={{$exterior}} d="m143,339.66667c0,0 36,0 36,-0.66667c0,-0.66667 5,-39.33333 39,-40c34,-0.66667 37,41.66667 37,41.66667c0,0 128,0 128,0c0,0 6,-41 41,-41c35,0 39,45 39,44.33333c0,-0.66667 78,0.66667 78,0c0,-0.66667 -6,-21.33333 -6,-22c0,-0.66667 -105,-57.33333 -105,-58c0,-0.66667 -244,-3.33333 -244,-4c0,-0.66667 -44,50.66667 -44,50c0,-0.66667 1,29.66667 1,29.66667z" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="3" stroke="#000000" />
		</g>
		</svg>
	</div>

  @if($type == 'TRUCK')
  <div align="center" id="TRUCK" class="car-drawing">
  @else
  <div align="center" id="TRUCK" class="car-drawing" style="display:none">
  @endif
		<svg width="640" height="480">
		 <g>
		  <title>Layer 1</title>
		  <circle fill="#000000" stroke="#000000" stroke-width="5" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" cx="216" cy="342.66667" r="29"/>
		  <circle fill="#000000" stroke="#000000" stroke-width="5" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" cx="416" cy="343.66667" r="29"/>
		  <path class="exterior" fill={{$exterior}} d="m123,343.66667c0,0 55,1 55,0.33333c0,-0.66667 0,-34.33333 37,-35c37,-0.66667 39,36.66667 39,36c0,-0.66667 124,2.66667 124,2c0,-0.66667 2,-38.33333 38,-38c36,0.33333 34,40.66667 34,40c0,-0.66667 55,0.66667 55,0c0,-0.66667 0,-68.33333 0,-69c0,-0.66667 -81,-18.33333 -81,-19c0,-0.66667 -35,-59.33333 -35,-60c0,-0.66667 -89,-1.33333 -89,-2c0,-0.66667 -3,74.66667 -3,74.66667c0,0 -172,-2 -172,-2.66667c0,-0.66667 -2,72.66667 -2,72.66667z" stroke-linecap="null" stroke-linejoin="null" stroke-dasharray="null" stroke-width="3" stroke="#000000"/>
		  <rect stroke="#000000" height="87.99999" width="59" y="216.66665" x="310.5" stroke-width="3" fill="#ffffff"/>
		  <path class="interior" fill={{$interior}} stroke="#000000" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" d="m320,231.66667c0,0 17,0 17,0c0,0 3,53 3,53c0,0 24,0 24,0c0,0 0,13 0,13c0,0 -48,0 -48,0c0,0 4,-66 4,-66z"/>
		 </g>
		</svg>
	</div>

	<div align="center">
		<input id="exterior-selector" type="color" value={{$exterior}}>
		<select id="car-type" >
		  <option value="CAR" {{($type == 'CAR')? 'selected': '' }} >Car</option>
		  <option value="SUV" {{($type == 'SUV')? 'selected': '' }} >SUV</option>
			<option value="CNV" {{($type == 'CNV')? 'selected': '' }} >Convertible</option>
			<option value="TRUCK" {{($type == 'TRUCK')? 'selected': '' }} >Truck</option>
		</select>
		<input id="interior-selector"  type="color" value={{$interior}}>
		<br>
		<!-- <label for="interior">interior</label>
		&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		<label for="exterior">exterior</label> -->
	</div>
  <br><br>
  <div align="center">
    <select id="user-cars" >
      <option style="display:none">
		  @foreach($SavedCars as $car)
        <option value='{{$car->name}}'>{{$car->name}}</option>

      @endforeach
		</select>
    <button id="load-btn" type="button" class="btn btn-primary">{{ __('Load Car') }}

  </div>
  <br><br>
  <div align="center">
    <form method="POST" action="/SavedCars">
      {{ csrf_field() }}
      <label for="name-form" >{{ __('Name: ') }}</label>
      <input id="name-form" type="text"  name="name"  required autofocus>
      <input id="exterior-form" type="hidden" name="exterior" value={{$exterior}}>
      <input id="interior-form" type="hidden" name="interior" value={{$interior}}>
      <input id="type-form" type="hidden" name="car_type" value={{$type}} >
      <button type="submit" class="btn btn-primary">{{ __('Save Car') }}
      </button>
    </form>

  </div>

@endsection
