@extends('_layouts.body')

@section('meta-page')
  <title>{{ $pass->name }} Pass</title>
  <meta name="description" content="One Pass. {{ count($pass->discounts) }} Discounts. Save money and don't miss a thing in {{ $pass->destinations->first()->name }}." />
  <meta name="keywords" content="{{ $pass->name }}, national park, travel, discounts, coupons, attractions, activities, things to do, Get Outside Pass, g.o. pass">
@stop

@section('meta-og')
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="{{ $pass->name }} Pass"/>
  <meta property="og:url" content="{{ Request::url() }}"/>
  <meta property="og:image" content="{{ url('/img/destinations/' . $pass->destinations->first()->slug .'-1200x630.jpg') }}"/>
  <meta property="og:site_name" content="Get Outside Pass"/>
  <meta property="og:description" content="One Pass. {{ count($pass->discounts) }} Discounts. Save money and don't miss a thing in {{ $pass->destinations->first()->name }}."/>
  <meta property="og:locale" content="en_US"/>
@stop

@section('content')

{{-- Hero Slider --}}
<section class="hero-slider" style="background-image: url(/img/destinations/{{ $pass->destinations->first()->slug }}-1920x580.jpg);">
  <div class="header-profits">
    <div class="container">
      <div class="text-center float-right">
        <a href="/foundation">
          <img src="/img/foundation/headerkids.jpg" class="d-block mx-auto img-thumbnail rounded-circle mb-1" alt="Get Kids Outdoors">
          <h5 class="white-color hidden-xs-down btn btn-sm btn-primary">Learn More <i class="fa fa-arrow-right"></i></h5>
        </a>
      </div>
      <h1>All Profits to programs that Get Kids Outdoors.</h1>
    </div>
  </div>
  <div class="container hidden-lg-down">
    <div class="row">
      <div class="col-md-10 padding-bottom-2x text-md-left text-center hero-overlay">
        <div class="hero-text">
          <h2 class="mt-0 mb-0 white-color"><strong>{{ $pass->name }} Pass</strong></h2>
          @if (count($pass->discounts) == 0)
            <h4 class="white-color">Available soon for Summer 2019.</h4>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Show Pass if actively selling. --}}
@if (count($pass->discounts))

{{-- <section id="promotion" class="stickyPromo">
  <div class="row">
    <div class="col-sm-12 text-center mt-2">
      <h5 class="dp-white"><small>7 Day Special - 50% Off - </small><strong>$14</strong> <strike>$28</strike><br class="hidden-sm-up"><span class="hidden-xs-down"> | </span><strong id="countdown"></strong> <small>until it ends</small></h5>
    </div>
  </div>
</section> --}}

{{-- Page Content --}}
<div class="container padding-bottom-3x mb-1 mt-5">
  <div class="row">

    {{-- Right Listings  --}}
    <div class="col-xl-8 col-lg-8 col-md-8 order-md-2" id="rightOffers">

      {{-- Mobile --}}
      <div class="mb-5">
        <h1 class="hidden-xl-up mt-0 mb-0"><strong>{{ $pass->name }} Pass</strong></h1>
        <div id="valuePropLargeMap">
          @if (count($pass->discounts))
            <h2 class="mb-0"><strong>The BEST {{ $pass->destinations->first()->short_name }} activities for LESS.</strong></h2>
            <h4>Unlock the savings below. <span class="hidden-md-up"><br></span><a href="/how">How it works</a></h4>
          @else
            <h2 class="mb-0 text-warning"><strong>Available <span class="dp-warning">Summer 2019.</span></strong></h2>
          @endif
        </div>
      </div>

      {{-- Vendor Listing --}}
      @foreach ($pass->discounts->where('active', '=', 1)->shuffle()->sortByDesc('featured') as $d)
        <div class="col-sm-12" id="discount-{{ $d->id }}">
          @if ($d->featured == 1)
            <div class="product-card product-card-featured product-list {{ str_slug("$d->city, $d->state", "-") }}">
          @else
            <div class="product-card product-list {{ str_slug("$d->city, $d->state", "-") }}">          
          @endif
            <span class="product-thumb">
              <div class="product-badge dp-success hidden-xs-down">
                <div class="pretty p-icon p-smooth p-pulse">
                      @if ($d->featured)
                        {!! Form::checkbox('addToTrip[]', '1', null, ['id' => 'addToTrip[]', 'class' => 'addToTrip', 'checked' => 'checked', 'data-rate-regular-adult' => $d->regular_price_adult, 'data-rate-regular-child' => $d->regular_price_child, 'data-rate-gopass-adult' => ($d->regular_price_adult * ((100 - ($d->percent*100))*.01)), 'data-rate-gopass-child' => ($d->regular_price_child * ((100 - ($d->percent*100))*.01))]) !!}
                      @else
                        {!! Form::checkbox('addToTrip[]', '1', null, ['id' => 'addToTrip[]', 'class' => 'addToTrip', 'data-rate-regular-adult' => $d->regular_price_adult, 'data-rate-regular-child' => $d->regular_price_child, 'data-rate-gopass-adult' => ($d->regular_price_adult * ((100 - ($d->percent*100))*.01)), 'data-rate-gopass-child' => ($d->regular_price_child * ((100 - ($d->percent*100))*.01))]) !!}
                      @endif
                      <div class="state p-success">
                        <i class="icon fa fa-check"></i>
                        <label>Add to Savings</label>
                    </div>
                </div>
              </div>
              <img src="/img/discounts/{{ $pass->destinations->first()->slug }}/{{ $d->vendor->id }}-{{ $d->id }}-450x290.jpg" alt="">
            </span>
            <div class="product-info">
              <h3 class="product-title">
                {{ $d->vendor->name }} <small>{{ $d->city }}, {{ $d->state }}</small>
              </h3>
              <div class="product-buttons">
                @if (is_null($d->percent))
                  <h3><strong>{{ $d->name }}</strong></h3>
                @elseif ($d->percent > .99)
                  <h3><strong><span class="dp-success">${{ $d->percent }} Off</span> {{ $d->name }}</strong></h3>
                @else
                  <h3><strong><span class="dp-success">{{ round($d->percent*100) }}% Off</span> {{ $d->name }}</strong></h3>
                @endif
                {{-- <h3><strong>{{ $d->name }}</strong></h3> --}}
                {!! $d->rates !!}
                <p><a href="#details_{{ $d->id }}" data-toggle="collapse">Details <i class="fa fa-chevron-down"></i></a></p>
                <div class="collapse" id="details_{{ $d->id }}">
                  <p class="hidden-xs-down">{{ $d->description }}</p>
                  <ul class="list-unstyled text-sm">
                    <li><span class="opacity-50">Season:</span> {{ $d->start->format('F jS, Y') }} - {{ $d->end->format('F jS, Y') }}</li>
                    {!! $d->hours !!}
                    @if ($d->fine_print)
                      <li>{{ $d->fine_print }}</li>
                    @endif
                      <li><span class="opacity-50">Limit:</span> {{ $d->limit }}</li>
                    @if ($d->reservations_required == 1 && $d->limited_availability == 0)
                      <li class="dp-danger">Reservations Required</li>
                    @elseif ($d->reservations_required == 0 && $d->limited_availability == 1)
                      <li class="dp-danger">Limited Availability - Book Early!</li>
                    @elseif ($d->reservations_required == 1 && $d->limited_availability == 1)
                      <li class="dp-danger">Reservations Required <span class="gray-darker">|</span> Limited Availability - Book Early!</li> 
                    @endif
                    <li><a href="{{ $d->url }}" target="_blank">Visit Website</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
      {{-- Zion Vendor Outreach --}}
       @if ($pass->id == 6)
       <hr>
       <div class="col-sm-12">
        <h3 class="text-warning mb-0">More vendors coming soon.</h3>
         <h4>We will be adding these adventures in the next few weeks.</h4>
         <ul>
           <li>Zip Lines</li>
           <li>UTV/ATV Rentals</li>
           <li>Horseback Rides</li>
           <li>Hiking Tours</li>
           <li>Canyoneering Guides</li>
           <li>Bike Rentals</li>
           <li>Dining</li>
           <li>and more...</li>
         </ul>
       </div> 
        @endif
      {{-- Great Smoky Mountains Vendor Outreach --}}
       @if ($pass->id == 8)
       <hr>
       <div class="col-sm-12">
        <h3 class="text-warning mb-0">More vendors coming soon.</h3>
         <h4>We will be adding these adventures in the next few weeks.</h4>
         <ul>
           <li>Zip Lines</li>
           <li>Whitewater Rafting</li>
           <li>Mountain Coasters</li>
           <li>Adventure Parks</li>
           <li>Chairlift Rides</li>
           <li>Tram Rides</li>
           <li>Scenic Float Trips</li>
           <li>Tubing</li>
           <li>Bike Rentals</li>
           <li>Dining</li>
           <li>and more...</li>
         </ul>
       </div> 
        @endif 
    </div>

    {{-- Left Sidebar --}}
    <div class="col-xl-4 col-lg-4 col-md-4 order-md-1" id="leftMap">

      {{-- Value Proposition for Map --}}
      {{-- <div id="valuePropSmallMap" class="text-center mb-4">
          <h2 class="mb-0"><strong>The Best {{ $pass->destinations->first()->name }} Activities for Less.</strong></h2>
      </div> --}}
    
      {{-- Map --}}  
      {{-- <aside class="sidebar">
        <div id="destinationMap_wrapper">
            <div id="destinationMap_canvas" class="mapping"></div>
        </div>
        <ul class="list-inline hidden-sm hidden-xs text-right" id="sizeMap">
          <li><a href="" id="resetMap" class="nounderline">reset <i class="fa fa-refresh"></i></a></li>
          <li><a href="" id="sizeMapSmall" class="nounderline">small map <i class="fa fa-search-minus"></i></a></li>
          <li><a href="" id="sizeMapLarge" class="nounderline">large map <i class="fa fa-search-plus"></i></a></li>
        </ul>
      </aside> --}}

      {{-- Town Filter --}}
      {{-- <aside class="sidebar">
        <div class="accordion" id="sideBarAccordion" role="tablist">
          <div class="card">
            <div class="card-header" role="tab">
              <h6><a class="collapsed" href="#filterTown" data-toggle="collapse" aria-expanded="true">Filter by Town</a></h6>
            </div>
            <div class="collapse" id="filterTown" role="tabpanel" style="">
              <div class="card-body">
                @include('/passes/_inc/filters')
              </div>
            </div>
          </div>
        </div>
      </aside> --}}

      {{-- Pass Savings and Purchase --}}
      <div class="sticky">
        <aside class="sidebar">
          <div class="mb-2 text-center">
            <h6 class="my-0"><a href="/foundation">Help fund programs that get kids outdoors!</a></h6>
            @if ($pass->id == 1)
              <h6 class="text-center text-warning">You are viewing last year's GO Yellowstone Summer Pass</h6>
              <h2><a href="/yellowstone/passes/go-yellowstone-2019" class="btn btn-primary btn-xl btn-block">View the 2019 Pass</a></h2>
            @elseif ($pass->id == 2)
              <h6 class="text-center text-warning">You are viewing last year's GO Glacier Summer Pass</h6>
              <h2><a href="/glacier/passes/go-glacier-2019" class="btn btn-primary btn-xl btn-block">View the 2019 Pass</a></h2>
            @else
              <h2><a href="{{ route('checkout.payment', ['pass_id' => $pass->id]) }}" class="btn btn-warning btn-xl btn-block">Get Your Pass <i class="fa fa-arrow-right"></i></a></h2>
            @endif
            <p class="my-0">Good for up to 5 people</p>
            <h5 class="my-0"><strong>Available immediately</strong></h5>
          </div> 
          <div class="mt-0 text-center" id="saveUpTo">
            <hr>
            <h1 class="my-0 totalSavingsDisplay"><strong>Save up to <span class="dp-success">$<span class="totalSavings"></span></span></strong></h1>
            {{-- <h6><a href="#" id="customizeSavingsLink">Customize Your Savings</a></h6> --}}
          </div>
            <div class="card card-featured mt-3" id="customizeSavingsCard">
              <div id="tripBuilder">
                <div class="card-body card-body-featured">
                  <h3 class="text-center dp-success"><strong>What Will You Save?</strong></h3>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group{{ $errors->has('numAdults') ? ' has-error' : '' }}">
                          {!! Form::label('numAdults', '# Adults') !!}
                          {!! Form::number('numAdults', 2, ['class' => 'form-control form-control-sm text-center text-bold', 'autocomplete' => 'off', "onChange" => "gtag('event', '# People Changed', {'event_category': 'Customize' ,'event_label': '# Adults' });"]) !!}
                          <small class="text-danger">{{ $errors->first('numAdults') }}</small>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group{{ $errors->has('numChildren') ? ' has-error' : '' }}">
                          {!! Form::label('numChildren', '# Children') !!}
                          {!! Form::number('numChildren', 2, ['class' => 'form-control form-control-sm text-center text-bold', 'autocomplete' => 'off', "onChange" => "gtag('event', '# People Changed', {'event_category': 'Customize' ,'event_label': '# Children' });"]) !!}
                          <small class="text-danger">{{ $errors->first('numChildren') }}</small>
                      </div>
                    </div>
                  </div>
                  <div class="row text-center">
                    <div class="col-sm-12">
                      <h6 class="my-0" id="selectedActivities"><strong id="totalDiscounts">{{ count($pass->discounts->where('active',1)) }}</strong> <small> activities selected</small></h6>
                      {{-- <h5 class="mt-1"><a href="#" id="customizeSavingsLink">Customize My Savings</a></h5> --}}
                      {{-- <h5>See what you can save!</h5> --}}
                      <h5 class="my-0" id="noSelectedActivities"><strong class="dp-success" style="text-transform: uppercase;">Add to Savings <i class="fa fa-arrow-right"></i></strong></h5>
                      <hr class="my-2">
                      <h1 class="my-0 totalSavingsDisplay"><strong>You Save <span class="dp-success">$<span class="totalSavings"></span></span></strong></h1>
                          <h6 class="my-0">With the {{ $pass->name }} Pass</h6>
                      {{-- <h6 class="my-0"><small>Regular Price</small> $<span id="regularPrice"></span> <small> With GO Pass</small> $<span id="goPrice"></span></h6> --}}
                      {{-- <h6><a href="" id="resetSavings">Reset</a></p> --}}
                        <hr class="my-2">
                      <h6 class="my-0"><small>All {{ count($pass->discounts->where('active', '=', 1)) }} activities are included with each pass in case you find other activities later.</small></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
  			</aside> 
      </div>
    </div>
  </div>
</div>

{{-- Testimonials --}}
<div class="bg-secondary">
  <div class="container testimonials">
   <h4 class="gray-darker">What you're saying...</h4>
    <div class="row">
      <div class="col-md-4">
        <blockquote class="margin-top-1x margin-bottom-1x">
          <p><em>The pass is very reasonably priced! I ended up saving $32.50 over 6 days, so it more than paid for itself…</em></p>
          <cite>Susan</cite>
        </blockquote>
      </div>
      <div class="col-md-4">
        <blockquote class="margin-top-1x margin-bottom-1x">
          <p><em>Love this young company. Great value and getting new businesses hooked in all the time. Keep up the good work!</em></p>
          <cite>Janet - Los Angeles, CA</cite>
        </blockquote>
      </div>
      <div class="col-md-4">
        <blockquote class="margin-top-1x margin-bottom-1x">
          <p><em>100% of their profits go to helping kids get outdoors! Brilliant! So proud of them!!</em></p>
          <cite>Kate - Oakland, CA</cite>
        </blockquote>
      </div>
    </div>
  </div>
</div>

<div class="stickyFooter hidden-md-up">
    <a href="{{ route('checkout.payment', ['pass_id' => $pass->id]) }}">
      <h3 class="white-color"><strong>Get Your Pass <i class="fa fa-arrow-right"></i></strong></h3>
      <h6 class="mt-1 text-center dp-info">Good for up to 5 people.</h6>
    </a>
</div>

@endif

@stop

@section('scripts')

{{-- MailChimp Popup --}}
<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us18.list-manage.com","uuid":"5e0fce7e4132ef1c8a2a97272","lid":"008eacf5d6"}) })</script>
{{-- Google Maps Marker Clusterer --}}
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>

{{-- Multiple Markets Test --}}
{{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="../../maptest.json"></script>
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script> --}}

<script>

/////////
/// Towns Filter
/////////

$("#filters :checkbox").click(function() {
  $(".product-card").fadeOut('fast');
  $("#filters :checkbox:checked").each(function() {
    $("." + $(this).val()).fadeIn('fast');
  });
});

/////////
/// Expand Map
/////////

$('#sizeMapLarge').click(function (e) {
  e.preventDefault();
  $('#rightOffers').attr('class', 'col-sm-12 col-md-12 m-t-3 order-md-2');
  // $('#rightOffers').children('div').attr('class', 'col-sm-6 col-md-6');
  $('#leftMap').attr('class', 'col-sm-12 col-md-12 order-md-1');
  $('#sizeMapSmall').show();
  $('#sizeMapLarge').hide();
  $('#filters').hide();
  $('#resetMap').show();
  $('.hideLargeMap').hide();
  $('#valuePropLargeMap').hide();
  $('#valuePropSmallMap').show();
  $('#destinationMap_wrapper').css({'height': '600px' });
  initialize();
});

$('#sizeMapSmall').click(function (e) {
  e.preventDefault();
  $('#rightOffers').attr('class', 'col-sm-12 col-md-8 order-md-2');
  // $('#rightOffers').children('div').attr('class', 'col-sm-12 col-md-12');
  $('#leftMap').attr('class', 'col-sm-12 col-md-4 order-md-1');
  $('#sizeMapSmall').hide();
  $('#sizeMapLarge').show();
  $('#filters').show();
  $('#resetMap').hide();
  $('#valuePropLargeMap').show();
  $('#valuePropSmallMap').hide();
  $('#destinationMap_wrapper').css({'height': '400px' });
  initialize();
});

/// Hide map specific items on Page Load.
$('#sizeMapSmall').hide();
$('#valuePropSmallMap').hide();
$('#resetMap').hide();

//////////
/// Trip Builder
//////////

// On Page Load
$(function() {
  // Hide on initial page load
  // $("#customizeSavingsCard").hide();
  // $(".product-badge").hide();
  $("#saveUpTo").hide();
  // Calculate Savings of All Discounts
  var numAdults = $('#numAdults').val();
  var numChildren = $('#numChildren').val();
  totalRegularPrice(numAdults,numChildren);
});

// Display Savings Calculator
$("#customizeSavingsLink").on('click', function(e) {
  e.preventDefault();
  $(this).hide();
  // $("#saveUpTo").hide();
  // $("#customizeSavingsCard").fadeIn();
  $('.product-card').removeClass('product-card-featured');
  // $(".product-badge").fadeIn();
  $(".addToTrip").prop('checked', false);
  $("#numAdults").val(2);
  // Find # Adults and Children
  var numAdults = $('#numAdults').val();
  var numChildren = $('#numChildren').val();
  // Fire Regular Price Function
  totalRegularPrice(numAdults, numChildren);
});

// $("#resetSavings").on('click', function(e) {
//   e.preventDefault();
//   $("#customizeSavingsCard").fadeOut();
//   $(".product-badge").fadeOut();
//   $("#saveUpTo").fadeIn();
//   $(".addToTrip").prop('checked', true);
//   // Find # Adults and Children
//   var numAdults = $('#numAdults').val();
//   var numChildren = $('#numChildren').val();
//   // Fire Regular Price Function
//   totalRegularPrice(numAdults, numChildren);
// });

// On checkbox selection fo offer, hit all other functions to calculate.
$('.addToTrip').on('change', function() {
  // Toggle on the Featured Class for the Discount
  if(this.checked) {
    $(this).closest('.product-card').addClass('product-card-featured');
  } else {
    $(this).closest('.product-card').removeClass('product-card-featured');
  }
  // Hide CTA to Choose Activities
  // $("#noSelectedActivities").fadeOut();
  // Find # Adults and Children
  var numAdults = $('#numAdults').val();
  var numChildren = $('#numChildren').val();
  // Fire Regular Price Function
  totalRegularPrice(numAdults, numChildren);
});

// On # of Adults or # of Children Keyup, hit all other functions to calculate.
$('#numAdults,#numChildren').on('keyup', function() {
  var numAdults = $('#numAdults').val();
  var numChildren = $('#numChildren').val();
  // Fire Regular Price Function
  totalRegularPrice(numAdults, numChildren);
});
// Must have this to trigger calculation if they use the increase/decrease numbers.
$('#numAdults,#numChildren').on('change', function() {
  var numAdults = $('#numAdults').val();
  var numChildren = $('#numChildren').val();
  // Fire Regular Price Function
  totalRegularPrice(numAdults, numChildren);
});

// @TODO - Populate database.
// @TODO - Deal with activities that are not a discount percentage.
// @TODO - Clear featured and build your own.
// @TODO - Add Disclaimer that this is only an estimate.
// @TODO - Add warning if total # of people is over 5.
// @TODO - Pulse savings total when changing numAdults, numChildren or activities.
// @TODO - Find a way to add the map view back with "Let's Do This" checkboxes.

// Calculate & Display Regular Price
function totalRegularPrice(numAdults,numChildren){
    var regularPriceAdult = 0;
    var regularPriceChild = 0;
    // Get Regular Price of both Adult and Child for each Activity Selected
    $(".addToTrip").each(function(index) {
      if(this.checked) {
        regularPriceAdult = regularPriceAdult + Number($(this).data('rate-regular-adult'));
        regularPriceChild = regularPriceChild + Number($(this).data('rate-regular-child'));
      }
    });
    // Multiply by the number of adults and children
    regularPriceAdult = numAdults * regularPriceAdult;
    regularPriceChild = numChildren * regularPriceChild;    
    regularPrice = regularPriceAdult + regularPriceChild;
    $('#regularPrice').text(addCommas(roundTo(regularPrice, 0)));
    // Fire GO Price Function
    totalGoPrice(numAdults, numChildren, regularPrice);
}

// Calculate & Display the GO Pass Price
function totalGoPrice(numAdults,numChildren,regularPrice){
    var goPriceAdult = 0;
    var goPriceChild = 0;
    // Get Go Pass Price of both Adult and Child for each Activity Selected
    $(".addToTrip").each(function(index) {
      if(this.checked) {
        goPriceAdult = goPriceAdult + Number($(this).data('rate-gopass-adult'));
        goPriceChild = goPriceChild + Number($(this).data('rate-gopass-child'));
      }      
    });
    // Multiply by the number of adults and children
    goPriceAdult = numAdults * goPriceAdult;
    goPriceChild = numChildren * goPriceChild;
    goPrice = goPriceAdult + goPriceChild;
    $('#goPrice').text(addCommas(roundTo(goPrice, 0)));
    // Fire Total Savings Function
    totalSavings(regularPrice, goPrice);
}

// Calculate & Display the Total Savings
function totalSavings(regularPrice,goPrice){
    var totalSavings = 0;
    totalSavings = regularPrice - goPrice;
    $('.totalSavingsDisplay').hide();
    $('.totalSavings').text(addCommas(roundTo(totalSavings, 0)));
    $('.totalSavingsDisplay').slideDown();
    // Fire Total Discounts Function
    totalDiscounts();
}

// Calculate & Display the # of Discounts Selected
function totalDiscounts(numAdults,numChildren){
    var totalDiscounts = 0;
    $(".addToTrip").each(function(index) {
      if(this.checked) {
        totalDiscounts = totalDiscounts + Number($(this).val());
      }      
    });
    $('#totalDiscounts').text(addCommas(totalDiscounts));
}

// Adds Number Commas
function addCommas(nStr) {
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}
// Round for display
function roundTo(num,places) {
    var calc = (Math.round(num*(Math.pow(10,places)))/(Math.pow(10,places)));
    return calc.toFixed(0);
}

// // Countdown Timer
// // Set the date we're counting down to
// var countDownDate = new Date("Apr 13, 2019 00:00:00").getTime();

// // Update the count down every 1 second
// var x = setInterval(function() {

//   // Get todays date and time
//   var now = new Date().getTime();

//   // Find the distance between now and the count down date
//   var distance = countDownDate - now;

//   // Time calculations for days, hours, minutes and seconds
//   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
//   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//   var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//   var seconds = Math.floor((distance % (1000 * 60)) / 1000);

//   // Display the result in the element with id="demo"
//   // document.getElementById("countdown").innerHTML = days + "days " + hours + "h " + minutes + "m " + seconds + "s ";
//   document.getElementById("countdown").innerHTML = hours + "h " + minutes + "m " + seconds + "s ";

//   // If the count down is finished, write some text 
//   if (distance < 0) {
//     clearInterval(x);
//     document.getElementById("demo").innerHTML = "EXPIRED";
//   }
// }, 1000);

//////////
/// Destination Map with Offers
/// https://wrightshq.com/playground/placing-multiple-markers-on-a-google-map-using-api-3/
//////////

// $(function($) {
//   // Asynchronously Load the map API 
//   var script = document.createElement('script');
//   script.src = "//maps.googleapis.com/maps/api/js?key=AIzaSyCtqYOh4F3zeGI_Tf4nlXjNZ95j5J7Kdrg&callback=initialize";
//   document.body.appendChild(script);
// });

/// Initialize Map for initial load.
// function initialize(newMarkers, newInfoWindowContent) {

//     var map;
//     var bounds = new google.maps.LatLngBounds();

//     var mapOptions = {
//         mapTypeId: 'roadmap',
//         controlSize: 24,
//     };

//     // Create Markers
//     if(newMarkers) {
//       markers = [];
//       markers = newMarkers;
//     } else {
//       markers = [
//           @foreach ($pass->discounts->where('active', '=', 1) as $d)
//             ['{{ $d->name }}', {{ $d->latitude }}, {{ $d->longitude }}],
//           @endforeach
//       ];
//     }
                    
//     // Info Window Content
//     if(newInfoWindowContent) {
//       infoWindowContent = [];
//       infoWindowContent = newInfoWindowContent;
//     } else {
//       infoWindowContent = [
//         @foreach ($pass->discounts->where('active', '=', 1) as $d)
//           @if ($d->percent > .99)
//             ['<div class="property clearfix"><div class="image"><div class="content"><a href="{{ $d->url }}" target="_blank"><i class="fa fa-external-link"></i></a><img src="/img/discounts/{{ $pass->destinations->first()->slug }}/{{ $d->vendor->id }}-{{ $d->id }}-450x290.jpg" alt="{{ $d->name }}" width="300" class="img-responsive"><span class="label-name">{{ $d->name }}</span><span class="label-discount">${{ $d->percent }} Off</span></div></div></div>'],
//           @else
//             ['<div class="property clearfix"><div class="image"><div class="content"><a href="{{ $d->url }}" target="_blank"><i class="fa fa-external-link"></i></a><img src="/img/discounts/{{ $pass->destinations->first()->slug }}/{{ $d->vendor->id }}-{{ $d->id }}-450x290.jpg" alt="{{ $d->name }}" width="300" class="img-responsive"><span class="label-name">{{ $d->name }}</span><span class="label-discount">{{ round($d->percent*100) }}% Off</span></div></div></div>'],
//           @endif
//         @endforeach
//       ];
//     }
                    
//     // Display the map on the page
//     map = new google.maps.Map(document.getElementById("destinationMap_canvas"), mapOptions);
        
//     // Display infowindow on the map
//     var infoWindow = new google.maps.InfoWindow({
//       maxWidth: 340
//     }), marker, i;
    
//     var image = {
//       // url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
//       // url: 'https://www.getoutsidepass.com/img/map/pin.png',
//       // This marker is 20 pixels wide by 32 pixels high.
//       size: new google.maps.Size(parseFloat(20), parseFloat(32)),
//       // The origin for this image is (0, 0).
//       // origin: new google.maps.Point(0, 0),
//       // The anchor for this image is the base of the flagpole at (0, 32).
//       // anchor: new google.maps.Point(0, 32)
//     };

//     // Loop through the array of markers & place each one on the map  
//     for( i = 0; i < markers.length; i++ ) {
//         // Set the position and bounds for zoom level and placement
//         var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
//         bounds.extend(position);
//         // Create the marker
//         marker = new google.maps.Marker({
//             position: position,
//             map: map,
//             icon: image,
//             title: markers[i][0]
//         });
        
//         // Create an infoWindow for each marker  
//         google.maps.event.addListener(marker, 'click', (function(marker, i) {
//             return function() {
//                 infoWindow.setContent(infoWindowContent[i][0]);
//                 // map.setCenter(marker.getPosition());
//                 infoWindow.open(map, marker);
//             }
//         })(marker, i));
//         // Close the infoWindow when clicking elsewhere on the map
//         google.maps.event.addListener(map, "click", function(){
//           infoWindow.close();
//         });

//         // Automatically center the map and zoom to fit all markers
//         map.fitBounds(bounds);
//     }

//     // Add a marker clusterer to manage the markers.
//     var markerCluster = new MarkerClusterer(map, markers);

//     // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
//     var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
//         // this.setZoom(9);
//         google.maps.event.removeListener(boundsListener);
//     });;

//     $("#resetMap").click(function(e) {
//         e.preventDefault();
//         infoWindow.close();
//         map.fitBounds(bounds);
//     })
    
// }

// Multiple Markets Test that Works

// function initialize() {
//   var center = new google.maps.LatLng(37.4419, -122.1419);
//   var map = new google.maps.Map(document.getElementById('destinationMap_canvas'), {
//     zoom: 3,
//     center: center,
//     mapTypeId: google.maps.MapTypeId.ROADMAP
//   });
//   var markers = [];
//   for (var i = 0; i < 100; i++) {
//     var dataPhoto = data.photos[i];
//     var latLng = new google.maps.LatLng(dataPhoto.latitude,
//         dataPhoto.longitude);
//     var marker = new google.maps.Marker({
//       position: latLng
//     });
//     markers.push(marker);
//     console.log(markers);
//   }
//   var markerCluster = new MarkerClusterer(map, markers);
// }
// google.maps.event.addDomListener(window, 'load', initialize);

</script>
@stop