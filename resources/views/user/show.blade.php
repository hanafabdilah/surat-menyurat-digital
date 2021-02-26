@extends('layouts.app')

@section('title', 'Detail User')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('user.index') }}" class="btn btn-secondary mb-3">
                <i class="fa fa-chevron-left"></i> Kembali
            </a>
            <div class="au-card">
                <div class="au-card-inner">
                    <div class="au-card-header">
                        <h3 class="title-2">Detail User</h3>
                    </div>
                    <div class="au-card-body mt-3 mb-3">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="foto" class=" form-control-label">Foto</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <img src="{{ asset('storage/userfoto')}}/{{ $user->foto }}" width="100px" alt="{{ $user->nama }}">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="nama" class=" form-control-label">Nama</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text"  name="nama" value="{{ $user->nama}}" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="hf-email" class=" form-control-label">Email</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="email"  name="email" value="{{ $user->email}}" class="form-control " disabled>
                            </div>
                        </div>
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
                                <label for="role" class=" form-control-label">Role</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="role" class="form-control " disabled>
                                    <option value="">Pilih Role</option>
                                    <option value="staff" @if($user->role == 'staff') selected @endif>Staff</option>                                                               
                                </select>                               
                            </div>
                        </div>  
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label>Dibuat Oleh</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input class="form-control" value="{{ $user->createdBy->username ?? 'User sudah dihapus' }}" disabled>
                            </div>
                        </div> 
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label>Dibuat Pada</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input class="form-control" value="{{ $user->created_at->format('d-M-Y H:i') }}" disabled>
                            </div>
                        </div> 
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label>Terakhir diupdate oleh</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input class="form-control" value="{{ $user->updatedBy->username ?? 'User sudah dihapus' }}" disabled>
                            </div>
                        </div> 
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label>Terakhir diupdate pada</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input class="form-control" value="{{ $user->updated_at->format('d-M-Y H:i') }}" disabled>
                            </div>
                        </div> 
                    </div>
                    <div class="au-card-footer">
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">
                            <i class="fa fa-pencil-square-o"></i> Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection