@extends('layouts.default')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Episode Quotes</h1>
</div>
<div class="row">
    <div class="col-md-8 order-md-1">
        @if(\Session::has('success'))
            <div class="alert alert-success">
                {{\Session::get('success')}}
            </div>
        @endif
    </div>
   
    <div class="col-md-8 order-md-1">
        <h4 class="mb-3">All Quotes</h4>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Episode</th>
                    <th>Season</th>
                    <th>Quote</th>
                    <th>Picture</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=0 ?>
                @foreach($quotes as $quote)
                    <tr>
                        <td>{{$quote->id}}</td>
                        <td>{{$quote->episode}}</td>
                        <td>{{$quote->season}}</td>
                        <td>{{$quote->quote}}</td>
                        <td><img src="https://picsum.photos/200/200?random={{$i}}"></img></td>
                        <td>
                        <a href="{{ url('/quotes/edit/'.$quote->id)}}"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg></a>
                        <a href="{{ url('/quotes/delete/'.$quote->id)}}" onclick="return confirm('Are you sure you want to delete the quote?')" ><svg class="bi bi-trash-fill" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M4.5 3a1 1 0 00-1 1v1a1 1 0 001 1H5v9a2 2 0 002 2h6a2 2 0 002-2V6h.5a1 1 0 001-1V4a1 1 0 00-1-1H12a1 1 0 00-1-1H9a1 1 0 00-1 1H4.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM10 7a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 0110 7zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z" clip-rule="evenodd"></path>
</svg></a></td>
                    </tr>
                    <?php $i++ ?>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop