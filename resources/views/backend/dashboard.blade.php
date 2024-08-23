@extends('layouts.backend')

@push('title')
    <title>Naseed App</title>
@endpush

@section('content')
    <div class="content">
        <div
            class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center py-2 text-center text-md-start">
            <div class="flex-grow-1 mb-1 mb-md-0">
                <h1 class="h3 fw-bold mb-2">
                    Dashboard
                </h1>
                <h2 class="h6 fw-medium fw-medium text-muted mb-0">
                    Welcome <a class="fw-semibold" href="be_pages_generic_profile.html">John</a>, everything looks great.
                </h2>
            </div>
            <div class="mt-3 mt-md-0 ms-md-3 space-x-1">
                <a class="btn btn-sm btn-alt-secondary space-x-1" href="be_pages_generic_profile_edit.html">
                    <i class="fa fa-cogs opacity-50"></i>
                    <span>Settings</span>
                </a>
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-sm btn-alt-secondary space-x-1" id="dropdown-analytics-overview"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-calendar-alt opacity-50"></i>
                        <span>All time</span>
                        <i class="fa fa-fw fa-angle-down"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end fs-sm" aria-labelledby="dropdown-analytics-overview">
                        <a class="dropdown-item fw-medium" href="javascript:void(0)">Last 30 days</a>
                        <a class="dropdown-item fw-medium" href="javascript:void(0)">Last month</a>
                        <a class="dropdown-item fw-medium" href="javascript:void(0)">Last 3 months</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item fw-medium" href="javascript:void(0)">This year</a>
                        <a class="dropdown-item fw-medium" href="javascript:void(0)">Last Year</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between"
                            href="javascript:void(0)">
                            <span>All time</span>
                            <i class="fa fa-check"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row items-push">
            <div class="col-sm-6 col-xxl-3">
                <div class="block block-rounded d-flex flex-column h-100 mb-0">
                    <div
                        class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                        <dl class="mb-0">
                            <dt class="fs-3 fw-bold">32</dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Pending Orders</dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="far fa-gem fs-3 text-primary"></i>
                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">
                        <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                            href="javascript:void(0)">
                            <span>View all orders</span>
                            <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
                <div class="block block-rounded d-flex flex-column h-100 mb-0">
                    <div
                        class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                        <dl class="mb-0">
                            <dt class="fs-3 fw-bold">124</dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">New Customers</dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="far fa-user-circle fs-3 text-primary"></i>
                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">
                        <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                            href="javascript:void(0)">
                            <span>View all customers</span>
                            <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
                <div class="block block-rounded d-flex flex-column h-100 mb-0">
                    <div
                        class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                        <dl class="mb-0">
                            <dt class="fs-3 fw-bold">45</dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Messages</dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="far fa-paper-plane fs-3 text-primary"></i>
                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">
                        <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                            href="javascript:void(0)">
                            <span>View all messages</span>
                            <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
                <div class="block block-rounded d-flex flex-column h-100 mb-0">
                    <div
                        class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                        <dl class="mb-0">
                            <dt class="fs-3 fw-bold">4.5%</dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Conversion Rate</dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="fa fa-chart-bar fs-3 text-primary"></i>
                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">
                        <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                            href="javascript:void(0)">
                            <span>View statistics</span>
                            <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 col-xxl-9 d-flex flex-column">
                <div class="block block-rounded flex-grow-1 d-flex flex-column">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Earnings Summary</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option">
                                <i class="si si-settings"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full flex-grow-1 d-flex align-items-center">
                        <canvas id="js-chartjs-earnings"></canvas>
                    </div>
                    <div class="block-content bg-body-light">
                        <div class="row items-push text-center w-100">
                            <div class="col-sm-4">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                                        <i class="fa fa-caret-up fs-base text-success"></i>
                                        <span>2.5%</span>
                                    </dt>
                                    <dd class="fs-sm fw-medium text-muted mb-0">Customer Growth</dd>
                                </dl>
                            </div>
                            <div class="col-sm-4">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                                        <i class="fa fa-caret-up fs-base text-success"></i>
                                        <span>3.8%</span>
                                    </dt>
                                    <dd class="fs-sm fw-medium text-muted mb-0">Page Views</dd>
                                </dl>
                            </div>
                            <div class="col-sm-4">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold d-inline-flex align-items-center space-x-2">
                                        <i class="fa fa-caret-down fs-base text-danger"></i>
                                        <span>1.7%</span>
                                    </dt>
                                    <dd class="fs-sm fw-medium text-muted mb-0">New Products</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-xxl-3 d-flex flex-column">
                <div class="row items-push flex-grow-1">
                    <div class="col-md-6 col-xl-12">
                        <div class="block block-rounded d-flex flex-column h-100 mb-0">
                            <div class="block-content flex-grow-1 d-flex justify-content-between">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold">570</dt>
                                    <dd class="fs-sm fw-medium text-muted mb-0">Total Orders</dd>
                                </dl>
                                <div>
                                    <div
                                        class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-danger bg-danger-light">
                                        <i class="fa fa-caret-down me-1"></i>
                                        2.2%
                                    </div>
                                </div>
                            </div>
                            <div class="block-content p-1 text-center overflow-hidden">
                                <canvas id="js-chartjs-total-orders" style="height: 90px;"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-12">
                        <div class="block block-rounded d-flex flex-column h-100 mb-0">
                            <div class="block-content flex-grow-1 d-flex justify-content-between">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold">$5,234.21</dt>
                                    <dd class="fs-sm fw-medium text-muted mb-0">Total Earnings</dd>
                                </dl>
                                <div>
                                    <div
                                        class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-success bg-success-light">
                                        <i class="fa fa-caret-up me-1"></i>
                                        4.2%
                                    </div>
                                </div>
                            </div>
                            <div class="block-content p-1 text-center overflow-hidden">
                                <canvas id="js-chartjs-total-earnings" style="height: 90px;"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="block block-rounded d-flex flex-column h-100 mb-0">
                            <div class="block-content flex-grow-1 d-flex justify-content-between">
                                <dl class="mb-0">
                                    <dt class="fs-3 fw-bold">264</dt>
                                    <dd class="fs-sm fw-medium text-muted mb-0">New Customers</dd>
                                </dl>
                                <div>
                                    <div
                                        class="d-inline-block px-2 py-1 rounded-3 fs-xs fw-semibold text-success bg-success-light">
                                        <i class="fa fa-caret-up me-1"></i>
                                        9.3%
                                    </div>
                                </div>
                            </div>
                            <div class="block-content p-1 text-center overflow-hidden">
                                <canvas id="js-chartjs-new-customers" style="height: 90px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Recent Orders</h3>
                <div class="block-options space-x-1">
                    <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"
                        data-target="#one-dashboard-search-orders" data-class="d-none">
                        <i class="fa fa-search"></i>
                    </button>
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-sm btn-alt-secondary" id="dropdown-recent-orders-filters"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-flask"></i>
                            Filters
                            <i class="fa fa-angle-down ms-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end fs-sm"
                            aria-labelledby="dropdown-recent-orders-filters">
                            <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                Pending
                                <span class="badge bg-primary rounded-pill">20</span>
                            </a>
                            <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                Active
                                <span class="badge bg-primary rounded-pill">72</span>
                            </a>
                            <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                Completed
                                <span class="badge bg-primary rounded-pill">890</span>
                            </a>
                            <a class="dropdown-item fw-medium d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                All
                                <span class="badge bg-primary rounded-pill">997</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="one-dashboard-search-orders" class="block-content border-bottom d-none">
                <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                    <div class="push">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-alt" id="one-ecom-orders-search"
                                name="one-ecom-orders-search" placeholder="Search all orders..">
                            <span class="input-group-text bg-body border-0">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="block-content block-content-full">
                <div class="table-responsive">
                    <table class="table table-hover table-vcenter">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th class="d-none d-xl-table-cell">Customer</th>
                                <th>Status</th>
                                <th class="d-none d-sm-table-cell text-center">Profit</th>
                                <th class="d-none d-sm-table-cell text-end">Created</th>
                                <th class="d-none d-sm-table-cell text-end">Value</th>
                            </tr>
                        </thead>
                        <tbody class="fs-sm">
                            <tr>
                                <td>
                                    <a class="fw-semibold" href="javascript:void(0)">
                                        ORD.00925 </a>
                                    <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <a class="fw-semibold" href="javascript:void(0)">Adam McCoy</a>
                                    <p class="fs-sm fw-medium text-muted mb-0">Digital Nomad</p>
                                </td>
                                <td>
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-1" style="height: 5px;" role="progressbar" aria-valuenow="4"
                                        aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success" style="width: 4%;"></div>
                                    </div>
                                    <p class="fs-xs fw-semibold mb-0">4%</p>
                                </td>
                                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">17 min ago</td>
                                <td class="d-none d-sm-table-cell text-end">
                                    <strong>$1884,86</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="fw-semibold" href="javascript:void(0)">
                                        ORD.00924 </a>
                                    <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <a class="fw-semibold" href="javascript:void(0)">Carol Ray</a>
                                    <p class="fs-sm fw-medium text-muted mb-0">Digital Nomad</p>
                                </td>
                                <td>
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Pending</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-1" style="height: 5px;" role="progressbar"
                                        aria-valuenow="22" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success" style="width: 22%;"></div>
                                    </div>
                                    <p class="fs-xs fw-semibold mb-0">22%</p>
                                </td>
                                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">24 min ago</td>
                                <td class="d-none d-sm-table-cell text-end">
                                    <strong>$1184,65</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="fw-semibold" href="javascript:void(0)">
                                        ORD.00923 </a>
                                    <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <a class="fw-semibold" href="javascript:void(0)">Lori Moore</a>
                                    <p class="fs-sm fw-medium text-muted mb-0">Photographer</p>
                                </td>
                                <td>
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-1" style="height: 5px;" role="progressbar"
                                        aria-valuenow="16" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success" style="width: 16%;"></div>
                                    </div>
                                    <p class="fs-xs fw-semibold mb-0">16%</p>
                                </td>
                                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">16 min ago</td>
                                <td class="d-none d-sm-table-cell text-end">
                                    <strong>$769,49</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="fw-semibold" href="javascript:void(0)">
                                        ORD.00922 </a>
                                    <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <a class="fw-semibold" href="javascript:void(0)">Judy Ford</a>
                                    <p class="fs-sm fw-medium text-muted mb-0">Photographer</p>
                                </td>
                                <td>
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Active</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-1" style="height: 5px;" role="progressbar" aria-valuenow="3"
                                        aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success" style="width: 3%;"></div>
                                    </div>
                                    <p class="fs-xs fw-semibold mb-0">3%</p>
                                </td>
                                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">23 min ago</td>
                                <td class="d-none d-sm-table-cell text-end">
                                    <strong>$73,68</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="fw-semibold" href="javascript:void(0)">
                                        ORD.00921 </a>
                                    <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <a class="fw-semibold" href="javascript:void(0)">Brian Stevens</a>
                                    <p class="fs-sm fw-medium text-muted mb-0">Digital Nomad</p>
                                </td>
                                <td>
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Active</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-1" style="height: 5px;" role="progressbar" aria-valuenow="8"
                                        aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success" style="width: 8%;"></div>
                                    </div>
                                    <p class="fs-xs fw-semibold mb-0">8%</p>
                                </td>
                                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">16 min ago</td>
                                <td class="d-none d-sm-table-cell text-end">
                                    <strong>$1485,87</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="fw-semibold" href="javascript:void(0)">
                                        ORD.00920 </a>
                                    <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <a class="fw-semibold" href="javascript:void(0)">Jeffrey Shaw</a>
                                    <p class="fs-sm fw-medium text-muted mb-0">Photographer</p>
                                </td>
                                <td>
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Pending</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-1" style="height: 5px;" role="progressbar" aria-valuenow="4"
                                        aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success" style="width: 4%;"></div>
                                    </div>
                                    <p class="fs-xs fw-semibold mb-0">4%</p>
                                </td>
                                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">9 min ago</td>
                                <td class="d-none d-sm-table-cell text-end">
                                    <strong>$1470,30</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="fw-semibold" href="javascript:void(0)">
                                        ORD.00919 </a>
                                    <p class="fs-sm fw-medium text-muted mb-0">Premium</p>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                    <a class="fw-semibold" href="javascript:void(0)">Andrea Gardner</a>
                                    <p class="fs-sm fw-medium text-muted mb-0">Application Manager</p>
                                </td>
                                <td>
                                    <span
                                        class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <div class="progress mb-1" style="height: 5px;" role="progressbar"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-success" style="width: 20%;"></div>
                                    </div>
                                    <p class="fs-xs fw-semibold mb-0">20%</p>
                                </td>
                                <td class="d-none d-sm-table-cell fw-semibold text-muted text-end">28 min ago</td>
                                <td class="d-none d-sm-table-cell text-end">
                                    <strong>$275,91</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="block-content block-content-full bg-body-light">
                <nav aria-label="Photos Search Navigation">
                    <ul class="pagination pagination-sm justify-content-end mb-0">
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                                Prev
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                Next
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('assets') }}/js/plugins/chart.js/chart.umd.js"></script>
    <script src="{{ asset('assets') }}/js/pages/be_pages_dashboard.min.js"></script>
@endpush
