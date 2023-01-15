@extends('dashboard.layout.app')
@section('content')

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="buysell wide-xs m-auto">


                    <div class="buysell-title text-center">
                        <h2 class="title">Make Deposit</h2>
                    </div><!-- .buysell-title -->
                    <div class="buysell-nav text-center">
                        <ul class="nk-nav nav nav-tabs nav-tabs-s2">
                            <li class="nav-item active current-page">
                                <a class="nav-link active" href="html/crypto/buy-sell.html">Crypto Deposit</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Bank Deposit</a>
                            </li>
                        </ul>
                    </div>
                    <div class="buysell-block">
                        <form action="{{ route('user.process') }}" method="POST" class="buysell-form">
                            @csrf

                            <div class="buysell-field form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="buysell-amount">Amount to Deposit</label>
                                </div>
                                <div class="form-control-group">
                                    <input type="text" class="form-control form-control-lg form-control-number" id="buysell-amount" required min="100" name="amount" placeholder="100">
                                    <div class="form-dropdown">
                                        <div class="text">USD</div>
                                    </div>
                                </div>
                                @if(session()->has('declined'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('declined') }}
                                    </div>
                                @endif
                                <div class="form-note-group">
                                    <span class="buysell-min form-note-alt">Minimum: 100.00 USD</span>
                                </div>
                            </div><!-- .buysell-field -->
                            <div class="buysell-field form-group">
                                <div class="form-label-group">
                                    <label class="form-label">Payment Method</label>
                                </div>
                                <div class="form-pm-group">
                                    <ul class="buysell-pm-list">
                                        <li class="buysell-pm-item">
                                            <input class="buysell-pm-control" type="radio" name="deposit_method" value="Crypto" id="pm-paypal">
                                            <label class="buysell-pm-label" for="pm-paypal">
                                                <span class="pm-name">Crypto</span>
                                                <span class="pm-icon"><em class="icon ni ni-coins"></em></span>
                                            </label>
                                        </li>
                                        <li class="buysell-pm-item">
                                            <input class="buysell-pm-control" type="radio" name="deposit_method" value="Bank-Transfer" id="pm-bank">
                                            <label class="buysell-pm-label" for="pm-bank">
                                                <span class="pm-name">Bank Transfer</span>
                                                <span class="pm-icon"><em class="icon ni ni-building-fill"></em></span>
                                            </label>
                                        </li>

                                    </ul>
                                </div>
                            </div><!-- .buysell-field -->
                            <div class="buysell-field form-action">
                                <button type="submit" class="btn btn-lg btn-block btn-primary" data-bs-toggle="modal" >Continue</button>
                            </div><!-- .buysell-field -->
                        </form><!-- .buysell-form -->
                    </div><!-- .buysell-block -->
                </div><!-- .buysell -->
            </div>
        </div>
    </div>

@endsection
