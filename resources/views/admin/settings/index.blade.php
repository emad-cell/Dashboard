@extends('admin.master')
@section('title', __('keyWords.edit_settings'))
@section('contant')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div>
                    <h2 class="h5 page-title">{{ __('keyWords.edit_settings') }}</h2>
                    <div class="card shadow">
                        <div class="card-body">
                            <form action="{{ route('admin.settings.update', ['setting' => $setting]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="phone">{{ __('keyWords.phone') }}</label>
                                            <input type="text" placeholder="{{ __('keyWords.phone') }}"
                                                value="{{ $setting->phone }}" name="phone" class="form-control">
                                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="email">{{ __('keyWords.email') }}</label>
                                            <input type="text" placeholder="{{ __('keyWords.email') }}"
                                                value="{{ $setting->email }}" name="email" class="form-control">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="address">{{ __('keyWords.address') }}</label>
                                            <input type="text" placeholder="{{ __('keyWords.address') }}"
                                                value="{{ $setting->address }}" name="address" class="form-control">
                                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="facebook">{{ __('keyWords.facebook') }}</label>
                                            <input type="url" placeholder="{{ __('keyWords.facebook') }}"
                                                value="{{ $setting->facebook }}" name="facebook" class="form-control">
                                            <x-input-error :messages="$errors->get('facebook')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="linkedin">{{ __('keyWords.linkedin') }}</label>
                                            <input type="url" placeholder="{{ __('keyWords.linkedin') }}"
                                                value="{{ $setting->linkedin }}" name="linkedin" class="form-control">
                                            <x-input-error :messages="$errors->get('linkedin')" class="mt-2" />
                                        </div>
                                    </div>
                                        <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="youtube">{{ __('keyWords.youtube') }}</label>
                                            <input type="url" placeholder="{{ __('keyWords.youtube') }}"
                                                value="{{ $setting->youtube }}" name="youtube" class="form-control">
                                            <x-input-error :messages="$errors->get('youtube')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="instagram">{{ __('keyWords.instagram') }}</label>
                                            <input type="url" placeholder="{{ __('keyWords.instagram') }}"
                                                value="{{ $setting->instagram }}" name="instagram" class="form-control">
                                            <x-input-error :messages="$errors->get('instagram')" class="mt-2" />
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="twitter">{{ __('keyWords.twitter') }}</label>
                                            <input type="url" placeholder="{{ __('keyWords.twitter') }}"
                                                value="{{ $setting->twitter }}" name="twitter" class="form-control">
                                            <x-input-error :messages="$errors->get('twitter')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>
                                {{-- <button type="submit" class="btn btn-primary">{{ __('keyWords.submit') }}</button> --}}
                                <x-submit-button></x-submit-button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
