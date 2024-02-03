<x-layouts.main>

    <div class="container-fluid py-5">
        <div class="container">

            <div class="row">







                        </div>
                        <div class="d-flex mb-2">
                            <a class="text-white text-uppercase font-weight-medium px-2 py-1 bg-secondary rounded" href="">{{$product->category->name}}</a>
                        </div>
                        <h1 class="section-title mb-3">{{$product->title }}</h1>
                    </div>

                    <div class="mb-5">
                        <img class="img-fluid rounded w-500 " src="{{ asset('storage/'.$product->photo) }}" alt="Image">
                        <p>{{$product->content }}</p>



                    </div>


                    </div>



                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">


                    <div class="mb-5">
                        <h3 class="mb-4 section-title">Categories</h3>
                        <ul class="list-inline m-0">
                           @foreach ($categories as $category )
                            <h3>{{ $category->name }}</h3>
                           @endforeach
                        </ul>
                    </div>





                </div>
            </div>
        </div>


</x-layouts.main>
