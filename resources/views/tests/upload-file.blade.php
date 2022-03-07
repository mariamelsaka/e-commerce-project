@extends('common.master')

@section('title')
    Upload File
@endsection


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                @include('common.errors')

                <div class="card shadow" style="margin-top: 200px">
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group mb-3">
                                <input name="file" type="file" class="form-control" id="inputGroupFile02">
                                <button class="btn btn-success" type="submit">
                                    Upload
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
