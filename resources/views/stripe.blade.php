<x-layout>
    <x-slot name="title">CHECKOUT</x-slot>

    <div class="container-fluid vh-100">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="text-center mt-4">Checkout</h1>
            </div>

            <div class="row justify-content-center align-items-center">
                <div class="col-6">
                    <p class="fs-4">Indirizzo di spedizione:</p>
                    <p>{{ $addresses->last()->city }}, via {{ $addresses->last()->road }}, n° {{ $addresses->last()->number }} <br>CAP {{ $addresses->last()->cap }}</p>
                </div>

                <div class="col-12 col-md-6 mt-5">
                    <div class="panel panel-default credit-card-box">
                        <h3>Inserisci i dati della tua carta</h3>

                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif

                        <form role="form"
                              action="{{ route('stripe.post') }}"
                              method="post"
                              class="require-validation"
                              data-cc-on-file="false"
                              data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                              id="payment-form">
                            @csrf

                            <div class="form-row my-3">
                                <label>Intestata a</label>
                                <input type="text" class="form-control required" name="card_holder_name" placeholder="Mario Rossi">
                            </div>

                            <div class="form-row my-3">
                                <label>Numero della carta</label>
                                <input type="text" class="form-control card-number required" autocomplete="off">
                            </div>

                            <div class="form-row row my-3">
                                <div class="col-md-4">
                                    <label>Mese</label>
                                    <input type="text" class="form-control card-expiry-month required" placeholder="MM">
                                </div>
                                <div class="col-md-4">
                                    <label>Anno</label>
                                    <input type="text" class="form-control card-expiry-year required" placeholder="YYYY">
                                </div>
                                <div class="col-md-4">
                                    <label>CVC</label>
                                    <input type="text" class="form-control card-cvc required" placeholder="123">
                                </div>
                            </div>

                            <div class="form-row">
                                <button type="submit" class="btn btn-primary btn-lg btn-block mt-3">Paga ora {{ $count }} $</button>
                            </div>
                        </form>

                        <div class="form-row mt-3">
                            <div class="col-md-12 error form-group hide">
                                <div class="alert alert-danger">Per favore, correggi gli errori e riprova.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- {{-- Stripe.js & jQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script> -->

    <!-- <script>
        $(function () {
            var $form = $(".require-validation");

            $form.bind('submit', function (e) {
                var inputSelector = ['input[type=text]', 'input[type=email]', 'textarea'].join(', ');
                var $inputs = $form.find('.required').find(inputSelector).add($form.find(inputSelector).filter('.required'));
                var $errorMessage = $form.find('div.error');
                var valid = true;
                $errorMessage.addClass('hide');
                $('.has-error').removeClass('has-error');

                $inputs.each(function () {
                    var $input = $(this);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('hide');
                        e.preventDefault();
                        valid = false;
                    }
                });

                if (!valid) return;

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, function (status, response) {
                        if (response.error) {
                            $errorMessage.removeClass('hide');
                            $errorMessage.find('.alert').text(response.error.message);
                        } else {
                            var token = response.id;
                            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                            $form.get(0).submit();
                        }
                    });
                }
            });
        });
    </script> -->
    <script>
        Stripe.setPublishableKey("{{ $stripeKey }}");
    </script>
    <script>console.log("Stripe key: {{ $stripeKey }}");</script>
     <script type="text/javascript">
        $(function() {
            var $form = $(".require-validation");
            const stripe = Stripe("{{ config('app.stripe_key') }}");
            $('form.require-validation').on('submit', function(e) {
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
                    Stripe.setPublishableKey("{{ $stripeKey }}");
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
                    var token = response['id'];
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }
        });
    </script>
</x-layout>
