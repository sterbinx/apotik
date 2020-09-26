@extends('template.master')

@section('content')
<div class="col-12 stretch-card">
    <div class="card">
        <form action="{{ url('/master/type/create/process') }}" method="POST">
            @csrf
            <div class="card-header">
                <a href="{{ url('/master/type') }}" class="btn btn-link btn-xs"><i class="fa fa-arrow-left"></i></a>
                <span class="card-title">&nbsp;Tambah Data</span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Type</label>
                        <input type="text" name="typenm" id="typenm" class="form-control @error('typenm') is-invalid @enderror" value="{{ old('typenm') }}" placeholder="Nama Type">
                        @error('typenm') 
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> 
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Category</label>
                        <select class="form-control select-category @error('catid') is-invalid @enderror" name="catid" id="catid">
                            <option></option>
                        </select>
                        @error('catid') 
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> 
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Color</label>
                        <div class="input-group mb-3" id="color-picker-component">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1" style="width: 40px;"></span>
                            </div>
                            <input type="text" class="form-control" name="color" id="color" autocomplete="off" placeholder="Color" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <!-- <div id="color-picker-component" class="input-group colorpicker-component">
                            <input type="text" value="#38a677" class="form-control"/>
                            <span class="input-group-addon"><i></i></span>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-me pull-right">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scriptfooter')
    @include('master.type.scriptfooter')
@endpush