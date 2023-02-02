@extends('dashboard.layout.app')
@section('content')

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="buysell wide-xs m-auto">

                    <div class="buysell-title text-center">
                        <h3 class="title">Crypto Deposit </h2>
                    </div><!-- .buysell-title -->
                    <hr>
                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session()->get('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="buysell-block">
                        <form action="#" class="buysell-form">
                            <div class="buysell-field form-group">
                                <div class="col-md-12  mt-3 buysell-title text-center">
                                    <h4>Scan QRCode</h4>
                                    {!! QrCode::size(150)->generate($deposit->payment_method->value); !!}
                                    <br>
                                   <p class="mt-4" id="foo"> Wallet Address: <span class="text-primary">{{ $deposit->payment_method->value }}</span> <a class="btn text-primary"  data-clipboard-target="#foo"><em class="icon ni ni-copy"></em></a></p>
                                </div>
                            </div><!-- .buysell-field -->
                            <p style="font-size: 20px">Deposit the sum of <span class="text-success">{{ $deposit->user->currency }} @convert($deposit->amount)</span> to the wallet above</p>


                            <div class="buysell-field form-action">
                                <a class="btn btn-lg btn-block btn-primary" data-bs-toggle="modal" href="#buy-coin">Confirm Deposit</a>
                            </div><!-- .buysell-field -->

                        </form><!-- .buysell-form -->
                    </div><!-- .buysell-block -->
                </div><!-- .buysell -->
            </div>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>

    <script>
        new ClipboardJS('.btn');
    </script>


    <div class="modal fade" tabindex="-1" role="dialog" id="buy-coin">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <div class="nk-block-head nk-block-head-xs text-center">
                        <h5 class="nk-block-title">Confirm Order</h5>

                    </div>
                    <form action="{{ route('user.processPayment') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="deposit_id" value="{{ $deposit->id }}">

                        <div class="nk-block">

                            <div class="buysell-field form-group">
                                <div class="buysell-field form-group">
                                    <div class="form-label-group">
                                        <label class="form-label" for="buysell-amount">Payment Screenshot</label>
                                    </div>
                                    <div class="form-control-group">
                                        <input type="file"  class="form-control form-control-file" id="buysell-amount" name="reference">
                                    </div>
                                    <p class="text-danger mt-3">Upload a screenshot of your payment for confirmation.</p>
                                </div>

                            </div><!-- .buysell-field -->
                            <div class="buysell-field form-action text-center">
                                <div>
                                    <button type="submit" class="btn btn-primary btn-lg" >Confirm the Order</button>
                                </div>
                                <div class="pt-3">
                                    <a href="#" data-bs-dismiss="modal" class="link link-danger">Cancel Order</a>
                                </div>
                            </div>
                        </div><!-- .nk-block -->
                    </form>


                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->


@endsection
