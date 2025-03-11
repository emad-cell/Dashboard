@extends('admin.master')
@section('title', __('keyWords.edit_testimonials'))
@section('contant')
    <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div >
                <h2 class="h5 page-title">{{ __('keyWords.edit_testimonials') }}</h2>
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.testimonials.update', ['testimonial' => $testimonial]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="name">{{ __('keyWords.name') }}</label>
                                        <input type="text" placeholder="{{ __('keyWords.title') }}" value="{{ $testimonial->name }}" name="name" class="form-control">
                                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                    </div>
                                </div> <!-- /.col -->
                                <div class="col-md-6">
                                    <label for="position">{{ __('keyWords.position') }}</label>
                                    <input type="text" placeholder="{{ __('keyWords.position') }}" value="{{ $testimonial->position }}" name="position"
                                        class="form-control">
                                    <x-input-error :messages="$errors->get('position')" class="mt-2" />
                                </div>
                                <div class="col-md-12">
                                    <label for="image">{{ __('keyWords.image') }}</label>
                                    <input type="file" placeholder="{{ __('keyWords.image') }}" name="image" class="form-control-file mb-2">
                                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="description">{{ __('keyWords.description') }}</label>
                                        <textarea type="text" placeholder="{{ __('keyWords.description') }}" name="description" class="form-control">{{ $testimonial->description }}</textarea>
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
