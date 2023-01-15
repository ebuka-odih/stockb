@extends('dashboard.layout.app')
@section('content')

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="buysell wide-xs m-auto">

                    <div class="buysell-title text-center">
                        <h2 class="title">Make Deposit</h2>
                    </div><!-- .buysell-title -->
                    <div class="buysell-block">
                        <div class="nk-pps-apps">
                            <div class="nk-pps-title">
                                <h3 class="title text-center">Transfer your Money</h3>
                                <p class="caption-text">Your order TNX37093548 has been placed successfully. To complete your deposit, please send the payment of <strong class="text-dark">@convert($deposit->amount) USD</strong> through bank.</p>
                            </div>
                            <div class="nk-pps-data">
                                <p class="sub-text pb-1">We've sent an email to you including payment information as below. If you have any question regarding payment information, please contact us.</p>
                                <h5 class="overline-title-alt mt-4">Payment Information:</h5>
                                <ul class="nk-olist nk-olist-flat is-aligned is-compact">
                                    <li class="nk-olist-item">
                                        <div class="label lead-text">Payment Amount</div>
                                        <div class="data">@convert($deposit->amount) USD</div>
                                    </li>
                                    <li class="nk-olist-item">
                                        <div class="label lead-text">Reference</div>
                                        <div class="data">{{ $deposit->transId() }}</div>
                                    </li>
                                </ul>

                                <h5 class="overline-title-alt mt-4">Account Information:</h5>
                                <ul class="nk-olist nk-olist-flat is-aligned is-compact">
                                    <li class="nk-olist-item">
                                        <div class="label lead-text">Account Name</div>
                                        <div class="data">Contact Support</div>
                                    </li>
                                    <li class="nk-olist-item">
                                        <div class="label lead-text">Account Number</div>
                                        <div class="data">Contact Support</div>
                                    </li>
                                    <li class="nk-olist-item">
                                        <div class="label lead-text">Account Holder Address</div>
                                        <div class="data">Contact Support</div>
                                    </li>
                                </ul>

                                <h5 class="overline-title-alt mt-4">Our Bank Details:</h5>
                                <ul class="nk-olist nk-olist-flat is-plain is-aligned">
                                    <li class="nk-olist-item">
                                        <div class="label lead-text">Bank Name</div>
                                        <div class="data">Contact Support</div>
                                    </li>
                                    <li class="nk-olist-item">
                                        <div class="label lead-text">Bank Branch</div>
                                        <div class="data">Contact Support</div>
                                    </li>
                                    <li class="nk-olist-item">
                                        <div class="label lead-text">Bank Address</div>
                                        <div class="data">Contact Support</div>
                                    </li>
                                    <li class="nk-olist-item">
                                        <div class="label lead-text">Sort Code</div>
                                        <div class="data">Contact Support</div>
                                    </li>
                                    <li class="nk-olist-item">
                                        <div class="label lead-text">Routing Number</div>
                                        <div class="data">Contact Support</div>
                                    </li>
                                    <li class="nk-olist-item">
                                        <div class="label lead-text">IBAN</div>
                                        <div class="data">Contact Support</div>
                                    </li>
                                    <li class="nk-olist-item">
                                        <div class="label lead-text">Swift/BIC</div>
                                        <div class="data">Contact Support</div>
                                    </li>
                                </ul>
                            </div>
                    </div><!-- .buysell-block -->
                </div><!-- .buysell -->
            </div>
        </div>
    </div>

@endsection
