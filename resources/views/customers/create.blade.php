@extends('layouts.app')


@section('title','Add New Customer')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Add New Customer</h1>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <form action="/customers" method="POST" class="pb-5">
            @include('customers.form')
            <button class="btn btn-primary" type='submit'>Add Customer</button>
        </form>
    </div>
</div>

@endsection