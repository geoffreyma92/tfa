@extends('layouts.main')

@section('content')
  <h1>Your Items</h1>
  <hr/>
  <ul>
    @foreach($items as $item)
      <li>
        {{Form::open()}}
          <div class="checkbox">
            <input type="checkbox" name="item" value="{{$item->id}}" {{ $item->done ? 'checked' }}> {{$item->name}}
          </div>
        {{Form::close()}}
      </li>
    @endforeach
  </ul>
@stop