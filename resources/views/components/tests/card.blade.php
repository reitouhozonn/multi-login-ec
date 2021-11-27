@props([
    'title' => '初期タイトル',
    'content' => '本文初期値',
    'message' => 'message',
])

<div {{ $attributes->merge([
    'class' => 'border-2 shadow-mb w-1/4 p-2'
]) }} >
    <div>{{ $title }}</div>
    <div>画像</div>
    <div>{{ $content }}</div>
    <div>{{ $message }}</div>
</div>
