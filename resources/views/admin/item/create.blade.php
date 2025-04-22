@extends('admin.layout.layout')

@section('content')
    <style>
        .form-container {
            width: 100%;
            max-width: 400px;
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
        .form-control,
        .form-select,
        .btn-custom {
            height: 45px;
            border-radius: 10px;
            font-size: 16px;
            width: 100%;
            color: #333
        }
        .btn-custom {
            background-color: #a92dfc;
            border: none;
            color: white;
            font-weight: bold;
            transition: 0.3s ease;
            width: 100%;
        }
        .btn-custom:hover {
            background-color: #911ede;
            color: white
        }
        .form-container {
            max-width: 500px;
            margin: 50px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            background-image: url("{{ asset('assets/img/create9.jpg') }}");
            background-size: cover;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 40px;
            font-weight: bold;
            color: balck;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px
        }

        .custom-error {
            background-color: #ffceec;
            font-weight: bold;
            font-size: 14px;
            color: #a49e9e;
            padding: 10px;
            border-radius: 20px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }
    </style>

    <div class="form-container">

        <h2>Add Item</h2>
        <form action="{{ route('item.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="name">Item Name</label>
                <input type="text" name="name" id="name" class="form-control mb-3" placeholder="Enter Item name"
                    value="{{ old('name') }}" required>
                @error('name')
                    <div class="custom-error"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</div>
                @enderror
            </div>

            <div>
                <select name="category" class="form-select mb-3" required>
                    <option  disabled selected>Select category</option>
                    @foreach($categories as $category )
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="image">item Image</label>
                <input type="file" name="image" id="image" class="form-control mb-3" placeholder="Upload subject image">
                @error('image')
                    <div class="custom-error"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="price">Item price</label>
                <input type="number" name="price" id="price" class="form-control mb-3" placeholder="Enter Item price"
                    value="{{ old('price') }}" required>
                @error('price')
                    <div class="custom-error"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="discount">Item discount</label>
                <input type="number" name="discount" id="discount" class="form-control mb-3" placeholder="Enter Item discount in %"
                    value="{{ old('discount') }}" required>
                @error('discount')
                    <div class="custom-error"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</div>
                @enderror
            </div>


            <button type="submit" class="btn btn-custom w-100">Add Item</button>
        </form>

    </div>
@endsection
