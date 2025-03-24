@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (sizeof($sauces) > 0)
                <p>THE SAUCES</p>
            @else
                <p>NO SAUCE</p>
            @endif
        </div>
    </div>
</div>
@endsection
