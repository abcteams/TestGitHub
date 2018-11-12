<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <title>AJAX Test</title>
</head>
<body>
<h1 style="font-weight: bold;margin-left: 100px;">Post your comment here</h1>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-6 ">
        <form id="comment_form">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">subject</label>
                <input type="text" class="form-control" id="comment_subject"  placeholder="Comment Subject">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Comment</label>
                <textarea name="comment_text" class="form-control" id="comment_text" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" id="submit" name="submit" class="btn btn-primary">post comment</button>
            <a href="{{url()->previous()}}" class="btn btn-success" style="float: right;">Go Back</a>
        </form>
    </div>
</div>
<div>
</div>
<script src="js/notification/noti.js"></script>
</body>
</html>