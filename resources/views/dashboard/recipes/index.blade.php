@extends('layouts.dashboard') @section('subheader') @endsection
@section('content')
<div class="row">
    <div class="col-md-12 my-3 bg-white rounded shadow-md p-3 flex justify-between items-center">
        <p class="h3">Recipes</p>
        <div class="save">
            <a href="{{ route('admin.recipes.create') }}" class="btn btn-primary btn-sm">
                <i class="mdi mdi-plus"></i>
                Create new</a>
        </div>
    </div>

    @foreach($recipes as $recipe)
    <div class="col-md-6">
        <div class="flex p-3 bg-white shadow-md my-2 flex-col justify-center">
            <div class="image mx-auto m-1">
                <img src="https://picsum.photos/80" alt="" class="rounded-full" />
            </div>
            <div class="body max-h-32 p-3 overflow-hidden overflow-ellipsis">
                <a href="{{route('admin.recipes.show', $recipe->slug)}}" class="text-sm text-center block text-primary font-bold uppercase">
                    {{$recipe->title}}
                </a>

                <div class="text-muted text-xs recipe-content">
                    {!!$recipe->description!!}
                </div>
            </div>
            <div class="readmore mb-2 px-3 py-1">
                <a href="{{route('admin.recipes.show', $recipe->slug)}}" class="text-red-500 text-xs float-right">...more</a>
            </div>
            <div class="footer flex items-center justify-between">
                <div class="stats flex space-x-2">
                    <div class=" ">
                        <a href="#" class=" bg-yellow-200 text-yellow-600 badge font-normal">
                            <i class="mdi mdi-shape font-bold"></i>
                            {{ucfirst($recipe->category->name)}}
                        </a>
                    </div>
                    <!-- <div class="bg-yellow-100 text-yellow-500 badge font-normal">
                        <i class="cil-star mr-1 font-bold"></i>
                        89 claps
                    </div> -->
                </div>
                <div class="space-x-2">
                    <a href="{{route('admin.recipes.edit', $recipe->slug    )}}" class="py-1 px-2 rounded-full hover:decoration-none text-xs shadow-md hover:bg-purple-900 text-white bg-purple-700">
                        <i class="mdi mdi-playlist-edit"></i>
                        Edit
                    </a>
                    <a href="#" class="py-1 px-2 rounded-full shadow-md hover:bg-red-700 text-white bg-red-500">
                        <i class="mdi mdi-trash-can"></i>
                        Delete
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection @section('scripts')