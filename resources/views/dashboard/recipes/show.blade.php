@extends('layouts.dashboard') @section('subheader') @endsection
@section('content')
<div class="row">
    <div
        class="col-md-12 my-3 bg-white rounded shadow-md p-3 flex justify-between items-center"
    >
        <p class="h3">{{ucfirst($recipe->title)}}
            <span class="badge bg-yellow-300 text-yellow-600">
                {{ucfirst($recipe->category->name)}}
            </span>
        </p>
        <div class="save">
            <a
                href="{{ route('admin.recipes.index') }}"
                class="btn btn-primary btn-sm"
            >
                <i class="mdi mdi-food"></i>
                Recipes</a
            >
        </div>
    </div>

    <div class="col-md-12 p-3 card">
        {!!$recipe->description!!}
    </div>


</div>
@endsection @section('scripts')
