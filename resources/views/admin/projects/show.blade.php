@extends('layouts.app')

@section('content')
    <section>
      <div class="container">
        <h1>{{ $project->title }}</h1>
        @if($project->type)
        <p>
          <strong>
          {{ $project->type->name }}
          </strong>
        </p>
        @endif
        <p>{{ $project->slug }}</p>
        <p>{{ $project->created_at->format('d/m/Y') }}</p>
      </div>
    </section>
    <section>
      <div class="container">
        {!! $project->description !!}
      </div>
    </section>
@endsection