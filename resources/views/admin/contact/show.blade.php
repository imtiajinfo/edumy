@extends('layouts.backend.app')

@section('title','Slider')

@push('css')
    <!-- JQuery DataTable Css -->
    <link href="{{ asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="container-fluid">
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>{{ $contact->subject }}</h2>
                    </div>
                    <div class="body">
                       <strong>Name: {{ $contact->name }}</strong><br>
                       <b>Email: {{ $contact->email }}</b> <br>
                       <p><strong>Message: </strong><hr>{{ $contact->message }}</p><hr>
                    </div>
                </div>
                <a href="{{ route('admin.contact.index') }}" class="btn btn-danger">Back</a>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
@endsection

@push('js')
   
@endpush