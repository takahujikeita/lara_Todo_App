<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
  </head>
</head>

<body>
{{-- バランス確認用 --}}
  {{-- <head>
    <div class="header">
      <div class="header-left">
        <h1>ToDo</h1>
      </div>
      <div class="header-right">
        <div><span></span><span></span><span></span></div>
      </div>
      <hr>
    </div>
  </head> --}}
{{-- バランス確認用 --}}

  <main>
    <div class="container">
      <div>
        <form action="{{ route('task.update', $task->id) }}" method="POST" class="row justify-content-center">
          <h2 class="text-center mt-3 mb-5">EDIT</h2>
          @csrf
          @method('put')

          <div class="col-md-10">
            <label for="#" class="form-label fs-3" >title</label>
            <input type="text" name="title" class="form-control form-control-lg border-dark-subtle" id="formGroupExampleInput" value="{{ $task->title }}">
            <small><p class="text-end">30文字以内</p></small>
          </div>

          <div class="col-md-10">
            <label for="#" class="form-label fs-3">contents</label>
            <textarea name="contents" class="form-control form-control-lg border-dark-subtle" id="exampleFormControlTextarea1" rows="5">{{ old('contents', $task->contents) }}</textarea>
            <small><p class="text-end">140文字以内</p></small>
          </div>
          <dic class="col-md-10">
            <div class="row mb-5">
              <label for="#" class="form-label fs-3">image</label>
              <div class="col-md-7">
                <input type="file" name="image_at" class="form-control form-control-lg border-dark-subtle">
              </div>
              <div class="col-md-5">
                <img src="{{ $task->image_at }}" class="form-control form-control-lg img-thumbnail text-primary-emphasis border-dark-subtle" alt="現在設定中の画像">
              </div>
            </div>
          </dic>

          <div class="d-md-flex justify-content-md-center mb-5">
            <div class="col-md-3">
              <input type="submit" class="form-control btn btn-primary btn-lg" value="update" action="{{ route('task.update', $task->id) }}"> 
            </div>
          </div>
        </form>

        <div class="d-md-flex justify-content-between mb-5">
          <form>
            <div class="col-md-15">
              <input type="button" class="form-control btn btn-outline-secondary" value="＜ cancel" action="#"> 
            </div>
          </form>

          <form action="{{ route('task.destroy', $task->id) }}" method="POST">
            @csrf
            @method('delete')
              <div class="col-md-15">
                <input type="submit" class="btn-destroy btn btn-outline-danger" value="X delete" onclick='return confirm("Really？");'>
              </div>
          </form>
          
        </div>
      </div>
    </div>
  </main>
  {{-- <footer>

    <div><small><p>&copy;2024_77期</p></small></div>
  </footer> --}}

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>