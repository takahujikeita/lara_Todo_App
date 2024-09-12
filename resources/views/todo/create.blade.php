<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('css/edit.css') }}"> --}}

</head>
<body>
@extends('layouts.header')
@section('contents')
<main>
  <div class="container">
    <div>
    <form action=" {{ route('task.store') }} " method="POST" class="row justify-content-center" enctype="multipart/form-data">
        @csrf

        <h2 class="text-center mt-3 mb-5">投稿してみよう！</h2>
        <div class="col-md-10">
          <label for="#" class="form-label fs-3" >title</label>
          <input type="text" class="form-control form-control-lg border-dark-subtle" id="formGroupExampleInput" value="" name="title">
          <small><p class="text-end">30文字以内</p></small>
        </div>
        <div class="col-md-10">
          <label for="#" class="form-label fs-3">contents</label>
          <textarea class="form-control form-control-lg border-dark-subtle" id="exampleFormControlTextarea1" rows="5" value="" name="contents"></textarea>
          <small><p class="text-end">140文字以内</p></small>
        </div>
        <dic class="col-md-10">
          <div class="row mb-5">
            <label for="#" class="form-label fs-3" >image</label>
            <div class="col-md-7">
              <input type="file" class="form-control form-control-lg border-dark-subtle" name="image_at" required>
            </div>
            
          </div>
        </dic>
        <div class="d-md-flex justify-content-md-center mb-5">
          <div class="col-md-3">
            <button type="submit" class="form-control btn btn-primary btn-lg">新規投稿作成</button>
          </div>
        </div>
      <div class="d-md-flex justify-content-between mb-5">
          <div class="col-md-15">
            <a href="{{route('task.index')}}">
              <input type="button" class="form-control btn btn-outline-secondary" value="＜ cancel" action="{{route('task.index')}}">
            </a>
          </div>
    </form>
    </div>
    </div>
  </div>
</main>
@endsection
</body>
</html>