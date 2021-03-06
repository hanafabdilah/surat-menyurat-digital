@extends('layouts.app')

@section('title', 'Tambah Disposisi')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('disposisi.index', $id_surat) }}" class="btn btn-secondary mb-3">
                <i class="fa fa-chevron-left"></i> Kembali
            </a>
            <div class="au-card">
                <div class="au-card-inner">
                    <div class="au-card-header">
                        <h3 class="title-2">Tambah Disposisi</h3>
                    </div>
                    <form action="{{ route('disposisi.store', $id_surat) }}" method="post">
                    @csrf
                        <div class="au-card-body mt-3 mb-3">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="tujuan" class="form-control-label">Tujuan</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select id="tujuan" name="tujuan" class="form-control @error('tujuan') is-invalid @enderror">
                                        <option value="">Pilih Tujuan</option>
                                        @foreach($klasifikasis as $k)
                                            <option value="{{ $k->jabatan }}" @if(old('tujuan') == $k->jabatan) selected @endif>{{ $k->jabatan }}</option>
                                        @endforeach
                                    </select>
                                    @error('tujuan')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="sifat_surat" class=" form-control-label">Sifat Surat</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select id="sifat_surat" name="sifat_surat" class="form-control @error('sifat_surat') is-invalid @enderror">
                                        <option value="">Pilih Sifat Surat</option>
                                        @foreach($sifatSurats as $s)
                                            <option value="{{ $s->sifat_surat }}" @if(old('sifat_surat') == $s->sifat_surat) selected @endif>{{ $s->sifat_surat }}</option>
                                        @endforeach
                                    </select>   
                                    @error('sifat_surat')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="isi_ringkas" class=" form-control-label">Isi Ringkas</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea id="isi_ringkas" name="isi_ringkas" rows="5" class="form-control @error('isi_ringkas') is-invalid @enderror">{{ old('isi_ringkas') }}</textarea>
                                    @error('isi_ringkas')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="batas_waktu" class=" form-control-label">Batas Waktu</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input id="batas_waktu" type="date" name="batas_waktu" class="form-control @error('batas_waktu') is-invalid @enderror" value="{{ Request::old('batas_waktu') }}">
                                    @error('batas_waktu')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="catatan" class=" form-control-label">Catatan</label>
                                    <small><i>- Optional</i></small>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea id="catatan" name="catatan" rows="5" class="form-control @error('catatan') is-invalid @enderror">{{ old('catatan') }}</textarea>
                                    @error('catatan')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="au-card-footer">
                            <div class="au-card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="zmdi zmdi-plus"></i> Tambah
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection