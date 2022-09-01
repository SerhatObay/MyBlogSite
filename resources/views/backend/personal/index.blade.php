@extends('backend.layouts.app')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ayarlar</h6>
        </div>
        <div class="card-body">
                <form method="post" action="{{route('personal.update')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6" >
                            <div class="form-group">
                                <label>Site Sahibi</label>
                                <input type="text" name="name" required class="form-control" value="{{$personal->name}}">
                            </div>
                        </div>
                        <div class="col-md-6" >
                            <div class="form-group">
                                <label>Ünvanı</label>
                                <input type="text" name="unvan" required class="form-control" value="{{$personal->shortAbout}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" >
                            <div class="form-group">
                                <label>Twitter</label>
                                <input type="text" name="twitter" required class="form-control" value="{{$personal->twitter}}">
                            </div>
                        </div>
                        <div class="col-md-6" >
                            <div class="form-group">
                                <label>İnstagram</label>
                                <input type="text" name="instagram" required class="form-control" value="{{$personal->instagram}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" >
                            <div class="form-group">
                                <label>Linkedin</label>
                                <input type="text" name="linkedin" required class="form-control" value="{{$personal->linkedin}}">
                            </div>
                        </div>
                        <div class="col-md-6" >
                            <div class="form-group">
                                <label>Github</label>
                                <input type="text" name="github" required class="form-control" value="{{$personal->github}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" >
                            <div class="form-group">
                                <label>Hakkımda Başlık</label>
                                <input type="text" name="hakkimdabaslik" required class="form-control" value="{{$personal->title}}">
                            </div>
                        </div>
                        <div class="col-md-6" >
                            <div class="form-group">
                                <label>Hakkımda</label>
                                <input type="text" name="hakkimda" required class="form-control" value="{{$personal->about}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit " class="btn btn-block btn-md btn-success">Güncelle</button>
                    </div>

                </form>
        </div>
    </div>


@endsection()
