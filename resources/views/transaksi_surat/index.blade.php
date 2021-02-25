@extends('layouts.app')

@section('title', 'Transaksi Surat')

@section('body')
    <div class="row">                            
        <div class="col-lg-12">
            <div class="au-card">
                <div class="au-card-inner">
                    <div class="au-card-header">
                        <h3 class="title-2">Transaksi Surat</h3>
                    </div>
                    <div class="au-card-body mt-3 mb-3">
                        <a href="{{ route('transaksisurat.create') }}" class="au-btn au-btn-icon au-btn--green au-btn--small mb-3">
                            <i class="zmdi zmdi-plus"></i> Tambah
                        </a>
                        <div class="table-responsive table--no-card m-b-30">
                            <table class="table table-borderless table-striped text-center">
                                <thead class="bg-info">
                                    <tr>
                                        <th class="text-light">No. Agenda</th>
                                        <th class="text-light">No. Surat</th>
                                        <th class="text-light">Pengirim</th>
                                        <th class="text-light">Tanggal Surat</th>
                                        <th class="text-light">Kategori</th>
                                        <th class="text-light">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($transaksiSurats->count() > 0)
                                        @foreach($transaksiSurats as $t)
                                            <tr>                                                
                                                <td style="vertical-align: middle">{{ $t->no_agenda }}</td>
                                                <td>{{ $t->no_surat }}</td>
                                                <td>{{ $t->pengirim }}</td>
                                                <td>{{ $t->tanggal_surat->format('d/m/Y') }}</td>
                                                <td class="{{ request()->is($t->kategori == 'in') ? 'text-success' : 'text-danger' }}">{{ request()->is($t->kategori == 'in') ? 'Masuk' : 'Keluar' }}</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-info rounded-circle item" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="{{ route('disposisi.index', $t->id) }}">Disposisi</a>
                                                            <a class="dropdown-item" href="{{ route('transaksisurat.show', $t->id) }}">Detail</a>
                                                            <a class="dropdown-item" href="{{ route('transaksisurat.edit', $t->id) }}">Edit</a>
                                                            <form action="{{ route('transaksisurat.destroy', $t->id ) }}" method="post">
                                                                @csrf
                                                                <input name="_method" type="hidden" value="DELETE">
                                                                <button type="submit" class="dropdown-item">Hapus</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>                          
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="6">Data tidak ditemukan</td>                                           
                                        </tr>
                                    @endif                                                                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </div>
@endsection