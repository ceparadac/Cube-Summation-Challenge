<!DOCTYPE html>
<html>
<head>
    <title>Solution Cube Summation Challenge By Cristian Parada</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Cube Summation Challenge</a>
        </div>
    </div><!-- /.container-fluid -->
</nav>
<div class="container" id="main">
    <h3 class="text-primary text-center">Please, Insert the lines to run the program:</h3>
    <div class="col-md-8 text-center col-md-offset-2">
        <form action="{{route('cube.execute')}}" method="POST" name="formCreate" id="inputForm" role="form">
            <div class="form-group">
                <label for="input">Input:</label>
                {{csrf_field()}}
                <textarea class="form-control" rows="10" cols="10" id="input" name="input" form="inputForm"
                          required></textarea>
            </div>
            <div class="text-center">
                <button type="button" onclick="config();" class="btn btn-primary">Execute!</button>
            </div>
        </form>
        <br><br>
        <div class="form-group">
            <label for="output">Output:</label>
            <textarea class="form-control" rows="5" cols="10" id="output" name="output" value=""
                      readonly="true"></textarea>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/requestManager.js"></script>
</body>
</html>