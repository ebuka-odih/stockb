@extends('dashboard.layout.app')
@section('content')

<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head">
                <div class="nk-block-head-sub"><span>Account Balance</span></div>
                <div class="nk-block-between-md g-4">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title fw-normal">My Account</h2>
                        <div class="nk-block-des">
                            <p>At a glance summary of your account. Have fun!</p>
                        </div>
                    </div>
                    <div class="nk-block-head-content">
                        <ul class="nk-block-tools gx-3">
                            <li class="btn-wrap"><a href="{{ route('user.deposit') }}" class="btn btn-icon btn-xl btn-success"><em class="icon ni ni-wallet-in"></em></a><span class="btn-extext">Deposit</span></li>
                            <li class="btn-wrap"><a href="#" class="btn btn-icon btn-xl btn-warning"><em class="icon ni ni-wallet-out"></em></a><span class="btn-extext">Withdraw</span></li>
                        </ul>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <div class="nk-wg1 mb-3">
                            <div class="nk-wg1-group g-2">
                                <div class="nk-wg1-item me-xl-4">
                                    <div class="nk-wg1-title">Available Balance / <div class="dropdown">
                                            <a  data-offset="0,10" href="#" data-bs-toggle="dropdown">{{ $user->currency }}</a>
                                        </div>
                                    </div>
                                    <div class="nk-wg1-amount">
                                        <div class="amount">@convert($user->balance) <small class="currency currency-btc">{{ $user->currency }}</small></div>
                                    </div>
                                </div><!-- .nk-wg1-item -->
                                <div class="nk-wg1-item me-xl-4">
                                    <div class="nk-wg1-title">Withdrawal Balance / <div class="dropdown">
                                            <a  data-offset="0,10" >{{ $user->currency }}</a>
                                        </div>
                                    </div>
                                    <div class="nk-wg1-amount">
                                        <div class="amount">@convert($user->withdrawal_acct) <small class="currency currency-btc">{{ $user->currency }}</small></div>
                                    </div>
                                </div><!-- .nk-wg1-item -->
                                <div class="nk-wg1-item ms-lg-auto">
                                    <div class="nk-wg1-title">My Assets</div>
                                    <div class="nk-wg1-group g-2">
                                        <div class="nk-wg1-sub">
                                            <div class="sub-text"><span>Purchased Stocks</span>
                                                <div class="dot" data-bg="#9cabff" style="background: rgb(156, 171, 255);"></div>
                                            </div>
                                            <div style="font-size: 20px" class="lead-text">{{ $stock_count ? : "No Stock" }}</div>
                                        </div>
                                        <div class="nk-wg1-sub">
                                            <div class="sub-text"><span>Purchased Crypto</span>
                                                <div class="dot" data-bg="#baaeff" style="background: rgb(186, 174, 255);"></div>
                                            </div>
                                            <div style="font-size: 20px" class="lead-text">{{ $crypto_count ? : "No Crypto Asset" }}</div>
                                        </div>
                                    </div>
                                </div><!-- .nk-wg1-item -->
                            </div><!-- .nk-wg1-group -->
                        </div><!-- .nk-wg1 -->
                        <div class="nk-ck1"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                            <canvas class="chart-account-balance chartjs-render-monitor" id="mainBalance" style="display: block; height: 120px; width: 988px;" width="1976" height="240"></canvas>
                        </div><!-- .nk-ck1 -->
                    </div><!-- .card-inner -->
                </div><!-- .card -->
                <div class="card card-bordered">
                    <div class="card-inner">
                        <div class="card-head ui-v2">
                            <div class="card-title">
                                <h5 class="title">Balance Summary</h5>
                            </div>

                        </div><!-- .card-head -->
                        <div class="nk-wg4">
                            <div class="row g-2">

                                <div class="col-sm-4">
                                    <div class="card bg-light">
                                        <div class="nk-wgw sm">
                                            <a class="nk-wgw-inner" >
                                                <div class="nk-wgw-name">
                                                    <div class="nk-wgw-icon">
                                                        <em class="icon ni ni-wallet-fill"></em>
                                                    </div>
                                                    <h5 class="nk-wgw-title title">Total Investment</h5>
                                                </div>
                                                <div class="nk-wgw-balance">
                                                    <div class="amount">@convert($stock_count + $crypto_count)<span class="currency currency-eth">{{ $user->currency }}</span></div>
                                                </div>
                                                <div class="nk-wgw-name mt-3">
                                                    <h5 class="nk-wgw-title title">Total Investment + Profit</h5>
                                                </div>
                                                <div class="nk-wgw-balance">
                                                    <div class="amount"> @convert($stock_count + $crypto_count + $user->profit)<span class="currency currency-eth">{{ $user->currency }}</span></div>
                                                </div>

                                            </a>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-sm-4">
                                    <div class="card bg-light">
                                        <div class="nk-wgw sm">
                                            <a class="nk-wgw-inner" >
                                                <div class="nk-wgw-name">
                                                    <div class="nk-wgw-icon">
                                                        <em class="icon ni ni-wallet-fill"></em>
                                                    </div>
                                                    <h5 class="nk-wgw-title title">Profit</h5>
                                                </div>
                                                <div class="nk-wgw-balance">
                                                    <div class="amount">@convert($user->profit)<span class="currency currency-eth">{{ $user->currency }}</span></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-sm-4">
                                    <div class="card bg-light">
                                        <div class="nk-wgw sm">
                                            <a class="nk-wgw-inner" >
                                                <div class="nk-wgw-name">
                                                    <div class="nk-wgw-icon">
                                                        <em class="icon ni ni-wallet-fill"></em>
                                                    </div>
                                                    <h5 class="nk-wgw-title title">Referral Bonus</h5>
                                                </div>
                                                <div class="nk-wgw-balance">
                                                    <div class="amount">@convert($user->ref_bonus)<span class="currency currency-eth">{{ $user->currency }}</span></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-sm-4">
                                    <div class="card bg-light">
                                        <div class="nk-wgw sm">
                                            <a class="nk-wgw-inner" href="html/crypto/wallet-bitcoin.html">
                                                <div class="nk-wgw-name">
                                                    <div class="nk-wgw-icon">
                                                        <em class="icon ni ni-wallet-fill"></em>
                                                    </div>
                                                    <h5 class="nk-wgw-title title">Total Deposits</h5>
                                                </div>
                                                <div class="nk-wgw-balance">
                                                    <div class="amount">@convert($deposit)<span class="currency currency-nio">{{ $user->currency }}</span></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-sm-4">
                                    <div class="card bg-light">
                                        <div class="nk-wgw sm">
                                            <a class="nk-wgw-inner" href="html/crypto/wallet-bitcoin.html">
                                                <div class="nk-wgw-name">
                                                    <div class="nk-wgw-icon">
                                                        <em class="icon ni ni-wallet-fill"></em>
                                                    </div>
                                                    <h5 class="nk-wgw-title title">Total Withdrawn</h5>
                                                </div>
                                                <div class="nk-wgw-balance">
                                                    <div class="amount">@convert($withdrawal)<span class="currency currency-btc">{{ $user->currency }}</span></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- .col -->


                            </div>
                        </div><!-- .nk-wg4 -->

                    </div><!-- .card-inner -->
                </div><!-- .card -->
            </div><!-- .nk-block -->
        </div>
    </div>
</div>

@endsection
