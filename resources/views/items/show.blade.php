<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>
        <b>商品名 : {{ $item->name }}</b>
    </p>
    <p>
        <b>商品詳細 : {{ $item->description }}</b>
    </p>
    <p>
        <b>価格 : {{ $item->price }}</b>
    </p>
    <p>
        <b>出品者 : {{ $item->seller }}</b>
    </p>
    <p>
        <b>電子メール : {{ $item->email }}</b>
    </p>
    <p>
        <img src="{{ $item->image_url }}" alt="">
    </p>
    <a href="/items/{{ $item->id }}/edit">編集する</a>
</body>
</html>