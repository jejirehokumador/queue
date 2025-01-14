@extends('vendor.installer.layouts.master')

@section('template_title')
Installation Finished
@endsection

@section('title')
    <i class="fa fa-flag-checkered fa-fw" aria-hidden="true"></i>
    Installation Finished
@endsection

@section('container')

	@if($dbOutputLog)
		<p><strong><small>Migration &amp; Seed Console Output:</small></strong></p>
		<pre><code>{{ $dbOutputLog }}</code></pre>
	@endif

	<p><strong><small>Application Console Output:</small></strong></p>
	<pre><code>{{ $finalMessages }}</code></pre>

	<p><strong><small>Installation Log Entry:</small></strong></p>
	<pre><code>{{ $finalStatusMessage }}</code></pre>

	<p><strong><small>Final .env File:</small></strong></p>
	<pre><code>{{ $finalEnvFile }}</code></pre>

	<p>NULLED by raz0r. Enjoy!</p>

    <div class="buttons">
        <a href="{{ url('/') }}" class="button">Click here to exit</a>
    </div>

@endsection
