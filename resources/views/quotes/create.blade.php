@extends('layouts.default')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add Quote</h1>
</div>
<div class="row">
    <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Add a new Quote</h4>
        <form class="needs-validation" novalidate="" action="{{ url('/quotes/store')}}" method="post">
        @csrf 
            <div class="row">
                <div class="col-md-8">
                    <label for="season">Season</label>
                    <input type="text" class="form-control" id="season"  name="season" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                    Valid Season is required.
                    </div>
                </div>
                <div class="col-md-8">
                    <label for="episode">Episode</label>
                    <input type="text" class="form-control" id="episode" name="episode" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                    Valid Episode is required.
                    </div>
                </div>
                <div class="col-md-8">
                    <label for="quote">Quote</label>
                    <input type="text" class="form-control" id="quote" name="quote" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                    Valid Quote is required.
                    </div>
                </div>
                </div>
                <hr class="mb-4">
                <div class="col-md-5">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
                </div>
        </form>
    </div>
</div>
@stop