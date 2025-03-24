@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
                <div class="card-header">{{ __('Ajouter une sauce') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('sauce.store') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="manufacturer" class="col-md-4 col-form-label text-md-end">{{ __('Manufacturer') }}</label>
                            <div class="col-md-6">
                                <input id="manufacturer" type="text" class="form-control @error('manufacturer') is-invalid @enderror" name="manufacturer" value="{{ old('manufacturer') }}" required autocomplete="manufacturer" autofocus>
                                @error('manufacturer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- IMAGE -->

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>
                            <div class="col-md-6">
                                <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="ingredient" class="col-md-4 col-form-label text-md-end">{{ __('Main pepper ingredient') }}</label>
                            <div class="col-md-6">
                                <input id="ingredient" type="text" class="form-control @error('ingredient') is-invalid @enderror" name="ingredient" value="{{ old('ingredient') }}" required autocomplete="ingredient" autofocus>
                                @error('ingredient')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="heat" class="col-md-4 col-form-label text-md-end">{{ __('Heat') }}</label>
                            <div class="col-md-6">
                                <input type="range" name="heat" min="0" max="10"/>
                                <input id="heat" type="text" class="form-control @error('heat') is-invalid @enderror" name="heatValue" value="{{ old('heat') }}" required autocomplete="heat" autofocus>
                                @error('heat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
