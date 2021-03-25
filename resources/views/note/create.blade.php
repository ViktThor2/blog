@extends('layout.app')

@section('content')

<div class="w-50 mt-5" style="margin:auto">

  <!--Note Form -->
  <form class="mt-2 mb-2" method="post"
        action="{{ route('note.store') }}" >
        @csrf

        <h4 class="modal-title mb-2">Új bejegyzés</h4>

        <!-- Name input -->
        <div class="input-group mb-3">
          <span class="input-group-text">Név :</span>
            <input type="text" class="form-control"
              name="name" />
        </div>

        <!-- Desc input  -->
        <textarea class="form-control" name="desc" rows="4"></textarea>

        <div class="form-group mt-3">
          <label>Adja hozzá a kívánt címkét</label>
          <select  name="tags[]" multiple class="form-control" >
            @foreach($tags as $tag)
              <option value="{{$tag->id}}">{{$tag->name}}</option>
            @endforeach
          </select>
        </div>

        <!-- Save button -->
        <button class="btn btn-primary btn-block mt-3" type="submit">
           Kész
         </button>

  </form>
</div>


@stop
