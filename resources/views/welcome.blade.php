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
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">AJAX NOTIFICATION</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="{{asset('/postComment')}}">Post Commnet</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="label label-danger unread_notifications" ></span><span class="glyphicon glyphicon-globe" style="font-size: 18px;"></span>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">

                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div>
        <br><br>
        <div class="col-md-1"></div>
        <div class="col-md-8">

            <table class="table ">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Subject</th>
                    <th>Comment</th>
                </tr>
                </thead>
                <tbody id="table_body">

                </tbody>
            </table>
        </div>
    </div>
    <script src="js/notification/noti.js"></script>
    </body>
</html>



