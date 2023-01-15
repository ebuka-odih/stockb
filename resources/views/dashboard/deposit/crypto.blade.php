@extends('dashboard.layout.app')
@section('content')

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="buysell wide-xs m-auto">

                    <div class="buysell-title text-center">
                        <h2 class="title">Crypto Deposit </h2>
                    </div><!-- .buysell-title -->
                    <br>
                    <div class="buysell-block">
                        <form action="#" class="buysell-form">
                            <div class="buysell-field form-group">
                                <div class="col-md-12  mt-3 buysell-title text-center">
                                    <h4>Scan QRCode</h4>
                                    {!! QrCode::size(150)->generate($deposit->payment_method->value); !!}
                                    <br>
                                    <p class="mt-4" id="foo">{{ $deposit->payment_method->value }} <a class="btn text-primary"  data-clipboard-target="#foo"><em class="icon ni ni-copy"></em></a></p>
                                </div>
                            </div><!-- .buysell-field -->


                            <div class="buysell-field form-action">
                                <a class="btn btn-lg btn-block btn-primary" data-bs-toggle="modal" href="#buy-coin">Confirm Deposit</a>
                            </div><!-- .buysell-field -->
                            <div class="form-note text-base text-center">Note: our transfer fee included, <a href="#">see our fees</a>.</div>

                        </form><!-- .buysell-form -->
                    </div><!-- .buysell-block -->
                </div><!-- .buysell -->
            </div>
        </div>
    </div>



    <div class="modal fade" tabindex="-1" role="dialog" id="buy-coin">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <div class="nk-block-head nk-block-head-xs text-center">
                        <h5 class="nk-block-title">Confirm Order</h5>
                        <div class="nk-block-text">
                            <div class="caption-text">You are about to get <strong>0.5968</strong> BTC for <strong>500.00</strong> USD*</div>
                            <span class="sub-text-sm">Exchange rate: 1 BTC = 9,804.00 USD</span>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="buysell-overview">
                            <ul class="buysell-overview-list">
                                <li class="buysell-overview-item">
                                    <span class="pm-title">Pay with</span>
                                    <span class="pm-currency"><em class="icon ni ni-paypal-alt"></em> <span>PayPal</span></span>
                                </li>
                                <li class="buysell-overview-item">
                                    <span class="pm-title">Total</span>
                                    <span class="pm-currency">500.00 USD</span>
                                </li>
                            </ul>
                            <div class="sub-text-sm">* Our transaction fee are included. <a href="#">See transaction fee</a></div>
                        </div>
                        <div class="buysell-field form-group">
                            <div class="form-label-group">
                                <label class="form-label">Choose what you want to get</label>
                                <a href="#" class="link">Add Wallet</a>
                            </div>
                            <input type="hidden" value="btc" name="bs-currency" id="buysell-choose-currency-modal">
                            <div class="dropdown buysell-cc-dropdown">
                                <a href="#" class="buysell-cc-chosen dropdown-indicator" data-bs-toggle="dropdown">
                                    <div class="coin-item coin-btc">
                                        <div class="coin-icon">
                                            <em class="icon ni ni-sign-btc-alt"></em>
                                        </div>
                                        <div class="coin-info">
                                            <span class="coin-name">BTC Wallet</span>
                                            <span class="coin-text">1X38 * * * * YW94</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-auto dropdown-menu-mxh">
                                    <ul class="buysell-cc-list">
                                        <li class="buysell-cc-item selected">
                                            <a href="#" class="buysell-cc-opt" data-currency="btc">
                                                <div class="coin-item coin-btc">
                                                    <div class="coin-icon">
                                                        <em class="icon ni ni-sign-btc-alt"></em>
                                                    </div>
                                                    <div class="coin-info">
                                                        <span class="coin-name">BTC Wallet</span>
                                                        <span class="coin-text">1X38 * * * * YW94</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li> <!-- .buysell-cc-item -->
                                        <li class="buysell-cc-item">
                                            <a href="#" class="buysell-cc-opt" data-currency="eth">
                                                <div class="coin-item coin-eth">
                                                    <div class="coin-icon">
                                                        <em class="icon ni ni-sign-eth-alt"></em>
                                                    </div>
                                                    <div class="coin-info">
                                                        <span class="coin-name">Ethereum (ETH)</span>
                                                        <span class="coin-text">Not order yet!</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li> <!-- .buysell-cc-item -->
                                    </ul>
                                </div>
                            </div><!-- .dropdown -->
                        </div><!-- .buysell-field -->
                        <div class="buysell-field form-action text-center">
                            <div>
                                <a class="btn btn-primary btn-lg" data-bs-dismiss="modal" data-bs-toggle="modal" href="#confirm-coin">Confirm the Order</a>
                            </div>
                            <div class="pt-3">
                                <a href="#" data-bs-dismiss="modal" class="link link-danger">Cancel Order</a>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>

    <script>
        new ClipboardJS('.btn');
    </script>
@endsection
