@extends('admin.master')
@section('title',__('keyWords.show_messages'))
@section('contant')
        <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div >
                    <h2 class="h5 page-title">{{ __('keyWords.show_messages') }}</h2>
                    <div class="card shadow">
                        <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="name">{{ __('keyWords.name') }}</label>
                                            <p  class="form-control">{{ $message->name }} </p>
                                            <i class="fe {{  $message->name }}"></i>
                                        </div>
                                    </div> <!-- /.col -->
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="emai">{{ __('keyWords.email') }}</label>
                                            <p class="form-control ">{{ $message->email }}<i class="fe {{ $message->email }} ml-2"></i></p>
                                        </div>
                                    </div> <!-- /.col -->
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="subject">{{ __('keyWords.subject') }}</label>
                                            <p class="form-control ">{{ $message->subject }}<i class="fe {{ $message->subject }} ml-2"></i></p>
                                        </div>
                                    </div> <!-- /.col -->

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="description">{{ __('keyWords.description') }}</label>
                                            <p>{{ $message->message }}</p>
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
