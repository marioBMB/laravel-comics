
@dump($comics);

@foreach($comics as $index => $keys)
<div class="banner-image">
    <img src="{{$keys['thumb']}}" alt="{{$keys['series']}}">
    <span>{{$keys['series']}}</span>
</div>
@endforeach