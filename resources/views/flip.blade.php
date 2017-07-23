
{{ $flip_result }}
<form action="/" method="post">
{{ csrf_field() }}
<input type="submit" name="flip" value="Flip!"/>
</form>
@foreach ($flips as $flip)
<p><a href="{{ URL::to('flip',$flip->id) }}">{{$flip->result}}</a></p>
@endforeach