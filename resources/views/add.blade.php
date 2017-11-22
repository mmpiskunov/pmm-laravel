<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add user</title>
    </head>
    <body>
        <form action="{{url('profile')}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="_method" value="POST">
            <p>Your name:
            <input type="text" name="user_name" id="user_name">
            <input type="submit" value="Add">
        </form>
    </body>
</html>
