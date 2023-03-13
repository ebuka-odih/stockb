@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Funding History</h1>

                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Full Table -->
            <div class="block block-rounded">

                <div class="block-content">

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 200px;">
                                    <i class="far fa-clock"></i>
                                </th>
                                <th>User/Profit</th>
                                <th >Amount</th>
                                <th >Funding Type</th>
                                <th style="width: 15%;">Access</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($funding as $item)
                                <tr>
                                    <td class="text-center">
                                        {{ date('d M, Y', strtotime($item->created_at)) }}
                                    </td>
                                    <td class="fw-semibold">
                                        <a href="{{ route('admin.viewUser', $item->user->id) }}">{{ $item->user->name }} (@convert($item->user->profit) {{ $item->user->currency }})</a>
                                    </td>
                                    <td>{{ $item->amount }} {{ $item->user->currency }}</td>
                                    <td>{{ $item->fund_type() }} </td>
                                    <td>
                                        {!! $item->status() !!}
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">

                                            <form method="POST" action="{!! route('admin.deleteFunding', $item->id) !!}" accept-charset="UTF-8">
                                                <input name="_method" value="DELETE" type="hidden">
                                                {{ csrf_field() }}

                                                <div class="btn-group btn-group-xs pull-right" role="group">
                                                    <button type="submit" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" onclick="return confirm(&quot;Delete Deposit?&quot;)">
                                                        <i class="fa fa-times"></i>
                                                    </button>

                                                </div>

                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Full Table -->

        </div>
        <!-- END Page Content -->
    </main>

@endsection
