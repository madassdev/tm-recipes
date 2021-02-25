@extends('layouts.dashboard') @section('content')

<div class="row text-black">
    <div class="col-md-8 p-3">
        <div class="card p-3 shadow-md">
            <p class="font-bold">Categories</p>
            <table class="table table-sm table-hoverx">
                    <tr>
                        <th>Name</td>
                        <th>Action</td>
                    </tr>
                    @forelse($categories as $category)
                    <tr>
                        <td>
                            <a href="{{route('admin.categories.show', $category)}}" class="text-black font-bold">
                                {{ucfirst($category->name)}}
                                 <span class="text-primary">
                                    - {{$category->recipes_count}} recipe(s)
                                 </span>
                            </a>
                        </td>
                        <td>
                            @if($category->id == 1)
                            <span class="text-muted font-bold">Default</span>
                            @else
                            <a href="{{route('admin.categories.delete', $category)}}" class="text-danger">
                                Delete

                            </a>
                            @endif
                        </td>
                    </tr>
                    @empty
                    @endforelse
            </table>
        </div>
    </div>
    <div class="col-md-4 p-3">
        <div class="card shadow-md p-3">
            <p class="font-bold">Create Category</p>

            <form action="{{route('admin.categories.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" required/>
                    @error('name')
                    <strong class="text-xs text-danger">
                        <i class="mdi mdi-alert-circle"></i>
                        {{$message}}
                    </strong>
                    @enderror
                </div>
                <div class="form-group float-right">
                    <button class="btn btn-primary bg-blue-300 text-white">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
