<x-layout>
    <x-slot name="title">CHECKOUT</x-slot>
    <!-- STRIPE EXAMPLE CREDENTIAL
    Card No: 4242424242424242
    Month: any future month
    Year: any future Year
    CVV: 123 -->
    <div class="container-fluid vh-100">
         <div class="row justify-content-center ">
            <div class="col-12">
               <h1 class="text-center mt-4">Checkout</h1>
            </div>
            <div class="row justify-content-center align-items-center">
               <div class="col-6">
                 <p class="fs-4">
                     Indirizzo di spedizione:
                  </p> 
                  <p> {{$adresses->last()->city}}, via {{$adresses->last()->road}}, n° {{$adresses->last()->number}} <br>CAP {{$adresses->last()->cap}}</p>
               </div>
               <div class="col-12 col-md-6 mt-5">
               <div class="panel panel-default credit-card-box">
                  <div class="panel-heading display-table" >
                     <div class="row">
                        <div class="col-12">
                        </div>
                     </div>
                     <div class="row display-tr">
                        <h3 class="panel-title display-td">Inserisci i dati della tua carta</h3>
                     </div>
                  </div>
                  <div class="panel-body">
                     @if (Session::has('success'))
                     <div class="alert alert-success text-center">
                        <p>{{ Session::get('success') }}</p>
                     </div>
                     @endif
                     <form
                        role="form"
                        action="{{ route('stripe.post') }}"
                        method="post"
                        class="require-validation"
                        data-cc-on-file="false"
                        data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                        id="payment-form">
                        @csrf
                        <div class='form-row row my-4'>
                           <div class='col-xs-12 form-group required'>
                              <label class='control-label'>Intestesta a</label> <input
                                 class='form-control' size='4' type='text'>
                           </div>
                        </div>
                        <div class="form-row row">
                           <div class="col-xs-12 form-group card required">
                              <label class="control-label">Numero della carta</label> <input
                                  class='form-control card-number' size='20'
                                 type='text'>
                           </div>
                        </div>
                        <div class="form-row row ">
                           <div class="col-xs-12 mt-3 col-md-4 form-group cvc required">
                              <label class="control-label">CVC</label> <input autocomplete='off'
                                 class="form-control card-cvc" placeholder="ex. 311" size='4'
                                 type='text'>
                           </div>
                           <div class="col-xs-12 mt-3 col-md-4 form-group expiration required">
                              <label class="control-label">Expiration Month</label> <input
                                 class="form-control card-expiry-month" placeholder="MM" size='2'
                                 type='text'>
                           </div>
                           <div class="col-xs-12 mt-3 col-md-4 form-group expiration required">
                              <label class='control-label'>Expiration Year</label> <input
                                 class="form-control card-expiry-year" placeholder="YYYY" size='4'
                                 type='text'>
                           </div>
                        </div>
                        <div class='form-row row'>
                           @if(session('message'))
                           <div class='col-md-12 error form-group hide'>
                              <div class='alert-danger alert hidden'>Please correct the errors and try
                                 again.
                              </div>
                           @endif
                           </div>
                        </div>
                        </div>

                        <!-- <form method="POST" action="{{route('store')}}" class="mt-2">
                           @csrf
                     </form> -->
                        <div class="row">
                           <div class="col-xs-12">
                              <button class="btn btn-primary btn-lg btn-block mt-3" type="submit">Paga ora {{$count}} $</button>
                           </div>
                     </form>
                  </div>
               </div>
            </div>
            </div>
        
         </div>
      </div>
   </body>
   
   <script type="text/javascript">
      $(function() {
    var $form = $(".require-validation");
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]',
                'input[type=text]', 'input[type=file]',
                'textarea'
            ].join(', '),
            $inputs = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid = true;
        $errorMessage.addClass('hide');
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
            var $input = $(el);
            if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('hide');
                e.preventDefault();
            }
        });
        if (!$form.data('cc-on-file')) {
            e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
        }
    });
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
});
   </script>

</x-layout>