<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check and Render Posts</title>
</head>

<body>
    <div class="post_with_checked">
        Những bài post sau đã được check:
        @foreach ($posts as $post)
            @if ($post->is_check == true)
                <ul>
                    <li>{{$post->name}}</li>
                </ul>
            @endif
        @endforeach
    </div>
    <div class="post_without_checked">
        Những bài post sau chưa được check:
        @foreach ($posts as $post)
            @if ($post->is_check !== true)
                <ul>
                    <li>{{$post->name}}</li>
                </ul>
            @endif
        @endforeach
    </div>
</body>

</html>