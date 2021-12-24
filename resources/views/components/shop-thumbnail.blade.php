<div>
    @if (empty($filename))
        <img src="{{ asset('images/dummy-200x200.png') }}" alt="img">
    @else
        <img src="{{ asset('storage/shops/' . $filename) }}" alt="img">
    @endif
</div>
