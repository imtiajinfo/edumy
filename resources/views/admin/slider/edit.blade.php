@extends('layouts.backend.app')

@section('title','Category')

@push('css')

@endpush

@section('content')
    <div class="container-fluid">
        <!-- Vertical Layout | With Floating Label -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                           Edit Slider
                        </h2>
                    </div>
                    <div class="body">
                        <form method="POST" action="{{ route('admin.slider.update',$slider->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="title" class="form-control" name="title" value="{{ $slider->title }}">
                                    <label class="form-label">Title</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="sub_title" class="form-control" name="sub_title" value="{{ $slider->sub_title }}">
                                    <label class="form-label">Sub Title</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="file" name="image">
                            </div>

                            <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.slider.index') }}">BACK</a>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')

@endpush