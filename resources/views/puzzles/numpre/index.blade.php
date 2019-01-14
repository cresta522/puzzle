@extends('layouts.template')

@section('title', 'パズル解答')

@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>その他</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- tab menu -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2> 企業情報設定画面 </h2>
                    @if (session('success_message'))
                        <div class="row"><div class="alert alert-success col-md-12 col-sm-12 col-xs-12">
                            {{ session('success_message') }}
                        </div></div>
                    @endif
                    @if (session('failed_message'))
                        <div class="row"><div class="alert alert-danger col-md-12 col-sm-12 col-xs-12">
                            {{ session('failed_message') }}
                        </div></div>
                    @endif
          
                    <div class="row"><div id="success-msg" class="col-md-12 col-sm-12 col-xs-12"></div></div>
                    <div class="row"><div id="error-msg" class="col-md-12 col-sm-12 col-xs-12"></div></div>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#company_info" id="company_info_tab" role="tab" data-toggle="tab" aria-expanded="false">基本情報</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">

                            <!-- 基本情報設定-->
                            <div role="tabpanel" class="tab-pane fade active in" id="company_info" aria-labelledby="company_info">

                                <!-- 現在の設定 -->
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>企業情報(現在の設定)</h2>
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="x_content">

                                        </div>
                                    </div>

                                </div>
                                <!-- /現在の設定 -->
                            </div>
                            <!-- /基本情報設定-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
