
{{ $flip->result }}
<form action="{{ route('coinFlip') }}" method="post">
{{ csrf_field() }}
<input type="submit" name="flip" value="Flip!"/>
</form>
@foreach ($flips as $flip)
<?php $series_url = $flip->inSeries() ? route('coinFlipsSeries',$flip->coin_flips_series_id) : false; ?>
<p><a href="{{ URL::to('flip',$flip->id) }}">{{$flip->result}}</a> - <a href="{{$series_url}}">{{ $series_url }}</a></p>
@endforeach