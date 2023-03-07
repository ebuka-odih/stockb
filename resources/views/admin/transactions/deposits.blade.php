@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Responsive Tables</h1>
                    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Tables</li>
                            <li class="breadcrumb-item active" aria-current="page">Responsive</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Full Table -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Full Table</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option">
                            <i class="si si-settings"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 200px;">
                                    <i class="far fa-clock"></i>
                                </th>
                                <th>User/Bal</th>
                                <th style="width: 30%;">Amount</th>
                                <th style="width: 15%;">Access</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($deposits as $item)
                            <tr>
                                <td class="text-center">
                                    {{ date('d m, Y', strtotime($item->created_at)) }}
                                </td>
                                <td class="fw-semibold">
                                    <a href="{{ route('admin.viewUser', $item->user->id) }}">{{ $item->user->name }} (@convert($item->user->balance) {{ $item->user->currency }})</a>
                                </td>
                                <td>{{ $item->amount }} {{ $item->user->currency }}</td>
                                <td>
                                    {!! $item->status() !!}
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{ route('admin.approveDeposit', $item->id) }}" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
                                            <i class="fa fa-check"></i>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete">
                                            <i class="fa fa-times"></i>
                                        </button>
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
