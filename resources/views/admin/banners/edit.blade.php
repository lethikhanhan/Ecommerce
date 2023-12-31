@extends('admin.admin_main')
@section('main')
    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p class="text-danger">{{ $error }}</p>
        @endforeach
    @endif --}}
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Update Banner</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('banner.edit', ['id' => $detail->id]) }}" data-toggle="validator"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Banner Title</label>
                                        <input type="text" name="banner_title" class="form-control"
                                            value="{{ $detail->banner_title }}">
                                        @error('banner_title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Banner Url</label>
                                        <input type="text" name="banner_url" class="form-control"
                                            value="{{ $detail->banner_url }}">
                                        @error('banner_url')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Banner Image</label> <br>
                                        <img id="image_preview"
                                        src="{{ $detail->banner_image ? Storage::url($detail->banner_image) : 'https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg' }}"
                                        alt="" width="100px" height="100px">
                                        <input id="image" type="file"
                                            class=" image-file @error('banner_image') is-invalid @enderror"
                                            name="category_image" accept="image/*"><br>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Update</button>
                            <button type="reset" class="btn btn-danger mr-2">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
@endsection
