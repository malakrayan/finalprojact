<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello, {{$name}}</h1>
       <form method="POST" action="/about">
    @csrf
    <input type="text" name="name"><br><br>
    <select name="department" id="department">
        @foreach($departments as $kay=> $department)
        <option value="{{$kay}}">{{$department}}</option>
        @endforeach
    </select><br><br>
    <button type="submit">Submit</button>
</form>
    </form>
</body>
</html>