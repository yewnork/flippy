{{$coinFlip->result}}

<form action="{{ route('coinFlipMakeSeries', $coinFlip->id) }}" method="post">
{{ csrf_field() }}
<input type="submit" name="flip" value="Create flip series"/>