<body onload="xyz()">
@extends('admin.adminHome')
@section('content') 


<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-4">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Basic Form</h6>
                            <form action="{{url('/admin/insert-team')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="nama" value="{{  old('nama') }}">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="position" class="form-label">Position</label>
                                    <input type="text" class="form-control" name="position" id="position" value="{{  old('position') }}">
                                </div>
                                <div class="mb-3">
                                <label for="picture" class="form-label">Upload Picture</label>
                                    <input class="form-control" type="file" nama="picture" id="picture">
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>


<script>
    function xyz() {
        var x = document.getElementsByClassName("nav-link")[3];
        x.classList.add("active");
    };
</script>


 @endsection    