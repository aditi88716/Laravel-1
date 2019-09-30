{{$name}}

<br>

{{strlen($name)}}

<br>

@if(strlen($name)>5)
	STRING IS >0



@elseif(strlen($name)>5 && strlen($name)<10)
	STRING IS WITH IN 5 TO 10



@elseif(strlen($name)>10)
	STRING IS >10



@else
	String has length is 0



@endif
