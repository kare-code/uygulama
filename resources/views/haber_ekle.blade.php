@extends('layouts.app')
@section('title')
    Haber Ekle
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Haber Ekle</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="post" action="haber-ekle" >
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <!--<input type="hidden" name="user_id" value="{{Auth::user()->id}}"> -->



                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="baslik">Haber Başlığı</label>
                                    <div class="col-md-6">
                                        <input id="baslik" name="baslik" type="text" placeholder="Haber Başlığı"
                                               class="form-control input-md" required="">

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="aciklama">Açıklama</label>
                                    <div class="col-md-8">
                                        <input id="aciklama" name="aciklama" type="text" placeholder="Açıklama"
                                               class="form-control input-md">

                                    </div>
                                </div>

                                <!-- Textarea -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="icerik">İçerik</label>
                                    <div class="col-md-4">
                                        <textarea class="form-control" id="icerik" name="icerik"></textarea>
                                    </div>
                                </div>

                                <!-- File Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="resim">Yükle</label>
                                    <div class="col-md-4">
                                        <input id="resim" name="resim" class="input-file" type="file">
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Kaydet">Kaydet</label>
                                    <div class="col-md-4">
                                        <button type="submit" id="Kaydet" name="Kaydet" class="btn btn-primary">Kaydet
                                        </button>
                                    </div>
                                </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
