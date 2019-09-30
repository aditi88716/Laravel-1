

@unless($names)
	array has no value
@endunless

<br>
{{$name}}
<br>

@foreach($names as $name)
	{{$name}}
@endforeach
<br>


printr({{$names}})