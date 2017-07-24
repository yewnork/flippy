@foreach ($coinFlipsSeries->coin_flips as $coinFlip)
<p>{{$coinFlip->result}}</p>
@endforeach

<form action="{{ route('createCoinFlipOnSeries', $coinFlipsSeries->id) }}" method="post">
{{ csrf_field() }}
<input type="submit" name="flip" value="Add Flip to Series!"/>
</form>