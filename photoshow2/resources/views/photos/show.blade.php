@extends('layouts.app')

@section('content')
<h3>{{$photo->title}}</h3>
 <p>{{$photo->description}}</p>
 <a href="/photoshow2/public/albums/{{$photo->album_id}}">Back To Gallaery</a>

 <hr>
 <img src="/photoshow2/storage/app/public/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
 <br/><br/>
 {!!Form::open(['action'=>['PhotosController@destroy', $photo->id], 'method' => 'POST'])!!}
 {{Form::hidden('_method', 'DELETE')}}
 {{Form::submit('delete Photo', ['class'=> 'button alert'])}}
  {!!Form::close()!!}
  <hr>
  <small>Size: {{$photo->size}}</small>
 @endsection
