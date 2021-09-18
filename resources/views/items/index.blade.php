<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>
        <b>出品商品一覧</b>
    </h1>
    <ul>
        @foreach ($items as $item)
            <a href="/items/{{ $item->id }}">
                <li>{{ $item->name }}</li>
            </a>
        @endforeach
    </ul>
</body>
</html>