@extends('admin.layouts.layout')
@section('content')
<div class="app-main__inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card-hover-shadow profile-responsive mb-3 card">
                <div class="dropdown-menu-header">
                    <div class="dropdown-menu-header-inner bg-success">
                        <div class="menu-header-content">
                            <div class="avatar-icon-wrapper btn-hover-shine mb-2 avatar-icon-xl">
                                <div class="avatar-icon rounded">
                                    <img src="{{ asset('storage/template') }}/assets/images/avatars/pengguna.jpg"
                                        alt="Avatar 6">
                                </div>
                            </div>
                            <div>
                                <h5 class="menu-header-title">{{auth()->user()->name}}</h5>
                                <h6 class="menu-header-subtitle">Detail Profil</h6>
                            </div>
                            <!-- <div class="menu-header-btn-pane">
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
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card-title">Identitas</div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Nama</label>
                                <input value="{{$datas->name}}" id="nama" type="text" class="form-control"
                                    placeholder="Enter a name ...">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Email</label>
                                <input value="{{$datas->email}}" id="email" type="text" class="form-control"
                                    placeholder="Enter an email ...">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="message">Tentang Diri</label>
                                <textarea class="form-control" id="message" rows="3"
                                    placeholder="Enter a message ..."></textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-title">Ganti Password</div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Password Lama</label>
                                <input id="passLama" type="text" class="form-control" placeholder="Isi password lama">
                                <small class="form-text text-muted">Isi hanya jika ingin mengganti
                                    password</small>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Password Baru</label>
                                <input id="passBaru" type="text" class="form-control" placeholder="Isi password baru">
                                <small class="form-text text-muted">Isi hanya jika ingin mengganti
                                    password</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-title">Avatar Profil</div>
                            <img src="{{ asset('storage/template') }}/assets/images/avatars/pengguna.jpg"
                                style="width: 100%;" alt="">
                            <div class="mb-3">
                                <label class="form-label" for="showEasing">Ganti Avatar</label>
                                <input id="fileAvatar" type="file" placeholder="swing, linear" class="form-control"
                                    value="swing">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center d-block card-footer">
                    <button class="me-2 text-danger btn btn-link btn-sm">Cancel</button>
                    <button class="btn-shadow-primary btn btn-primary btn-lg">Update Profil</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection