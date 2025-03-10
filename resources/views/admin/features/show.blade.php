@extends('admin.master')
@section('title',__('keyWords.show_features'))
@section('contant')
        <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div >
                    <h2 class="h5 page-title">{{ __('keyWords.show_features') }}</h2>
                    <div class="card shadow">
                        <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="title">{{ __('keyWords.title') }}</label>
                                            <p  class="form-control">{{ $feature->title }} </p>
                                            <i class="fe {{  $feature->title }}"></i>
                                        </div>
                                    </div> <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="icon">{{ __('keyWords.icon') }}</label>
                                            <p class="form-control ">{{ $feature->icon }}<i class="fe {{ $feature->icon }} ml-2"></i></p>
                                        </div>
                                    </div> <!-- /.col -->
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="description">{{ __('keyWords.description') }}</label>
                                            <p>{{ $feature->description }}</p>
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
