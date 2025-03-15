@extends('admin.master')
@section('title',__('keyWords.edit_services'))
@section('contant')
        <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div >
                    <h2 class="h5 page-title">{{ __('keyWords.edit_services') }}</h2>
                    <div class="card shadow">
                        <div class="card-body">
                            <form action="{{ route('admin.services.update',['service'=>$service]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group mb-3">
                                            <label for="title">{{ __('keyWords.title') }}</label>
                                            <input type="text" placeholder="{{ __('keyWords.title') }}" value="{{ $service->title }}" name="title" class="form-control">
                                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                        </div>
                                    </div> <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="icon">{{ __('keyWords.icon') }}</label>
                                            <input type="text" placeholder="{{ __('keyWords.icon') }}" name="icon" value="{{ $service->icon }} " class="form-control">
                                            <x-input-error :messages="$errors->get('icon')" class="mt-2" />
                                        </div>
                                    </div> <!-- /.col -->
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="description">{{ __('keyWords.description') }}</label>
                                            <textarea type="text" placeholder="{{ __('keyWords.description') }}" name="description" class="form-control">{{ $service->description }}</textarea>
                                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">{{ __('keyWords.submit') }}</button>
                                {{-- <x-submit-button></x-submit-button> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
        </div> <!-- .container-fluid -->
@endsection
