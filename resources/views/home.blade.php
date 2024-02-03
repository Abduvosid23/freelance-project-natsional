@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Mahsulotlar royhati') }}



                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nomi</th>
                            <th scope="col">Haqida</th>
                            <th scope="col">Narxi</th>
                            <th scope="col">Categoriya</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->short_content }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->category->name }}</td>

                        <td><a href="{{ route('products.update', ['product' => $product->id]) }}" class="btn btn-primary">Ozgartirish</a></td>
                       <td> <form action="{{ route('products.destroy',['product'=>$product->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" >
                                O'chirish
                            </button>
                        </form></td>

                    </tr>
                         @endforeach

                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
