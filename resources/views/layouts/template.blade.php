<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
    
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="ROBOTS" content="NOINDEX,NOFOLLOW">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.require_cssfiles')

</head>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            @include('layouts.sidebar_menu')
            <!-- page content -->
            <div class="right_col" role="main">
            @yield('content')
            </div>
            <!-- /page content -->
    
        </div>
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            {{ env('APP_NAME') }}
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->

    </div>
    <div class="flash_messages hide">
        @if (session('success_message'))
            <div class="success_message">
                {{ session('success_message') }}
            </div>
        @endif
        @if (session('info_message'))
            <div class="info_message">
                {{ session('info_message') }}
            </div>
        @endif
        @if (session('warning_message'))
            <div class="warning_message">
                {{ session('warning_message') }}
            </div>
        @endif
        @if (session('error_message'))
            <div class="error_message">
                {{ session('error_message') }}
            </div>
        @endif
        @if (session('dark_message'))
            <div class="dark_message">
                {{ session('dark_message') }}
            </div>
        @endif
    </div>
    <!-- 共通ファイル -->
    @include('layouts.require_jsfiles')
    
    <!-- ページ依存 -->
    @if (isset($js_filename) === true)
        <script src="/js{{ $js_filename }}?date={{ time() }}"></script>
    @endif
</body>
</html>
