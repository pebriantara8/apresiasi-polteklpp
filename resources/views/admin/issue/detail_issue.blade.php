@extends('admin.layouts.layout')
@section('content')
<div class="app-main__inner">
    <div class="app-page-title mb-0">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon"><i class="pe-7s-plus icon-gradient bg-mean-fruit"></i></div>
                <div>Detail Pengajuan
                    <div class="page-title-subheading">
                        Admin -> Issue -> Detail Pengajuan
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