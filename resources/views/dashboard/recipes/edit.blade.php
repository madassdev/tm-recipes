@extends('layouts.dashboard')
@section('subheader')
<div class="c-subheader justify-content-between px-3">
    <ol class="breadcrumb border-0 m-0 px-0 px-md-3">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">
            <a href="{{ route('admin.recipes.index') }}">Properties</a>
        </li>
        <li class="breadcrumb-item active">Create</li>
    </ol>
</div>
@endsection @section('content')
<div class="row">
    <div class="col-md-10 mx-auto">
        <div class="card shadow-md">
            <div
                class="card-header bg-gray-100 flex items-center justify-between"
            >
                <p class="font-bold h1">Create recipe</p>
                
            </div>
            <div class="card-body">
                <form action="{{route('admin.recipes.update', $recipe->slug)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group row">

                        <div class="form-group col-md-8">
                            <label for="">Title</label>
                            
                            <input
                            type="text"
                            name="title"
                            class="form-control"
                            value="{{$recipe->title}}"
                            required
                            />
                            @error('title')
                            <strong class="text-xs text-danger">
                                <i class="mdi mdi-alert-circle"></i>
                                {{ $message }}
                            </strong>
                            @enderror
                            <p class="m-1 text-muted text-xs">
                                This will appear on the site as the title
                            </p>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Select category</label>
                            <select name="category_id" id="" class="form-control" required>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}" @if($category->id == $recipe->id) selected @endif </option>{{ucfirst($category->name)}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="textarea-input">Description</label>
                        <div class="">
                            <textarea
                                class="form-control"
                                name="description"
                                rows="30"
                                placeholder="Description of recipe"
                            >{!!$recipe->description!!}</textarea>
                        </div>
                    </div>
                    <div class="form-group float-right">
                        <button class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection @section('scripts')
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace("description", {
        filebrowserUploadUrl:
            "{{route('admin.recipes.upload-ck', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: "form",
    });
</script>
@endsection
