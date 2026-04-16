@extends('admin.layouts.layout')
@section('content')
<div class="app-main__inner">
    <div class="app-page-title mb-0">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon"><i class="pe-7s-note2 icon-gradient bg-mean-fruit"></i></div>
                <div>Detail Pengajuan
                    <div class="page-title-subheading">
                        Admin -> Issue -> Detail Pengajuan
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Biaya APC dan Dana Apresiasi</h5>
                    <div class="row">
                        <div class="col">
                            <div class="list-group list-group-flush nav">
                                <li class="nav-item-header nav-item" style="font-size: 15px;">Biaya APC</li>
                                <div class="list-group-item" style="display: flex;justify-content: space-between;">
                                    <div>Biaya APC Diajukan</div>
                                    <div>Rp. {{number_format($data['issue']->biaya_apc, 0, ',', '.')}}</div>
                                </div>
                                <li class="nav-item-header nav-item" style="font-size: 15px;">Biaya Aspirasi</li>
                                <div class="list-group-item" style="display: flex;justify-content: space-between;">
                                    <div>Aspirasi {{$data['apresiasi']['nama_apresiasi']}}</div>
                                    <div>Rp. {{number_format($data['apresiasi']['nominal'], 0, ',', '.')}}</div>
                                </div>
                                <div class="list-group-item" style="display: flex;justify-content: space-between;">
                                    <div>Total:</div>
                                    <div><b>Rp. {{number_format($data['apresiasi']['total'], 0, ',', '.')}}</b></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="list-group list-group-flush nav">
                                <li class="nav-item-header nav-item" style="font-size: 15px;">Apresiasi Penulis</li>
                                <div class="list-group-item" style="display: flex;justify-content: space-between;">
                                    <div>Total Aspirasi</div>
                                    <div>Rp. 10.000.000</div>
                                </div>
                                <div class="list-group-item" style="display: flex;justify-content: space-between;">
                                    <div>Penulis 1 (60%)</div>
                                    <div>Rp. 6.000.000</div>
                                </div>
                                <div class="list-group-item" style="display: flex;justify-content: space-between;">
                                    <div>Penulis 2 (40%)</div>
                                    <div>Rp. 4.000.000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="text-center">
                        <button class="btn btn-primary">VALIDASI AJUAN</button>
                        <button class="btn btn-warning">REVISI</button>
                        <!-- <div class="dropdown btn-group"><button type="button" aria-haspopup="true" aria-expanded="false"
                                data-bs-toggle="dropdown" class="mb-2 me-2 dropdown-toggle btn btn-primary">Dropdown
                                Basic</button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                <ul class="nav flex-column">
                                    <li class="nav-item-header nav-item">Activity</li>
                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Chat<div
                                                class="ms-auto badge rounded-pill bg-info">8</div></a></li>
                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Recover
                                            Password</a></li>
                                    <li class="nav-item-header nav-item">My Account</li>
                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Settings<div
                                                class="ms-auto badge bg-success">New</div></a></li>
                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Messages<div
                                                class="ms-auto badge bg-warning">512</div></a></li>
                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Logs</a></li>
                                    <li class="nav-item-divider nav-item"></li>
                                    <li class="nav-item-btn nav-item"><button
                                            class="btn-wide btn-shadow btn btn-danger btn-sm">Cancel</button></li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('pagespecificscripts')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script type="text/javascript">

</script>
@include('admin.issue.js_issue')
@endsection