@extends('_layouts.body')

@section('meta-page')
  <title>The Dimple Pass | Save Money on National Park Travel</title>
  <meta name="description" content="Meta Description Here" />
@stop

@section('meta-og')
  <meta property="og:type" content="article"/>
  <meta property="og:title" content="OG Title Here"/>
  <meta property="og:url" content="{{ Request::url() }}"/>
  <meta property="og:image" content="OG Image URL Here."/>
  <meta property="og:site_name" content="Dimple Pass"/>
  <meta property="og:description" content="OG Description Here."/>
  <meta property="og:locale" content="en_US"/>
@stop

@section('logo-tag')
Frequently Asked Questions
@stop

@section('content')

<!-- Page Title-->
<div class="page-title">
  <div class="container">
    <div class="column">
      <h1>Frequently Asked Questions</h1>
    </div>
    <div class="column">
      <ul class="breadcrumbs">
        <li><a href="/">Home</a>
        </li>
        <li class="separator">&nbsp;</li>
        <li>Frequently Asked Questions</li>
      </ul>
    </div>
  </div>
</div>
      <!-- Page Content-->
      <div class="container padding-bottom-3x">
        <div class="row">
          <!-- Side Menu-->
          <div class="col-lg-3 col-md-4">
            <nav class="list-group"><a class="list-group-item active" href="#">Most Popular Questions</a><a class="list-group-item" href="#">Managing Account</a><a class="list-group-item" href="#">Working With Dashboard</a><a class="list-group-item" href="#">Available Payment Methods</a><a class="list-group-item" href="#">Delivery Information</a><a class="list-group-item" href="#">Order Tracking Instructions</a><a class="list-group-item" href="#">Refund Policy</a><a class="list-group-item" href="#">Offers And Discounts</a><a class="list-group-item" href="#">Reward Points</a><a class="list-group-item" href="#">Affiliate Program</a><a class="list-group-item" href="#">Service Terms &amp; Conditions</a></nav>
            <div class="padding-bottom-3x hidden-md-up"></div>
          </div>
          <!-- Content-->
          <div class="col-lg-9 col-md-8">
            <div class="accordion" id="accordion" role="tablist">
              <div class="card">
                <div class="card-header" role="tab">
                  <h6><a href="#collapseOne" data-toggle="collapse" data-parent="#accordion">How is the Dimple Pass delivered?</a></h6>
                </div>
                <div class="collapse show" id="collapseOne" role="tabpanel">
                  <div class="card-body">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, harum. Asperiores mollitia sed ullam quae blanditiis explicabo, reprehenderit sint rerum, labore, fugit obcaecati laboriosam nulla voluptatem inventore nobis esse nemo.</p>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab">
                  <h6><a class="collapsed" href="#collapseTwo" data-toggle="collapse" data-parent="#accordion">Do you offer refunds for cancelled trips?</a></h6>
                </div>
                <div class="collapse" id="collapseTwo" role="tabpanel">
                  <div class="card-body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab">
                  <h6><a class="collapsed" href="#collapseThree" data-toggle="collapse" data-parent="#accordion">Should I make reservations ahead of time?</a></h6>
                </div>
                <div class="collapse" id="collapseThree" role="tabpanel">
                  <div class="card-body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab">
                  <h6><a class="collapsed" href="#collapseFour" data-toggle="collapse" data-parent="#accordion">Are there limits to the number of people that can use the Dimple Pass?</a></h6>
                </div>
                <div class="collapse" id="collapseFour" role="tabpanel">
                  <div class="card-body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab">
                  <h6><a class="collapsed" href="#collapseFive" data-toggle="collapse" data-parent="#accordion">Are you adding new destinations?</a></h6>
                </div>
                <div class="collapse" id="collapseFive" role="tabpanel">
                  <div class="card-body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab">
                  <h6><a class="collapsed" href="#collapseSix" data-toggle="collapse" data-parent="#accordion">What if a vendor does not accept my Dimple Pass?</a></h6>
                </div>
                <div class="collapse" id="collapseSix" role="tabpanel">
                  <div class="card-body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                </div>
              </div>
            </div>
            <h3 class="padding-top-2x">Haven't found the answer? Ask us.</h3>
            <p class="text-muted mb-30">We normally respond within 2 business days. Most popular questions will appear on this page.</p>
            <form class="row" method="post">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="help_name">Your Name</label>
                  <input class="form-control form-control-rounded" type="text" id="help_name" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="help_email">Your Email</label>
                  <input class="form-control form-control-rounded" type="email" id="help_email" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="help_subject">Subject</label>
                  <input class="form-control form-control-rounded" type="text" id="help_subject" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="help_category">Category</label>
                  <select class="form-control form-control-rounded" id="help_category">
                    <option>Account Management</option>
                    <option>Refund Policy</option>
                    <option>Payment Procedure</option>
                    <option>Shipping Info</option>
                    <option>Referral Program</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label for="help_question">Question </label>
                  <textarea class="form-control form-control-rounded" id="help_question" rows="8" required></textarea>
                </div>
              </div>
              <div class="col-12 text-right">
                <button class="btn btn-primary btn-rounded" type="submit">Submit Question</button>
              </div>
            </form>
          </div>
        </div>
      </div>

@stop

@section('scripts')
<script>

</script>
@stop