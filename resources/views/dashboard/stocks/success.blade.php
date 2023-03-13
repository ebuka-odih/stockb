@extends('dashboard.layout.app')
@section('content')

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="buysell wide-xs m-auto">


                    <div class="buysell-block">
                        <div class="modal-content">
                            <a href="#" class="close" data-bs-dismiss="modal"></a>
                            <div class="modal-body modal-body-lg text-center">
                                <div class="nk-modal">
                                    <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                                    <h4 class="nk-modal-title">Purchased Successfully!</h4>
                                    <div class="nk-modal-text">
                                        <p class="caption-text">You’ve successfully bought <strong>{{ $stock->amount }} {{ auth()->user()->currency }}</strong> of <strong class="badge bg-danger">{{ $stock->stock->name }}</strong>.</p>
                                    </div>
                                    <div class="nk-modal-action-lg">
                                        <ul class="btn-group gx-4">
                                            <li><a href="{{ route('user.stocks') }}" class="btn btn-lg btn-mw btn-primary">Buy Stock</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .modal-body -->
                            <div class="modal-footer bg-lighter">
                                <div class="text-center w-100">
                                    <p>Earn upto $25 for each friend your refer! <a href="#">Invite friends</a></p>
                                </div>
                            </div>
                        </div><!-- .modal-content -->
                    </div><!-- .buysell-block -->
                </div><!-- .buysell -->
            </div>
        </div>
    </div>

@endsection
