<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>token</title>
</head>
<body>
<div class="card-body">
        
        <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('verify-token')}}">
         @csrf
          <div class="form-group">
            <label>Token</label>
            <input type="token" id="token" name="token" class="form-control" required="">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
</body>
</html>