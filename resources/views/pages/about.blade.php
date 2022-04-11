@extends('layouts.simple')

@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="https://pixelcave.com/css/app.css?id=aaabe433c33b4514814658ffb07305dc">
@endsection

@section('js_after')
    <!-- jQuery (required for DataTables plugin) -->
    <script src="{{ asset('js/lib/jquery.min.js') }}"></script>


    <script defer src='https://pixelcave.com/js/alpine.js?id=252f6744cac6ca6a61c471d51468b878'></script>
    <script src="https://pixelcave.com/js/fe/app.js?id=73acdda5f14d4d4795662872696ca0db" gapi_processed="true"></script>

@endsection

@section('content')
<br>
<article>
    <div class="bg-white">
      <div class="container xl:max-w-6xl mx-auto px-4 pt-12 pb-8 lg:px-8 lg:pt-20 lg:pb-16 text-center">
        <h1 class="text-2xl font-bold mb-1">
          About
        </h1>
        <h2 class="text-lg font-medium text-gray-500 leading-relaxed">
          Who is behind pixelcave?
        </h2>
        <img class="mx-auto mt-5 -mb-10 lg:-mb-16" src="https://pixelcave.com/media/site/pixelcave_team.jpg" alt="pixelcave team" style="width: 250px;">
      </div>
    </div>
    <div class="container xl:max-w-6xl mx-auto px-4 lg:px-10 lg:py-16">
      <div class="prose prose-blue mx-auto">
        <p>
          We are a passionate team of two who are also partners in life. We love crafting products that can make your life easier, provide value and help you succeed!
        </p>
        <p>
          If you are working with a client, thinking about starting a new project, refreshing an old one or building the next startup success story, then the resources we build will come really handy and help you design and code the UI of your project.
        </p>
        <p>
          We can’t wait to see what you’ll build next. Feel free to <a href="https://pixelcave.com#subscribe">join us</a> and get our insights, work progress, news and freebies, directly to your inbox. Also, be sure to <a href="https://pixelcave.com/contact">get in touch</a> in case you would like to say hi.
        </p>
        <p class="font-medium text-center">
          You are awesome, craft with
          <svg class="hi-solid hi-heart inline-block w-5 h-5 text-red-500 align-text-bottom" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
          something amazing!
        </p>
      </div>
    </div>
  </article>
@endsection
