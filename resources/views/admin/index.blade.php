@extends('admin.layout.app')
@section('content')

<main id="main-container">

    <!-- Hero -->
    <div class="content">
        <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
            <div>
                <h1 class="h3 mb-1">
                    Dashboard
                </h1>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Overview -->
        <div class="row items-push">
            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1">
                        <div class="item rounded-3 bg-body mx-auto my-3">
                            <i class="fa fa-users fa-lg text-primary"></i>
                        </div>
                        <div class="fs-1 fw-bold">{{ $users }}</div>
                        <div class="text-muted mb-3">Registered Users</div>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                        <a class="fw-medium" href="{{ route('admin.users') }}">
                            View all users
                            <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1">
                        <div class="item rounded-3 bg-body mx-auto my-3">
                            <i class="fa fa-level-down-alt fa-lg text-primary"></i>
                        </div>
                        <div class="fs-1 fw-bold">$@convert($deposits)</div>
                        <div class="text-muted mb-3">Total Deposits</div>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                        <a class="fw-medium" href="{{ route('admin.deposits') }}">
                            View all deposits
                            <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1">
                        <div class="item rounded-3 bg-body mx-auto my-3">
                            <i class="fa fa-level-up-alt fa-lg text-primary"></i>
                        </div>
                        <div class="fs-1 fw-bold">$@convert($with)</div>
                        <div class="text-muted mb-3">Total Withdrawals</div>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                        <a class="fw-medium" href="{{ route('admin.withdrawals') }}">
                            View all Withdrawal
                            <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full">
                        <div class="item rounded-3 bg-body mx-auto my-3">
                            <i class="fa fa-chart-area fa-lg text-primary"></i>
                        </div>
                        <div class="fs-1 fw-bold">{{ $stocks }}</div>
                        <div class="text-muted mb-3">Total Stocks</div>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                        <a class="fw-medium" href="{{ route('admin.stocks.index') }}">
                            All Stocks
                            <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Overview -->

        <!-- Latest Orders + Stats -->
        <div class="row">
            <div class="col-md-8">
                <!--  Latest Orders -->
                <div class="block block-rounded block-mode-loading-refresh">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            Latest Orders
                        </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <div class="dropdown">
                                <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="si si-chemistry"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="far fa-fw fa-dot-circle opacity-50 me-1"></i> Pending
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="far fa-fw fa-times-circle opacity-50 me-1"></i> Canceled
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="far fa-fw fa-check-circle opacity-50 me-1"></i> Completed
                                    </a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-eye opacity-50 me-1"></i> View All
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <table class="table table-striped table-hover table-borderless table-vcenter fs-sm">
                            <thead>
                            <tr class="text-uppercase">
                                <th>Product</th>
                                <th class="d-none d-xl-table-cell">Date</th>
                                <th>Status</th>
                                <th class="d-none d-sm-table-cell text-end" style="width: 120px;">Price</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <span class="fw-semibold">iPhone 11 Pro</span>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <span class="fs-sm text-muted">today</span>
                                </td>
                                <td>
                                    <span class="fw-semibold text-warning">Pending..</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-end fw-medium">
                                    $1199,99
                                </td>
                                <td class="text-center text-nowrap fw-medium">
                                    <a href="javascript:void(0)">
                                        View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-semibold">MacBook Pro 15"</span>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <span class="fs-sm text-muted">today</span>
                                </td>
                                <td>
                                    <span class="fw-semibold text-warning">Pending..</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-end fw-medium">
                                    $2.299,00
                                </td>
                                <td class="text-center text-nowrap fw-medium">
                                    <a href="javascript:void(0)">
                                        View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-semibold">Nvidia GTX 2080 Ti</span>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <span class="fs-sm text-muted">today</span>
                                </td>
                                <td>
                                    <span class="fw-semibold text-warning">Pending..</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-end fw-medium">
                                    $1200,00
                                </td>
                                <td class="text-center text-nowrap fw-medium">
                                    <a href="javascript:void(0)">
                                        View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-semibold">Playstation 4 Pro</span>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <span class="fs-sm text-muted">today</span>
                                </td>
                                <td>
                                    <span class="fw-semibold text-danger">Canceled</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-end fw-medium">
                                    $399,00
                                </td>
                                <td class="text-center text-nowrap fw-medium">
                                    <a href="javascript:void(0)">
                                        View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-semibold">Nintendo Switch</span>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <span class="fs-sm text-muted">yesterday</span>
                                </td>
                                <td>
                                    <span class="fw-semibold text-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-end fw-medium">
                                    $349,00
                                </td>
                                <td class="text-center text-nowrap fw-medium">
                                    <a href="javascript:void(0)">
                                        View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-semibold">iPhone 11</span>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <span class="fs-sm text-muted">yesterday</span>
                                </td>
                                <td>
                                    <span class="fw-semibold text-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-end fw-medium">
                                    $999,00
                                </td>
                                <td class="text-center text-nowrap fw-medium">
                                    <a href="javascript:void(0)">
                                        View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-semibold">Airpods Pro</span>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <span class="fs-sm text-muted">yesterday</span>
                                </td>
                                <td>
                                    <span class="fw-semibold text-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-end fw-medium">
                                    $39,99
                                </td>
                                <td class="text-center text-nowrap fw-medium">
                                    <a href="javascript:void(0)">
                                        View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-semibold">Xbox One X</span>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <span class="fs-sm text-muted">yesterday</span>
                                </td>
                                <td>
                                    <span class="fw-semibold text-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-end fw-medium">
                                    $499,00
                                </td>
                                <td class="text-center text-nowrap fw-medium">
                                    <a href="javascript:void(0)">
                                        View
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light fs-sm text-center">
                        <a class="fw-medium" href="javascript:void(0)">
                            View all orders
                            <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                        </a>
                    </div>
                </div>
                <!-- END Latest Orders -->
            </div>
            <div class="col-md-4 d-flex flex-column">
                <!-- Stats -->
                <div class="block block-rounded">
                    <div class="block-content block-content-full d-flex justify-content-between align-items-center flex-grow-1">
                        <div class="me-3">
                            <p class="fs-3 fw-bold mb-0">
                                35,698
                            </p>
                            <p class="text-muted mb-0">
                                Completed orders
                            </p>
                        </div>
                        <div class="item rounded-circle bg-body">
                            <i class="fa fa-check fa-lg text-primary"></i>
                        </div>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light fs-sm text-center">
                        <a class="fw-medium" href="javascript:void(0)">
                            View Archive
                            <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                        </a>
                    </div>
                </div>
                <div class="block block-rounded text-center d-flex flex-column flex-grow-1">
                    <div class="block-content block-content-full d-flex align-items-center flex-grow-1">
                        <div class="w-100">
                            <div class="item rounded-3 bg-body mx-auto my-3">
                                <i class="fa fa-archive fa-lg text-primary"></i>
                            </div>
                            <div class="fs-1 fw-bold">75</div>
                            <div class="text-muted mb-3">Products out of stock</div>
                            <div class="d-inline-block px-3 py-1 rounded-pill fs-sm fw-semibold text-warning bg-warning-light">
                                5% of portfolio
                            </div>
                        </div>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                        <a class="fw-medium" href="javascript:void(0)">
                            Order supplies
                            <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                        </a>
                    </div>
                </div>
                <!-- END Stats -->
            </div>
        </div>
        <!-- END Latest Orders + Stats -->
    </div>
    <!-- END Page Content -->

</main>

@endsection
