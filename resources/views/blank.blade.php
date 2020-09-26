@extends('template.master')

@section('title')
    
@endsection

@section('content')
<div class="col-12 stretch-card">
    <div class="card">
        <form>
            <div class="card-header">
                <a href="" class="btn btn-link btn-xs"><i class="fa fa-arrow-left"></i></a>
                <span class="card-title">&nbsp;Data</span>
                <a class="btn btn-primary btn-add pull-right" type="button" title="Tambah Data" style="color: white;" href="{{ url('') }}">
                    <i class="fa fa-plus"></i> | Add
                </a>
            </div>
            <div class="card-body">
                
            </div>
            <div class="card-footer">

            </div>
        </form>
    </div>
</div>
@endsection

@push('scriptfooter')
    
@endpush