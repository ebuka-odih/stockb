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
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('user.deposit') }}">Crypto Deposit</a>
                            </li>
                            <li class="nav-item active current-page">
                                <a class="nav-link active" href="#">Wire Transfer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Bank Deposit</a>
                            </li>
                        </ul>
                    </div>
                    <div class="buysell-block">
                        <form action="{{ route('user.processCrypto') }}" method="POST" class="buysell-form">
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
                                    <label class="form-label">Crypto Method</label>
                                </div>
                                <div class="form-control-group">
                                    <select name="payment_method_id" class="form-control form-control-lg" id="">
                                        @foreach($payment_m as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="form-dropdown">
                                        <em class="icon ni ni-coins"></em>
                                    </div>
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
