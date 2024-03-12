@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="contentArea">

        {{--html埋め込み部分 start--}}

        <main id="main_wrap">

            <!--font noto sans jp-->
            <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;200;300;400;500;700;900&display=swap" rel="stylesheet">

            <!--font Prohibition-->
            <link rel="stylesheet" href="https://use.typekit.net/kiq8cok.css">


            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

{{--            <script type="text/javascript" src="./js/chart.js"></script>--}}
{{--            <link rel="stylesheet" media="all" href="./css/data.css"/>--}}
{{--            <script type="text/javascript" src="./js/data.js"></script>--}}




            <div id="flow" class="flow">
            </div>


        </main>

        {{--html埋め込み部分 end--}}

    </div>

@endsection
