<x-layouts.admin>


    {{--    @dd($community)--}}
    <div class="float-end">
        <a href="{{route('admin.community.index')}}">Back to Community Page</a>
    </div>
    <h2>Edit Community item - {{$community->title}}</h2>
    <hr>


    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Image</h5>
            <div class="col-12">
                @if( $community->background_image )
                    <div class="row">
                        <div class="col-8">
                            {{  $community->background_image  }}
                        </div>
                        <div class="col-4 text-end">
                            <a href="" class="btn btn-danger disabled">WIP: Delete image</a>
                        </div>
                    </div>
                @else
                    <div class="form-floating mb-3">
                        @error('op_cover_img')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <input type="file" class="form-control @error('op_cover_img') is-invalid @enderror" id="background_image" placeholder="background image" name="background_image" value="{{ $community->background_image }}">
                        <label for="background_image">background_image - TODO: add image Uploader</label>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <form action="{{route('admin.community.update', ['community' => $community])}}" method="post" class="needs-validation" novalidate>
        {{ method_field('PUT') }}
        @csrf
        <div class="card shadow-md">
            <div class="card-body ">
                <div class="row">
                    <div class="col-12">
                        @if ($errors->any())

                            <div class="alert alert-danger">
                                Error with inputs

                                <ul>
                                    @foreach($errors->all() as $message)
                                        <li> {{$message}}</li>
                                    @endforeach
                                </ul>

                            </div>

                        @endif
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title" name="title" value="{{ $community->title }}">
                                    <label for="title" class="form-label">Entry title:</label>
                                    @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-4">
                        {{-- Layout selection:--}}
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Layout:</span>


                            <select class="form-select form-select @error('layout') is-invalid @enderror" aria-label="layout" name="layout" id="layout">
                                <option selected>Select layout</option>

                                @foreach($layouts as $layout)

                                    <option value="{{ $layout }}" @selected($community->layout == $layout)>
                                        {{ $layout }}
                                    </option>
                                @endforeach

                            </select>


                            @error('layout')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Priority --}}
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control @error('priority') is-invalid @enderror" id="priority" placeholder="Priority" name="priority" value="{{ $community->priority }}">
                            <label for="priority" class="form-label">Priority:</label>
                            @error('priority')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Is Pinned: --}}
                        <div class="form-check @error('is_pinned') is-invalid @enderror">
                            <input class="form-check-input" type="checkbox" value="1" id="is_pinned" name="is_pinned" @checked($community->is_pinned == true)>
                            <label class="form-check-label" for="is_pinned">
                                Pinned
                            </label>
                            @error('is_pinned')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="content">Content:</label>
                        @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <textarea class="tmce @error('content') is-invalid @enderror" id="content" name="content">
                            {{ $community->content  }}
                        </textarea>
                    </div>

                </div>

            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</x-layouts.admin>