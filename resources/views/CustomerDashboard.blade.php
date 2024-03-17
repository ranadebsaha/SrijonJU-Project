@extends('frontend.layouts.main')
@section('main-container')

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="form-container" id="loginForm">
                    <h2 class="text-center">DashBoard</h2>
                    @foreach($customer as $i)
                    <tr class="">
                        {{$i->name}}
                        {{$i->_no}}
                        {{$i->state}}
                        {{$i->city}}
                        {{$i->zip}}
                        <a href="{{url('/delete/')}}/{{$i->customer_id}}">
                        <button class="btn btn-danger">Trash</button></a>
                        <a href="{{url('/edit/')}}/{{$i->customer_id}}"><button class="btn btn-success">Edit</button></a></td>
                    </tr>
                    @endforeach
                    <form method="post" action="{{url('/')}}/login">
                    
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection