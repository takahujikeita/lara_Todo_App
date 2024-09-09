<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">

</head>
<body>

    <div class="container mt-5">
        <div><h1>投稿してみよう！</h1></div>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form action="#" method="POST">
        <div class="form-group">
          <label>タイトル</label>
          <input type="text" class="form-control" placeholder="タイトルを入力して下さい" name="title">
        </div>
        <div class="form-group">
          <label>内容</label>
          <textarea class="form-control" placeholder="内容" rows="5" name="body">
                    </textarea>
        </div>
        <button type="submit" class="btn btn-primary">作成</button>
      </form>
  </div>
</div>
</div>

</body>
</html>