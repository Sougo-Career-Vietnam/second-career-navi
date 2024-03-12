@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="topMvSlider">
        <x-mainVisual />
    </div>

    @if($page->fEntConfig->frontendSettings['isDispLatestJob']??null)
        {{-- <div id="topLatestJob">
            <x-latestJob.oneLineStyle />
        </div> --}}
        
    @endif

    <div id="template01" class="topContentBox">
        {{-- 1 message--}}
        <x-contentBox.contentMovie />   
        {{-- 2 handle--}} 
        <x-contentBox.contentData />
        {{-- 3 Functions--}}
        <x-contentBox.contentMembers />
        {{-- flow --}}
        <x-contentBox.contentOneday />
        
        @if(isset($fEntSearchAxisData))
        <div id="topSearchBox">
            <x-searchBox :fEntSearchAxisData="$fEntSearchAxisData" :fEntConfig="$page->fEntConfig" />
        </div>
        @endif

        @if($page->fEntConfig->frontendSettings['isDispRecommendJob']??null)
        <div id="topRecommendJob">
            <x-recommendJob.index />
        </div>
        @endif

        {{-- footer-company --}}
        <x-contentBox.contentWork />
    </div>

    {{-- <div id="topLinkBoxAbout">
        <x-linkBoxAbout />
    </div> --}}





@endsection
