
HOLA NEGOCIOS TECNOLOGICOS


<br><br>

<h1>{{$article->title}}</h1>



<hr>
{{$article -> content}}	
</hr>
<hr>
{{$article ->user -> name}} | {{$article ->category	->name}} |

@foreach($article ->tags as $tag)
{{$tag ->name}}

@endforeach

</hr>
<br>
@for ($i=0; $i<=5; $i++)
{{$i}}

@endfor

@if (1==1)
{{"son iguales"}}
@endif
