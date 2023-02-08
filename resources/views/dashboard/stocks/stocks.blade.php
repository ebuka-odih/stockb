@extends('dashboard.layout.app')
@section('content')

<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head">

                <!-- .nk-block-head-sub -->
                <div class="buysell-title text-center">
                    <h2 class="title">Stocks</h2>
                </div><!-- .buysell-title -->
                <p  class="text-center fs-6">Here are several Stocks. You can invest daily, weekly or monthly and get higher returns in your investment.</p>
                <p class="text-center">Choose your favourite stocks and start earning now.</p>

            </div><!-- .nk-block-head -->

            <div class="nk-block nk-block-lg">

                <div class="row g-gs">
                    @foreach($stocks as $item)
                    <div class="col-md-6 col-lg-4">
                        <div class="card card-bordered">
                            <div class="nk-wgw">
                                <div class="nk-wgw-inner">
                                    <a class="nk-wgw-name" href="html/crypto/wallet-bitcoin.html">
                                        <div class="nk-wgw-icon ">
                                            <img style="border-radius: 50%" src="{{ asset('files/'.$item->logo) }}" alt="">
                                        </div>
                                        <h5 class="nk-wgw-title title">{{ $item->name }}</h5>
                                    </a>
                                </div>
                                <div class="nk-wgw-actions">
                                    <ul>
                                        <li><a style="visibility: hidden" href="#"><em class="icon ni ni-arrow-up-right"></em> <span>Send</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-arrow-up-right"></em><span>Invest</span></a></li>
                                        <li><a style="visibility: hidden" href="#"><em class="icon ni ni-arrow-to-right"></em><span>Withdraw</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .card -->
                    </div><!-- .col -->
                    @endforeach
                </div><!-- .row -->
            </div><!-- .nk-block -->
        </div>
    </div>
</div>

@endsection
