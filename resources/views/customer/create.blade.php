@extends('layouts.app')
@section('title', 'お客新規')
@section('content')
    <h1>お客新規</h1>
    <!-- 休日入力フォーム -->
    <form method="POST" action="/customer/create">
        {{csrf_field()}} 
    <div class="form-group">
        <label class="col-md-2">氏名</label>
            <div class="col-md-10">
                <input type="text" name="name" class="form-control" id="name" value="{{$data->name}}">
            </div>
    </div>
    <div class="form-group">
        <label class="col-md-2">年齢</label>
            <div class="col-md-10">
                <input type="text" name="age" class="form-control" id="age" value="{{$data->age}}">
            </div>
    </div>
    <div class="form-group">
        <label class="col-md-2">生年月日</label>
            <div class="col-md-10">
                <input type="text" name="birth" class="form-control" id="birth" value="{{$data->birth}}">
            </div>
    </div>
    <div class="form-group">
        <label class="col-md-2">住所</label>
            <div class="col-md-10">
                <input type="text" name="address" class="form-control" id="address" value="{{$data->address}}">
            </div>
    </div>
    <div class="form-group">
        <label class="col-md-2">電話</label>
            <div class="col-md-10">
                <input type="text" name="tel" class="form-control" id="tel" value="{{$data->tel}}">
            </div>
    </div>
    <div class="form-group">
        <label class="col-md-2">備考</label>
            <div class="col-md-10">
                <input type="text" name="memo" class="form-control" id="memo" value="{{$data->memo}}">
            </div>
    </div>
    
    
    <button type="submit" class="btn btn-primary">登録</button> 
    <input type="hidden" name="id" value="{{$data->id}}">
    </form>
    
@endsection

