@extends('site.layout.site')

@section('content')

	{{-- $banner --}}
	{{-- @if (isset($carrossel))
		@include('site.components.banner_blog_details', ['banner' => $carrossel])
	@endif --}}

	{{-- SECTION about --}}
	@if(isset($pageComponents))
			@foreach ($pageComponents->contentSection as $contentSection)
				@include("site.components.{$contentSection->component}", [ 'pageData' => $contentSection ])
			@endforeach
	@endif

@endsection
