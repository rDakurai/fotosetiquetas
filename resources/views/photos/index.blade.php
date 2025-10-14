@foreach($photos as $photo)
<div> <h3>{{ $photo->title }}</h3>
<img src="{{ $photo->url }}" width="200">
<p>Etiquetas:
@foreach($photo->tags as $tag)
<span>{{ $tag->name }}</span>
@endforeach </p>
</div>
@endforeach