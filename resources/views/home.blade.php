@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6" id="content-box">
            <h2>New Words</h2>
            <new-words></new-words>
        </div>
        <div class="col-sm-6" id="content-box">
            <h2>List New Words</h2>
            <show-words></show-words>
        </div>
    </div>
</div>
@endsection
