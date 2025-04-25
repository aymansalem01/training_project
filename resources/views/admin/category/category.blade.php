@extends('admin.layout.layout')
@section('content')
            <!-- End Navbar -->
            <div class="content">
                <div class="text-end mb-3">
                    <a class="btn adduser" href="{{route('category.create')}}">
                        <i class="fas fa-user-plus"></i> Add category
                    </a>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="  d-flex flex-wrap justify-center  ">
                            @foreach ($categories as $category )
                            <div class="review-card">
                                <h5 class="category-name">{{$category->name}}</h5>
                                <div class="action-buttons">
                                    <a href="{{route('category.edit',$category->id)}}" class="edit-btn"><i class="fa-solid fa-pen"></i></a>
                                    <form action="{{route('category.destroy',$category->id)}}" method="post" >
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="delete-btn" onsubmit="confirmDelete"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="pagination-container">
                    {{ $categories->links('pagination::bootstrap-4') }}
                </div>
            </div>
            @endsection
