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
            <form method="post" action="{{route("makaleler.update",$posts->id)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>Makale Başlığı</label>
                    <input type="text" name="title" class="form-control" value="{{$posts->title}}" required></input>
                </div>
                <div class="form-group">
                    <label>Makale Fotoğrafı</label>
                    <br>
                    <img src="{{asset($posts->image_url)}}" class="rounded" width="400">
                    <input type="file" name="image" class="form-control"  ></input>
                </div>
                <div class="form-group">
                    <label>Makale İçeriği</label>
                    <textarea id="editor" name="description" class="form-control"  rows="4" {!! $posts->description !!} </textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block" >Makaleyi Düzenle</button>
                </div>
            </form>

        </div>
    </div>

@endsection()
