@extends('dashboard.layout.app')
@section('content')

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="buysell wide-xs m-auto">

                    <div class="buysell-block">
                        <div class="nk-pps-apps">
                            <div class="nk-pps-title">
                                <h3 class="title text-center">Bank Transfer</h3>
                                <p class="caption-text">Your order TNX37093548 has been placed successfully. To complete your deposit, please send the payment of
                                    <strong class="text-dark">@convert($deposit->amount) {{ $deposit->user->currency }}</strong> through bank.</p>
                            </div>
                            <div class="nk-pps-data">
                                <p class="sub-text pb-1 mt-2">We've sent an email to you including payment information as below. If you have any question regarding payment information, please contact us.</p>
                                <h5 class="overline-title-alt mt-4">Payment Information:</h5>

                                <table class="table table-striped" style="width:100%">
                                    <tr>
                                        <th>Payment Amount:</th>
                                        <td>@convert($deposit->amount) {{ $deposit->user->currency }}</td>
                                    </tr>
                                    <tr>
                                        <th>Reference:</th>
                                        <td>{{ $deposit->transId() }}</td>
                                    </tr>
                                </table>

                                <h5 class="overline-title-alt mt-4">Account Information:</h5>
                                <table class="table table-striped" style="width:100%">
                                    <tr>
                                        <th>Account Name:</th>
                                        <td>Contact Support</td>
                                    </tr>
                                    <tr>
                                        <th>Account Number:</th>
                                        <td>Contact Support</td>
                                    </tr>
                                    <tr>
                                        <th>Account Holder Address:</th>
                                        <td>Contact Support</td>
                                    </tr>
                                </table>

                                <h5 class="overline-title-alt mt-4">Our Bank Details:</h5>
                                <table class="table table-striped" style="width:100%">
                                    <tr>
                                        <th>Bank Name:</th>
                                        <td>Contact Support</td>
                                    </tr>
                                    <tr>
                                        <th>Bank Branch:</th>
                                        <td>Contact Support</td>
                                    </tr>
                                    <tr>
                                        <th>Bank Address:</th>
                                        <td>Contact Support</td>
                                    </tr>
                                    <tr>
                                        <th>Sort Code:</th>
                                        <td>Contact Support</td>
                                    </tr>
                                    <tr>
                                        <th>Routing Number:</th>
                                        <td>Contact Support</td>
                                    </tr>
                                    <tr>
                                        <th>IBAN:</th>
                                        <td>Contact Support</td>
                                    </tr>
                                    <tr>
                                        <th>Swift/BIC:</th>
                                        <td>Contact Support</td>
                                    </tr>
                                </table>

                            </div>
                    </div><!-- .buysell-block -->
                </div><!-- .buysell -->
            </div>
        </div>
    </div>

@endsection
