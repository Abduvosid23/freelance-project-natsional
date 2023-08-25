<x-layouts.main>

    <!-- Room Start -->
    <div class="container-xxl py-5">
      <div class="container">
          <div class="text-center wow fadeInUp" >
              <h6 class="section-title text-center text-primary text-uppercase">Bizning Mahsulotlar</h6>
              <h1 class="mb-5">Bizning <span class="text-primary text-uppercase">Mahsulotlar</span></h1>
          </div>
      </div>
      <div class="row" style="text-align: center">

        @foreach ($products as $product)

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="room-item shadow rounded overflow-hidden">
                      <div class="position-relative">
                          <img src="{{ asset('storage/'.$product->photo) }}" alt="" width="350" height="350">
                          <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">${{$product->price}}</small>
                      </div>
                      <div class="p-4 mt-2">
                          <div class="d-flex justify-content-between mb-3">
                              <h5 class="mb-0">{{$product->title}}</h5>
                              <div class="ps-2">
                                  <small class="fa fa-star text-primary"></small>
                                  <small class="fa fa-star text-primary"></small>
                                  <small class="fa fa-star text-primary"></small>
                                  <small class="fa fa-star text-primary"></small>
                                  <small class="fa fa-star text-primary"></small>
                              </div>
                          </div>

                          <p class="text-body mb-3">{{$product->short_content}}</p>
                          <div class="d-flex justify-content-between">
                              <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{route('products.show',['product'=>$product->id])}}">Batafsil</a>
                              <a class="btn btn-sm btn-dark rounded py-2 px-4" href="{{route('deliver')}}">Harid qilish</a>
                          </div>
                      </div>
                  </div>
              </div>
              @endforeach

           </div>




</x-layouts.mian>
