@extends('layouts.dashboard') @section('subheader') @endsection
@section('content')
<div
    wire:ignore.self
    class="modal fade"
    id="findRecipeModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Find API recipe
                </h5>
                <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                >
                    <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.meal.search') }}" method="post">
                    <div class="flex space-x-2">
                        <input
                            type="text"
                            name="term"
                            class="form-control w-1/3"
                            placeholder="Enter search term"
                            required
                        />
                        <select name="category" id="" class="form-control"> 
                            @foreach(config('food.periods') as $cat)
                            <option value="{{$cat['name']}}">{{ucfirst($cat['name'])}}</option>
                            @endforeach
                        </select>
                        <button class="btn btn-success mx-3">Go</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-secondary close-btn"
                    data-dismiss="modal"
                >
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div
        class="bg-white w-full rounded space-y-4 shadow-md p-3 flex flex-col md:flex-row md:justify-between items-center"
    >
        <div class="find">
            <form action="{{ route('admin.meal.find') }}" method="post">
                <div class="flex w-full items-center space-x-4">
                    <input
                        type="text"
                        name="term"
                        class="form-control"
                        placeholder="Search recipes"
                        required
                    />
                    <button class="w-1/3 btn btn-success">
                        <i class="mdi mdi-magnify"></i>
                        Go
                    </button>
                </div>
            </form>
        </div>

        <div class="save">
            <button
                type="button"
                class="btn btn-primary btn-sm float-right"
                data-toggle="modal"
                data-target="#findRecipeModal"
            >
                <i class="mdi mdi-plus"></i>
                New
            </button>
        </div>
    </div>

    <div class="row my-3 w-5/6 mx-auto md:w-full">
        @foreach($meals as $meal)
        <div class="col-md-3">
            <div class="card p-3 ">
                <div class="flex flex-row w-full items-center space-x-2">
                    <div class="w-1/4">
                        <img
                            src="{{$meal->image}}"
                            alt=""
                            class="w-8 h-8 rounded-full object-cover"
                        />
                    </div>
                    <div class="body">
                        <p class="font-bold text-xs">
                            {{$meal->title}}
                        </p>
                    </div>
                    <div class="caret">
                        <div class="btn-group">
                            <button
                                class="btn btn-transparent dropdown-toggle p-0 text-dark"
                                type="button"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                <svg class="c-icon">
                                    <use
                                        xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"
                                    ></use>
                                </svg>
                            </button>
                            <div
                                class="dropdown-menu dropdown-menu-right text-center"
                            >
                                @foreach(config('food.periods') as $period)
                                <a
                                    class="dropdown-item text-xs"
                                    href="{{route('admin.meal.updateCategory', ['meal'=>$meal->id, 'category' => $period['name']])}}"
                                >
                                    <i
                                        class="mdi mdi-{{
                                            $period['icon']
                                        }} mr-2"
                                    ></i>
                                    {{ ucfirst($period["name"]) }}
                                </a>
                                <hr class="my-0" />
                                @endforeach
                                <!--  -->
                                <!-- <hr class="my-0"> -->
                                <a
                                    class="dropdown-item text-xs text-danger"
                                    href="{{route('admin.meal.delete', ['meal'=>$meal->id])}}"
                                >
                                    <i class="mdi mdi-delete mr-2"></i>
                                    Delete
                                </a>
                                <!-- <hr class="my-0"> -->
                            </div>
                            <hr />
                        </div>
                    </div>
                </div>
                <div class="flex items-center mt-3">
                    <span class="badge badge-success">
                        {{ucfirst($meal->category)}}
                    </span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{$meals->withQueryString()->links()}}
</div>
@endsection @section('scripts')
