@extends('layouts.app')

@section('title', 'Account')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="au-card">
                <div class="au-card-inner">
                    <div class="au-card-header">
                        <h3 class="title-2">Account</h3>
                    </div>
                    <form action="{{ route('account.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="au-card-body mt-3 mb-3">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label>Username</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input class="form-control" value="{{ $user->username }}" disabled>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label>Role</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input class="form-control" value="{{ $user->role }}" disabled>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="upload">Foto</label>
                                </div>
                                <div class="col-12 col-md-2">
                                    <img src="{{ asset('storage/userfoto') }}/{{ $user->foto }}" id="previewImg" width="100px">
                                </div>
                                <div class="col-12 col-md-7 p-3">
                                    <input type="file" id="upload" name="upload" class="form-control-file" accept=".jpg, .jpeg, .png" onchange="previewFile(this)">
                                    <small class="form-text">Max: 2MB | .jpg, .jpeg, .png | 1:1</small>
                                    @error('upload')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="nama">Nama</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ ucwords(strtolower($user->nama)) }}">
                                    @error('nama')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="email">Email</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}">
                                    @error('email')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="au-card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-upload"></i> Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection