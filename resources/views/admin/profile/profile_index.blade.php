@extends('admin.layouts.layout')
@section('content')
<div class="app-main__inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card-hover-shadow profile-responsive card-border border-success mb-3 card">
                <div class="dropdown-menu-header">
                    <div class="dropdown-menu-header-inner bg-success">
                        <div class="menu-header-content">
                            <div class="avatar-icon-wrapper btn-hover-shine mb-2 avatar-icon-xl">
                                <div class="avatar-icon rounded">
                                    <img src="assets/images/avatars/1.jpg" alt="Avatar 6">
                                </div>
                            </div>
                            <div>
                                <h5 class="menu-header-title">John Rosenberg</h5>
                                <h6 class="menu-header-subtitle">Short profile description</h6>
                            </div>
                            <div class="menu-header-btn-pane">
                                <button class="me-2 btn btn-primary btn-sm">Settings</button>
                                <button class="btn-icon btn-icon-only btn btn-info btn-sm">
                                    <i class="pe-7s-config btn-icon-wrapper"> </i>
                                </button>
                            </div>
                            <div class="menu-header-btn-pane pt-2">
                                <div role="group" class="btn-group text-center">
                                    <div class="nav" role="tablist">
                                        <a href="#tab-2-eg1" data-bs-toggle="tab" class="active btn btn-dark"
                                            aria-selected="true" role="tab">Tab 1</a>
                                        <a href="#tab-2-eg2" data-bs-toggle="tab" class="btn btn-dark me-1 ms-1"
                                            aria-selected="false" tabindex="-1" role="tab">Tab 2</a>
                                        <a href="#tab-2-eg3" data-bs-toggle="tab" class="btn btn-dark"
                                            aria-selected="false" tabindex="-1" role="tab">Tab 3</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p>Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.</p>
                    <p class="mb-0">Since the 1500s, when an unknown printer took a galley of type and scrambled.
                    </p>
                </div>
                <div class="text-center d-block card-footer">
                    <button class="me-2 text-danger btn btn-link btn-sm">Cancel</button>
                    <button class="btn-shadow-primary btn btn-primary btn-lg">Update Profile</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection