@extends('pages.layout.app')
@section('content')

<div id="maincontent">

    <link rel="stylesheet" type="text/css" href="https://www.firstrade.com/css/en-us/welcome.css">

    <div class="homepage">
        <div id="page_wrap_home">
            <div id="ajaxloader" style="text-align:center;">
                <div>Loading images...</div>
                <img src="https://www.firstrade.com/images/shared/progress80.gif" alt="Loading spinner"></img>
            </div>
            <div id="carousel" class="carousel slide" data-ride="carousel" style="display:none;">
                <!-- Wrapper for slides -->
                <div class="carousel-inner hero-banner">

                    <!-- <div class="item item-holiday item-cashbonus active">
                        <div class="content">
                            <div class="left d-flex flex-column justify-content-center" style="margin-left:20px;">
                                <span style="color:#508ae1;font-size: 16px;font-family:'futura-bold';">LIMITED-TIME OFFER!</span>
                                <h1 style="font-size: 45px;float: none;font-family: Futura, latowebheavy, 'Helvetica Neue',Helvetica, Arial, sans-serif; font-weight: bold;">Earn up to $4,000</h1>
                                <p style="font-size:18px;margin:4px;max-width:490px;" class="ft-slate">Get up to $4,000 in cash when you open and fund a Firstrade Brokerage account. Enjoy <a href="/content/en-us/pricing">$0 commission trades and $0 options contract fees</a> on our award-winning platform.</p>
                                <div class="">
                                    <a class="open-button holiday-button font-heavy" href="/content/en-us/promos">LEARN MORE</a>
                                </div>
                                <p style="font-size:14px">Promotion period: Jan. 17 - Feb. 1, 2023</p>
                            </div>
                            <div class="right">
                                <img src="/images/shared/home_feat_platform22.png" width="550" alt="Free Stocks">
                            </div>
                        </div>
                    </div> -->

                    <div class="item item-option active">
                        <a href="trading/options.html" class="no-underline">
                            <div class='content'>
                                <div class="container" style="width: 1170px;">
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <img class="banner-img img-responsive" src="https://www.firstrade.com/images/en-us/accol22_hero_option_blue.png" alt="Accolades 2022">
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <h1 style="float:none; font-family: Futura, latowebheavy, 'Helvetica Neue',Helvetica, Arial, sans-serif; font-weight: bold; font-size: 45px; padding-top: 16px;">The Best Deal for <br> Options Traders</h1>
                                            <div style="color:#4d6582; font-size:20px; margin: 10px 0 20px; font-family: latowebregular, 'Helvetica Neue',Helvetica, Arial, sans-serif;">$0 Commission & $0 Contract Fees</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="item item-rolloptions">
                        <div class="content">
                            <div class="d-flex align-items-center justify-content-around">
                                <div>
                                    <h1 class="" style="font-size:45px;font-family:Futura,latowebheavy,'Helvetica Neue',Helvetica,Arial,sans-serif;padding-top:32px;margin-bottom:10px;">Roll with the Markets</h1>
                                    <div class="ft-blue" style="font-size:24px;font-family:latowebregular,'Helvetica Neue',Helvetica,Arial,sans-serif;">Manage your covered calls with ease with <i>Rolling Options</i>,<br>now on the Firstrade app.</div>
                                    <div class="">
                                        <a class="open-button holiday-button font-heavy" href="trading/options.html#options">LEARN MORE</a>
                                    </div>
                                </div>
                                <div class="img-container">
                                    <img class="w-100" src="https://www.firstrade.com/images/en-us/home_ban_rolloptionb.png" alt="Rolling Options">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item item-mobile">
                        <div class="content">
                            <div class="banner-text" style="padding-top: 70px;">
                                <a href="trading/mobile.html" class="no-underline">
                                    <h1 style="float:none; font-family: futura, latowebheavy, 'Helvetica Neue',Helvetica, Arial, sans-serif; font-weight: bold; color: #fff; font-size: 45px;">
                                        One Platform, <br><span class="ft-orange">Unlimited Opportunities</span>
                                    </h1>
                                    <div style="color: #fff; font-size:24px; margin: 10px 0 20px;">
                                        Invest in Stocks, Options, Mutual Funds, Fixed Income<br>and Crypto, all in one place.
                                    </div>
                                </a>
                                <div>
                                    <a href="http://itunes.apple.com/app/firstrade/id405325225?mt=8" target="_blank" rel="noopener" rel="noopener">
                                        <img src="https://www.firstrade.com/images/shared/but_appstore_ios_snow2.png" width="180" alt="iOS app store button">
                                    </a>
                                    <a href="https://play.google.com/store/apps/details?id=com.firstrade.android" target="_blank" rel="noopener" rel="noopener">
                                        <img src="https://www.firstrade.com/images/shared/but_appstore_goog_snow.png" width="180" alt="Google play store button">
                                    </a>
                                </div>
                            </div>
                            <div class="banner-img">
                                <a href="trading/mobile.html">
                                    <img src="https://www.firstrade.com/images/en-us/hero_mob_ios20.png" alt="Mobile trading" width="470">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class='item item-ira'>
                        <div class='content'>
                            <h1 style="float:none; font-family: Futura, latowebheavy, 'Helvetica Neue',Helvetica, Arial, sans-serif; font-weight: bold; font-size: 40px; padding-top: 16px; color:#fff;">Secure your Retirement <br> with an Absolutely No-Fee IRA</h1>
                            <div style="color:#fff; font-size:20px; margin: 10px 0 20px; font-family: latowebregular, 'Helvetica Neue',Helvetica, Arial, sans-serif;">No annual fee, account set-up fee, or maintenance fee <br><a style="color:white;text-decoration: underline;" href="pricing.html">Trade commission-free on stocks, options and mutual funds in your IRA</a></div>
                            <div>
                                <a class='open-button ira-button font-heavy'  href='https://offer.firstrade.us/ira2020'>LEARN MORE</a>
                            </div>
                        </div>
                    </div>

                    <div class="item item-pricealert">
                        <div class="content">
                            <div class="d-flex align-items-center justify-content-around">
                                <div>
                                    <h1 class="" style="font-size:45px;font-family:Futura,latowebheavy,'Helvetica Neue',Helvetica,Arial,sans-serif;padding-top:32px;margin-bottom:10px;">Track Price Movements<br/>with Custom Price Alerts</h1>
                                    <div class="ft-blue" style="font-size:24px;font-family:latowebregular,'Helvetica Neue',Helvetica,Arial,sans-serif;">Set price alerts for stocks, options and crypto based<br/>on your specific investment strategy.</div>
                                </div>
                                <div class="img-container">
                                    <img class="w-100" src="https://www.firstrade.com/images/en-us/icon_med_custAlerts.png" alt="Custom Alerts">
                                </div>
                            </div>
                        </div>
                    </div>


                </div> <!-- end carousel-inner -->

                <div class="nav-control-container">
                    <!-- Controls -->
                    <div class="nav-control" style="display:none;">
                        <a class="left carousel-control" href="#carousel" data-slide="prev" aria-label="Go to previous slide">
                            <span class="icon-left"><span style="display:none">Prev</span></span>
                        </a>
                        <a class="right carousel-control" href="#carousel" data-slide="next" aria-label="Go to next slide">
                            <span class="icon-right"><span style="display:none">Next</span></span>
                        </a>
                    </div>
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                        <li data-target="#carousel" data-slide-to="3"></li>
                        <li data-target="#carousel" data-slide-to="4"></li>
                        <!--  -->
                    </ol>
                </div>

            </div>
        </div>

        <section class="advantage">
            <div class="row content-wide">
                <h1 class="text-center">All the Investment Products You Need</h1>
                <h3 class="text-center">Diversify your portfolio with a wide selection of investment products, all commission-free</h3>
                <div class="d-flex">
                    <div class="flex-fill">
                        <a href="trading/stocks.html">
                            <img class="center-block" src="https://www.firstrade.com/images/en-us/stocks.svg" style="padding-left:38px;" alt="stocks">
                            <h2 class="text-center" style="font-family:latowebbold">Stocks/ETFs</h2>
                            <p class="text-center">Trade stocks listed on the NYSE, AMEX, Nasdaq or the Over-the-Counter (OTC) markets.</p>
                        </a>
                    </div>
                    <div class="flex-fill">
                        <a href="trading/options.html">
                            <img class="center-block"  src="https://www.firstrade.com/images/en-us/options.svg" alt="options">
                            <h2 class="text-center" style="font-family:latowebbold">Options</h2>
                            <p class="text-center">Hedge your portfolio with options at $0 commission and $0 contract fees.</p>
                        </a>
                    </div>
                    <div class="flex-fill">
                        <a href="trading/crypto.html">
                            <img class="center-block"  src="https://www.firstrade.com/images/en-us/crypto.svg" alt="crytpo">
                            <h2 class="text-center" style="font-family:latowebbold">Crypto</h2>
                            <p class="text-center">Buy and sell over 30 coins including Bitcoin and Shiba with no fees.</p>
                        </a>
                    </div>
                    <div class="flex-fill">
                        <a href="trading/mutualfund.html">
                            <img class="center-block"  src="https://www.firstrade.com/images/en-us/mutualfunds.svg" alt="mutual funds">
                            <h2 class="text-center" style="font-family:latowebbold">Mutual Funds</h2>
                            <p class="text-center">Choose from over 11,000 Mutual Funds and create a professionally managed portfolio.</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="accounts" style="background-color:#d6e9ff">
            <div class="row content-wide">
                <h1 class="text-center">Choose an account type that's right for you</h1>
                <div class="d-flex justify-content-between">
                    <div class="col-xs-5">
                        <h2 style="font-family: latowebbold;">Brokerage Account</h2>
                        <p>Build your family's wealth with an Individual or Joint brokerage account. This type of account gives you access to a wide selection of asset types.</p>
                        <div>
                            <a class="open-button" href="https://signup.firstrade.com/apply/en-us/" style="padding: 8px 13px;">OPEN AN ACCOUNT</a>
                        </div>
                    </div>
                    <div class="col-xs-5">
                        <h2 style="font-family: latowebbold;">Retirement (IRA)</h2>
                        <p>Save taxes now or later and accumulate retirement savings with a Traditional, Roth or Rollover IRA.</p>
                        <div>
                            <a class="open-button" href="https://www.firstrade.com/landing/ira/en-us/" style="padding: 8px 13px; bottom:0px; position:absolute;">OPEN A NO-FEE IRA</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="platforms">
            <div class="row content-wide">
                <div class="text-center">
                    <h1>Why Choose Firstrade?</h1>
                    <h3>Always first with innovative trading technology, analytics, education and customer service since 1985.</h3>
                </div>
                <div class="item d-flex align-items-center my-3">
                    <div class="flex-fill">
                        <img class="center-block" src="https://www.firstrade.com/images/en-us/pricing.svg" alt="$0 commission trades and options fees">
                    </div>
                    <div class="flex-fill">
                        <h1>Straightforward Pricing</h1>
                        <br>
                        <p>Put your money into your investment, not fees.</p>
                        <p>$0 Commission Trades</p>
                        <p>$0 Options contract fees</p>
                        <p>No minimums, No inactivity fees</p>
                        <a href="pricing.html">LEARN MORE ></a>
                        <p style="font-size: 11px;">
                            Other fees may apply. See our <a href="pricing.html#details">pricing page</a> for more details.
                        </p>
                    </div>
                </div>
                <div class="item d-flex align-items-center my-3">
                    <div class="flex-fill">
                        <img class="center-block" src="https://www.firstrade.com/images/en-us/home_platform.png" alt="Powerful Trading Platforms">
                    </div>
                    <div class="flex-fill">
                        <h1>Powerful Trading Platforms</h1>
                        <br>
                        <div>
                            <p>Our customizable trading platforms let you manage your account and trade from your <a href="trading/overview/tools.html">desktop</a>, <a href="researchtools/navigator.html">iPad</a> or <a href="trading/mobile.html">mobile phone</a>.</p>
                            <p>Serious investors can unlock investing opportunities with <a href="researchtools/optionswizard.html">OptionsWizard</a>, our professional-grade options analytics tool.</p>
                        </div>
                    </div>
                </div>
                <div class="item d-flex align-items-center my-3">
                    <div class="flex-fill">
                        <img class="center-block" src="https://www.firstrade.com/images/shared/home_tradeideas.png" alt="Explore Trade Ideas">
                    </div>
                    <div class="flex-fill">
                        <h1>Explore Trade Ideas</h1>
                        <br>
                        <p>Discover investing opportunities with real-time news and premium research provided by Morningstar, OptionsPlay, Briefing.com, Zacks & more.</p>
                        <ul>
                            <li><p>Read analyst reports & see when companies report earnings.</p></li>
                            <li><p>Browse upcoming IPOs</p></li>
                            <li><p>Get daily bullish and bearish trading ideas and weekly income reports</p></li>
                            <li><p>Instant options strategies based on various market outlooks</p></li>
                        </ul>
                        <a href="researchtools/overview.html">LEARN MORE ></a>
                    </div>
                </div>
                <div class="item d-flex align-items-center my-3">
                    <div class="flex-fill">
                        <img class="center-block" style="height:400px" src="https://www.firstrade.com/images/en-us/icon_med_2fa.png" alt="Account Protection">
                    </div>
                    <div class="flex-fill">
                        <h1>Safe and Secure</h1>
                        <br>
                        <p>Two factor authentication offers an extra layer of security<br>for your Firstrade account.</p>
                    </div>
                </div>
                <div class="item d-flex align-items-center my-3">
                    <div class="flex-fill">
                        <img class="center-block" src="https://www.firstrade.com/images/en-us/protection.svg" alt="Account Protection">
                    </div>
                    <div class="flex-fill">
                        <h1>Account Protection</h1>
                        <br>
                        <p>Your account is insured by SIPC for up to $500,000. Firstrade has been serving investor for more than 37 years and is a member of FINRA and SIPC.</p>
                    </div>
                </div>
                <div class="item d-flex align-items-center my-3">
                    <div class="flex-fill">
                        <img class="center-block" src="https://www.firstrade.com/images/en-us/extendedhours.svg" alt="Extended-Hours Trading">
                    </div>
                    <div class="flex-fill">
                        <h1>Extended-Hours Trading</h1>
                        <br>
                        <p>React to market news during pre-market and after-market hours sessions with extended hours trading from 8am – 8pm ET.</p>
                    </div>
                </div>
                <div class="item d-flex align-items-center my-3">
                    <div class="flex-fill">
                        <img class="center-block" src="https://www.firstrade.com/images/en-us/learn_en.png" alt="Options Eduction Videos">
                    </div>
                    <div class="flex-fill">
                        <h1>Learn to Invest Smarter</h1>
                        <br>
                        <p>Whether you’re a new or seasoned trader, Firstrade provides you with resources to improve your investing knowledge.</p>
                        <ul>
                            <li><p>Free options trading courses for beginner & experienced traders</p></li>
                            <li><p>Full options trading video library to jump start your education</p></li>
                            <li><p>Live trading events with professional investment strategists</p></li>
                        </ul>
                        <a href="events.html">LEARN MORE ></a>
                    </div>
                </div>
                <div class="item d-flex align-items-center my-3">
                    <div class="flex-fill">
                        <img class="center-block" src="https://www.firstrade.com/images/shared/icon_support.png" alt="Customer Support">
                    </div>
                    <div class="flex-fill">
                        <h1>Customer Support</h1>
                        <br>
                        <p>Our customer support representatives are ready to assist you via phone and email.</p>
                        <p>Need more information?</p>
                        <a href="https://help.firstrade.com/">Visit our FAQs</a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="row content-wide">
                <div>
                    <img class="center-block"  src="https://www.firstrade.com/images/en-us/accolade22_web_stockbroker.png" alt="Stockbroker accolades 2022">
                </div>
            </div>
        </section>
    </div>

    <script type="text/javascript" language="javascript" src="https://www.firstrade.com/js/homepage.js?v=20220509"></script>
    <script>
        window.onload = function() {
            if (typeof($.smartbanner)!="undefined") {
                $.smartbanner({
                    title: 'Firstrade',
                    appStoreLanguage: 'us',
                    inAppStore: 'On the App Store',
                    inGooglePlay: 'In Google Play',
                    scale: 'auto',
                    daysHidden: 30,
                    daysReminder: 30,
                    icon: '/icon_android.png'
                });
            }

        }
    </script>
</div>

@endsection
