<x-layouts.create>

    <body>
        <div class="container">
            <div class="w-50 py-4">
                <h3>Mahsulotlarni qo'shish</h3>
                <div class="contact-form">
                    <div id="success"></div>


                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="control-group mb-4">
                            <input type="text" class="form-control p-4" name="title" value="{{ old('title') }}"
                                placeholder="Mahsulot nomi" />
                            @error('title')
                                <p class="help-block text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-control mb-4">
                            <select name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                </div>
                <div class="control-group mb-4">
                    <input type="file" class="form-control p-4" name="photo" placeholder="Rasmi" />
                    @error('photo')
                        <p class="help-block text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="control-group mb-4">
                    <input type="text" class="form-control p-4" name="price" value="{{ old('price') }}"
                        placeholder="Narxi" />
                    @error('title')
                        <p class="help-block text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="control-group mb-4">
                    <textarea class="form-control p-4" rows="3" name="short_content" placeholder="Qisqacha malumot">{{ old('short_content') }}</textarea>
                    @error('short_content')
                        <p class="help-block text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="control-group mb-4">
                    <textarea class="form-control p-4" rows="6" name="content" placeholder="Malumot">{{ old('content') }}</textarea>
                    @error('content')
                        <p class="help-block text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <button class="btn btn-primary btn-block py-3 px-5" type="submit">Saqlash</button>
                </div>
                </form>
            </div>
        </div>
        {{-- </div> --}}

        </div>


    </body>

    </html>

</x-layouts.create>
