@extends('dashboard.layout.app')
@section('content')

<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head">
                <div class="nk-block-head-sub"><span>Welcome!</span>
                </div>
                <div class="nk-block-between-md g-4">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title fw-normal">{{ $user->name }}</h2>
                        <div class="nk-block-des">
                            <p>At a glance summary of your account. Have fun!</p>
                        </div>
                    </div><!-- .nk-block-head-content -->
                    <div class="nk-block-head-content">
                        <ul class="nk-block-tools gx-3">
                            <li><a href="{{ route('user.deposit') }}" class="btn btn-primary"><span>Deposit</span> <em class="icon ni ni-arrow-long-right"></em></a></li>
                            <li><a href="{{ route('user.stocks') }}" class="btn btn-white btn-light"><span>Buy Stocks</span> <em class="icon ni ni-arrow-long-right d-none d-sm-inline-block"></em></a></li>
                        </ul>
                    </div><!-- .nk-block-head-content -->
                </div><!-- .nk-block-between -->
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="row gy-gs">
                    <div class="col-lg-5 col-xl-4">
                        <div class="nk-block">
                            <div class="nk-block-head-xs">
                                <div class="nk-block-head-content">
                                    <h5 class="nk-block-title title">Overview</h5>
                                </div>
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="card card-bordered text-light is-dark h-100">
                                    <div class="card-inner">
                                        <div class="nk-wg7">
                                            <div class="nk-wg7-stats">
                                                <div class="nk-wg7-title">Available balance in {{ $user->currency }}</div>
                                                <div class="number-lg amount">@convert($user->balance)</div>
                                            </div>
                                            <div class="nk-wg7-stats-group">
                                                <div class="nk-wg7-stats w-50">
                                                    <div class="nk-wg7-title">Wallets</div>
                                                    <div class="number-lg">5</div>
                                                </div>
                                                <div class="nk-wg7-stats w-50">
                                                    <div class="nk-wg7-title">Investment balance</div>
                                                    <div class="number">34,405</div>
                                                </div>
                                            </div>
                                            <div class="nk-wg7-foot">
                                                <span class="nk-wg7-note">Last activity at <span>19 Nov, 2019</span></span>
                                            </div>
                                        </div><!-- .nk-wg7 -->
                                    </div><!-- .card-inner -->
                                </div><!-- .card -->
                            </div><!-- .nk-block -->
                        </div><!-- .nk-block -->
                    </div><!-- .col -->
                    <div class="col-lg-7 col-xl-8">
                        <div class="nk-block">
                            <div class="nk-block-head-xs">
                                <div class="nk-block-between-md g-2">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title title">Recent Purchased Stocks</h5>
                                    </div>
                                    @if($stocks->count() > 3)
                                    <div class="nk-block-head-content">
                                        <a href="html/crypto/wallets.html" class="link link-primary">See All</a>
                                    </div>
                                    @else
                                    @endif
                                </div>
                            </div><!-- .nk-block-head -->
                            <div class="row g-2">
                                @forelse($stocks as $item)
                                <div class="col-sm-4">
                                    <div class="card bg-light">
                                        <div class="nk-wgw sm">
                                            <a class="nk-wgw-inner" href="html/crypto/wallet-bitcoin.html">
                                                <div class="nk-wgw-name">
                                                    <div class="nk-wgw-icon">
                                                        <em class="icon ni ni-sign-btc"></em>
                                                    </div>
                                                    <h5 class="nk-wgw-title title">{{ $item->stock->name }}</h5>
                                                </div>
                                                <div class="nk-wgw-balance">
                                                    <div class="amount">{{ $item->amount }}<span class="currency currency-nio">{{ $item->user->currency }}</span></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                @empty
                                    <div class="text-center">
                                        No Recent Purchased Stocks <br>
                                        <a href="">Buy Your First Stock</a>
                                    </div>
                                @endforelse
                            </div><!-- .row -->
                        </div><!-- .nk-block -->
                        <div class="nk-block nk-block-md">
                            <div class="nk-block-head-xs">
                                <div class="nk-block-between-md g-2">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title title">Latest Purchased Crypto</h5>
                                    </div>
                                    @if($crypto->count() > 3)
                                    <div class="nk-block-head-content">
                                        <a href="html/crypto/wallets.html" class="link link-primary">See All</a>
                                    </div>
                                    @else
                                    @endif
                                </div>
                            </div><!-- .nk-block-head -->
                            <div class="row g-2">
                                @forelse($crypto as $item)
                                <div class="col-sm-4">
                                    <div class="card bg-light">
                                        <div class="nk-wgw sm">
                                            <a class="nk-wgw-inner" href="html/crypto/wallet-bitcoin.html">
                                                <div class="nk-wgw-name">
                                                    <div class="nk-wgw-icon">
                                                        <em class="icon ni ni-sign-btc"></em>
                                                    </div>
                                                    <h5 class="nk-wgw-title title">{{ $item->crypto->name }}</h5>
                                                </div>
                                                <div class="nk-wgw-balance">
                                                    <div class="amount">{{ $item->amount }}<span class="currency currency-nio">{{ $item->user->currency }}</span></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                                @empty
                                    <div class="text-center">
                                        No Recent Purchased Crypto Assets <br>
                                        <a href="">Buy Your First Crypto</a>
                                    </div>
                                @endforelse
                            </div><!-- .row -->
                        </div> <!-- .nk-block -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .nk-block -->
            <hr>
            <div class="nk-block nk-block-lg">
                <div class="row gy-gs">
                    <div class="col-md-12">
                        <h4>Market Summary</h4>
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/" rel="noopener" target="_blank"></a></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                                {
                                    "width": "100%",
                                    "height": "500",
                                    "symbolsGroups": [
                                    {
                                        "name": "Indices",
                                        "originalName": "Indices",
                                        "symbols": [
                                            {
                                                "name": "FOREXCOM:SPXUSD",
                                                "displayName": "S&P 500"
                                            },
                                            {
                                                "name": "FOREXCOM:NSXUSD",
                                                "displayName": "US 100"
                                            },
                                            {
                                                "name": "FOREXCOM:DJI",
                                                "displayName": "Dow 30"
                                            },
                                            {
                                                "name": "INDEX:NKY",
                                                "displayName": "Nikkei 225"
                                            },
                                            {
                                                "name": "INDEX:DEU40",
                                                "displayName": "DAX Index"
                                            },
                                            {
                                                "name": "FOREXCOM:UKXGBP",
                                                "displayName": "UK 100"
                                            }
                                        ]
                                    },
                                    {
                                        "name": "Futures",
                                        "originalName": "Futures",
                                        "symbols": [
                                            {
                                                "name": "CME_MINI:ES1!",
                                                "displayName": "S&P 500"
                                            },
                                            {
                                                "name": "CME:6E1!",
                                                "displayName": "Euro"
                                            },
                                            {
                                                "name": "COMEX:GC1!",
                                                "displayName": "Gold"
                                            },
                                            {
                                                "name": "NYMEX:CL1!",
                                                "displayName": "Crude Oil"
                                            },
                                            {
                                                "name": "NYMEX:NG1!",
                                                "displayName": "Natural Gas"
                                            },
                                            {
                                                "name": "CBOT:ZC1!",
                                                "displayName": "Corn"
                                            }
                                        ]
                                    },
                                    {
                                        "name": "Bonds",
                                        "originalName": "Bonds",
                                        "symbols": [
                                            {
                                                "name": "CME:GE1!",
                                                "displayName": "Eurodollar"
                                            },
                                            {
                                                "name": "CBOT:ZB1!",
                                                "displayName": "T-Bond"
                                            },
                                            {
                                                "name": "CBOT:UB1!",
                                                "displayName": "Ultra T-Bond"
                                            },
                                            {
                                                "name": "EUREX:FGBL1!",
                                                "displayName": "Euro Bund"
                                            },
                                            {
                                                "name": "EUREX:FBTP1!",
                                                "displayName": "Euro BTP"
                                            },
                                            {
                                                "name": "EUREX:FGBM1!",
                                                "displayName": "Euro BOBL"
                                            }
                                        ]
                                    },
                                    {
                                        "name": "Forex",
                                        "originalName": "Forex",
                                        "symbols": [
                                            {
                                                "name": "FX:EURUSD",
                                                "displayName": "EUR/USD"
                                            },
                                            {
                                                "name": "FX:GBPUSD",
                                                "displayName": "GBP/USD"
                                            },
                                            {
                                                "name": "FX:USDJPY",
                                                "displayName": "USD/JPY"
                                            },
                                            {
                                                "name": "FX:USDCHF",
                                                "displayName": "USD/CHF"
                                            },
                                            {
                                                "name": "FX:AUDUSD",
                                                "displayName": "AUD/USD"
                                            },
                                            {
                                                "name": "FX:USDCAD",
                                                "displayName": "USD/CAD"
                                            }
                                        ]
                                    }
                                ],
                                    "showSymbolLogo": true,
                                    "colorTheme": "dark",
                                    "isTransparent": false,
                                    "locale": "en"
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div><!-- .row -->
            </div><!-- .nk-block -->
            <div class="nk-block">
                <div class="card card-bordered">
                    <div class="nk-refwg">
                        <div class="nk-refwg-invite card-inner">
                            <div class="nk-refwg-head g-3">
                                <div class="nk-refwg-title">
                                    <h5 class="title">Refer Us & Earn</h5>
                                    <div class="title-sub">Use the bellow link to invite your friends.</div>
                                </div>
                                <div class="nk-refwg-action">
                                    <a href="#" class="btn btn-primary">Invite</a>
                                </div>
                            </div>
                            <div class="nk-refwg-url">
                                <div class="form-control-wrap">
                                    <div class="form-clip clipboard-init" data-clipboard-target="#refUrl" data-success="Copied" data-text="Copy Link"><em class="clipboard-icon icon ni ni-copy"></em> <span class="clipboard-text">Copy Link</span></div>
                                    <div class="form-icon">
                                        <em class="icon ni ni-link-alt"></em>
                                    </div>
                                    <input type="text" class="form-control copy-text" id="refUrl" value="https://dashlite.net/?ref=4945KD48">
                                </div>
                            </div>
                        </div><!-- .nk-refwg-invite -->
                        <div class="nk-refwg-stats card-inner bg-lighter">
                            <div class="nk-refwg-group g-3">
                                <div class="nk-refwg-name">
                                    <h6 class="title">My Referral <em class="icon ni ni-info" data-bs-toggle="tooltip" data-bs-placement="right" title="Referral Informations"></em></h6>
                                </div>
                                <div class="nk-refwg-info g-3">
                                    <div class="nk-refwg-sub">
                                        <div class="title">394</div>
                                        <div class="sub-text">Total Joined</div>
                                    </div>
                                    <div class="nk-refwg-sub">
                                        <div class="title">548.49</div>
                                        <div class="sub-text">Referral Earn</div>
                                    </div>
                                </div>
                                <div class="nk-refwg-more dropdown mt-n1 me-n1">
                                    <a href="#" class="btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                        <ul class="link-list-plain sm">
                                            <li><a href="#">7 days</a></li>
                                            <li><a href="#">15 Days</a></li>
                                            <li><a href="#">30 Days</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-refwg-ck">
                                <canvas class="chart-refer-stats" id="refBarChart"></canvas>
                            </div>
                        </div><!-- .nk-refwg-stats -->
                    </div><!-- .nk-refwg -->
                </div><!-- .card -->
            </div><!-- .nk-block -->
            <div class="nk-block">
                <div class="card card-bordered">
                    <div class="card-inner card-inner-lg">
                        <div class="align-center flex-wrap flex-md-nowrap g-4">
                            <div class="nk-block-image w-120px flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 118">
                                    <path d="M8.916,94.745C-.318,79.153-2.164,58.569,2.382,40.578,7.155,21.69,19.045,9.451,35.162,4.32,46.609.676,58.716.331,70.456,1.845,84.683,3.68,99.57,8.694,108.892,21.408c10.03,13.679,12.071,34.71,10.747,52.054-1.173,15.359-7.441,27.489-19.231,34.494-10.689,6.351-22.92,8.733-34.715,10.331-16.181,2.192-34.195-.336-47.6-12.281A47.243,47.243,0,0,1,8.916,94.745Z" transform="translate(0 -1)" fill="#f6faff" />
                                    <rect x="18" y="32" width="84" height="50" rx="4" ry="4" fill="#fff" />
                                    <rect x="26" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                    <rect x="50" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                    <rect x="74" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                    <rect x="38" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                    <rect x="62" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                    <path d="M98,32H22a5.006,5.006,0,0,0-5,5V79a5.006,5.006,0,0,0,5,5H52v8H45a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2H73a2,2,0,0,0,2-2V94a2,2,0,0,0-2-2H66V84H98a5.006,5.006,0,0,0,5-5V37A5.006,5.006,0,0,0,98,32ZM73,94v4H45V94Zm-9-2H54V84H64Zm37-13a3,3,0,0,1-3,3H22a3,3,0,0,1-3-3V37a3,3,0,0,1,3-3H98a3,3,0,0,1,3,3Z" transform="translate(0 -1)" fill="#798bff" />
                                    <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="#6576ff" />
                                    <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="none" stroke="#6576ff" stroke-miterlimit="10" stroke-width="2" />
                                    <line x1="40" y1="22" x2="57" y2="22" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    <line x1="40" y1="27" x2="57" y2="27" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    <line x1="40" y1="32" x2="50" y2="32" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    <line x1="30.5" y1="87.5" x2="30.5" y2="91.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                    <line x1="28.5" y1="89.5" x2="32.5" y2="89.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                    <line x1="79.5" y1="22.5" x2="79.5" y2="26.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                    <line x1="77.5" y1="24.5" x2="81.5" y2="24.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                    <circle cx="90.5" cy="97.5" r="3" fill="none" stroke="#9cabff" stroke-miterlimit="10" />
                                    <circle cx="24" cy="23" r="2.5" fill="none" stroke="#9cabff" stroke-miterlimit="10" />
                                </svg>
                            </div>
                            <div class="nk-block-content">
                                <div class="nk-block-content-head px-lg-4">
                                    <h5>We’re here to help you!</h5>
                                    <p class="text-soft">Ask a question or file a support ticket, manage request, report an issues. Our team support team will get back to you by email.</p>
                                </div>
                            </div>
                            <div class="nk-block-content flex-shrink-0">
                                <a href="#" class="btn btn-lg btn-outline-primary">Get Support Now</a>
                            </div>
                        </div>
                    </div><!-- .card-inner -->
                </div><!-- .card -->
            </div><!-- .nk-block -->
        </div>
    </div>
</div>

@endsection
