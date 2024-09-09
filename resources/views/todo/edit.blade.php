<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <form action="">
        @csrf
        @method('put')
        <div class="mb-3">
          <label for="#" class="form-label" >title</label>
          <input type="text" class="form-control" id="formGroupExampleInput" value="">
          <small>30文字以内</small>
        </div>
        <div class="mb-3">
          <label for="#" class="form-label">contents</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value=""></textarea>
          <small>140文字以内</small>
        </div>
        <div class="row g-3">
          <div class="col">
            <input type="file" class="form-control" placeholder="First name" aria-label="First name">
          </div>
          <div class="col">
            <input type="image" class="form-control" value="" name="image" alt="現在設定中の画像">
          </div>
        </div>
        <div class="row g-3">
          <div class="col">
            <input type="submit" class="form-control" value="update" action="#"> 
          </div>
          <div class="col">
            <input type="button" class="form-control" value="delete" action="#">
          </div>
        </div>
      </form>
    </div>
  </div>
  

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>