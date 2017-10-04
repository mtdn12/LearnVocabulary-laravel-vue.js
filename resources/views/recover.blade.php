@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4" id="recover-content">
            <h2>1 Day</h2>
            <one-day></one-day>
        </div>
        <div class="col-sm-4" id="recover-content">
            <h2>1 Week</h2>
            <one-week></one-week>
        </div>
        <div class="col-sm-4" id="recover-content">
            <h2>1 Month</h2>
            <one-month></one-month>
        </div>
    </div>
</div>
@endsection
