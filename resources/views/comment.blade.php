<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('abc') }}" method="post">
    @csrf
        <label for="">comment</label>
        <input type="text" name="pc" id="">
        <input type="submit" value="commenter">
    </form>

    <hr>

    @if(isset($comments))
    @foreach($comments as $comment)
    
    <p>{{ $comment->comment }}</p>

    @endforeach
    @endif
    
</body>
</html>