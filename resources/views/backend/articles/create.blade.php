@extends('backend.layouts.app')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">

        </div>
        <div class="card-body">
            @if($errors ->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach


                </div>
            @endif
            <form method="post" action="{{route("makaleler.store")}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Makale Başlığı</label>
                    <input type="text" name="title" class="form-control" required></input>
                </div>
                <div class="form-group">
                    <label>Makale Fotoğrafı</label>
                    <input type="file" name="image" class="form-control" required></input>
                </div>
                <div class="form-group">
                    <label>Makale İçeriği</label>
                    <textarea id="editor" name="description" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Makaleyi Oluştur</button>
                </div>
            </form>

        </div>
    </div>
@endsection()
