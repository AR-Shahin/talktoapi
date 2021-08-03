@extends('layouts.app')

@section('content')
  <!-- home -->
  <section id="home">
      <div class="container" style="padding-top: 55px;">
          <h3>Hello Developers!</h3>
          <p class="text-justify">{{ env('APP_NAME') }} is a Restfull API Application. It provide you real life API experience. If you are a Frontend Developer, welcome to here. You can create SPA Application (ReactJS, VueJS, AngularJS, SvelteJS App etc) using {{ env('APP_NAME') }} service. You can see the documentation below.</p>
          <p class="alert alert-primary text-justify">It's an open source application. You can see the application code on <a href="https://github.com/abdulmajidcse/talktoapi" class="badge bg-danger text-light text-decoration-none" target="_blank">Github</a> and also you can contribute, if you want! If you get any errors or issues, please send me a <a href="https://m.me/abdulmajidcse" class="badge bg-danger text-light text-decoration-none" target="_blank">message</a>.</p>
          <p class="text-justify">So, let's go to see how to use the Application.</p>
      </div>
  </section>

  @include('layouts.includes.todo')
  @include('layouts.includes.authentication')
  @include('layouts.includes.category')
  @include('layouts.includes.post')
@endsection