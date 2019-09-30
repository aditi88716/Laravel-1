<h1>hello</h1>

@isset($name)
	@empty($name)
		VALUE IS EMPTY
	@endempty
	{{$name}}
@endisset