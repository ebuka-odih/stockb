@extends('dashboard.layout.app')
@section('content')

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="nk-block-head">

                    <!-- .nk-block-head-sub -->
                    <div class="buysell-title text-center">
                        <h2 class="title">Crypto Currency</h2>
                    </div><!-- .buysell-title -->
                    <p  class="text-center fs-6">Here are several Crypto-Currency. You can invest daily, weekly or monthly and get higher returns in your investment.</p>
                    <p class="text-center">Choose your favourite cryptocurrency and start earning.</p>

                </div><!-- .nk-block-head -->

                <div class="nk-block nk-block-lg">
                    <div class="nk-block nk-block-lg">

                        <div class="card card-bordered card-preview">
                            <div class="card-inner">
                                <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                                    <div class="datatable-wrap my-3">
                                        <table class="datatable-init nowrap nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                                            <thead>
                                            <tr class="nk-tb-item nk-tb-head">

                                                <th class="nk-tb-col sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="User: activate to sort column ascending">
                                                    <span class="sub-text">Symbol</span>
                                                </th>
                                                <th class="nk-tb-col sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">
                                                    <span class="sub-text">Status</span>
                                                </th>
                                                <th class="nk-tb-col sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Last Login: activate to sort column ascending">
                                                    <span class="sub-text">Action</span>
                                                </th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <!-- .nk-tb-item  -->
                                            @foreach($crypto as $item)

                                                <tr class="nk-tb-item odd">
                                                    <td class="nk-tb-col">
                                                        <div class="user-card">
                                                            <img height="30" width="30" style="border-radius: 50%" src="{{ asset('files/'.$item->logo) }}" alt="">

                                                            <div class="user-info">
                                                              <span class="tb-lead ml-3"> {{ $item->name }}
                                                              </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col">
                                                        <span class="tb-status text-success">Active <span class="dot dot-success d-md-none ms-1"></span></span>
                                                    </td>
                                                    <td class="nk-tb-col ">
                                                        <a  href="{{ route('user.invest_crypto', $item->id) }}"><em class="icon ni ni-arrow-up-right"></em><span>Invest</span></a>

                                                    </td>

                                                </tr>


                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- .card-preview -->
                    </div>


                </div><!-- .nk-block -->
            </div>
        </div>
    </div>

@endsection
