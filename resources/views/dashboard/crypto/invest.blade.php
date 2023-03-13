@extends('dashboard.layout.app')
@section('content')

<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="buysell wide-xs m-auto">
                <div class="buysell-nav text-center">
                    <div class="nk-block">
                        <div class="nk-block-head-sm">
                            <div class="nk-block-head-content">
{{--                                <h5 class="nk-block-title title">Invest</h5>--}}
                            </div>
                        </div>
                        <div class="row g-gs">
                            <div class="col-sm-6 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="card card-bordered is-dark">
                                    <div class="nk-wgw">
                                        <div class="nk-wgw-inner">

                                            <img style="border-radius: 50%; height: 80px; width: 80px" src="{{ asset('files/'.$crypto->logo) }}" alt="">
                                            <div class="nk-wgw-balance">

                                                <div class="amount">{{ $crypto->name }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div>
                </div><!-- .buysell-nav -->

                <div class="buysell-block">
                    <form action="{{ route('user.investCrypto') }}" method="POST" class="buysell-form">
                        @csrf
                        @if(session()->has('failed'))
                            <div class="alert alert-danger">
                                {{ session()->get('failed') }}
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
                        <input type="hidden" name="crypto_id" value="{{ $crypto->id }}">

                        <div class="buysell-field form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="buysell-amount">Amount to Buy</label>
                            </div>
                            <div class="form-control-group">
                                <input type="text" class="form-control form-control-lg form-control-number" id="buysell-amount" name="amount" placeholder="100">
                                <div class="form-note-group">
                                    <span class="buysell-min form-note-alt">Minimum Purchase: 100.00 {{ auth()->user()->currency }}</span>
                                </div>
                            </div>

                        </div><!-- .buysell-field -->
                        <div class="buysell-field form-action">
                            <button type="submit" class="btn btn-lg btn-block btn-primary" >Continue to Invest</button>
                        </div><!-- .buysell-field -->
                   </form><!-- .buysell-form -->
                </div><!-- .buysell-block -->
            </div><!-- .buysell -->
        </div>
    </div>
</div>

@endsection
