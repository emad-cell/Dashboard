@extends('admin.master')
@section('title', __('keyWords.show_testimonials'))
@section('contant')
    <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div >
                <h2 class="h5 page-title">{{ __('keyWords.show_testimonials') }}</h2>
                <div class="card shadow">
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group mb-3">
                                        <label for="name">{{ __('keyWords.name') }}</label>
                                        <p  class="form-control">{{ $testimonial->name }} </p>
                                        <i class="fe {{  $testimonial->name }}"></i>
                                    </div>
                                </div> <!-- /.col -->
                                <div class="col-md-5">
                                    <div class="form-group mb-3">
                                        <label for="name">{{ __('keyWords.name') }}</label>
                                        <p class="form-control">{{ $testimonial->name }} </p>
                                        <i class="fe {{  $testimonial->name }}"></i>
                                    </div>
                                </div> <!-- /.col -->
                                <div class="col-md-2">
                                    <div class="form-group mb-3">
                                        <label for="position">{{ __('keyWords.position') }}</label>
                                        <div>
                                        <img src="{{ asset("storage/testimonials/$testimonial->image") }}" width="50px" alt="">
                                        </div>
                                    </div>
                                </div> <!-- /.col -->
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="description">{{ __('keyWords.description') }}</label>
                                        <p>{{ $testimonial->description }}</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
