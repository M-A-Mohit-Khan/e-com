<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
</head>
<body>
    <div class="card-body">
        
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-details')}}">
       @csrf
        <div class="form-group">
          <label>Email</label>
          <input type="email" id="email" name="email" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>Phone</label>
          <input name="phone" id="phone" name="phone" class="form-control" required=""></input>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</body>
</html>