@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('addNewWebsocketsStatisticsEntries');
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="add" data-page-url="{{ url()->full() }}">
    <?php
        if( $show_header == true ){
    ?>
    <div  class="card-4 bg-light mb-3" >
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-md-auto " >
                    <div class=" h5 font-weight-bold text-primary" >
                        {{ __('addNewWebsocketsStatisticsEntries') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
    <div  class="" >
        <div class="container">
            <div class="row ">
                <div class="col-md-9 comp-grid" >
                    <?php Html::display_page_errors($errors); ?>
                    <div  class=" page-content" >
                        <!--[form-start]-->
                        <form id="websockets_statistics_entries-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('websockets_statistics_entries.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="app_id">{{ __('appId') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-app_id-holder" class=" ">
                                                <input id="ctrl-app_id"  value="<?php echo get_value('app_id') ?>" type="text" placeholder="{{ __('enterAppId') }}"  required="" name="app_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="peak_connection_count">{{ __('peakConnectionCount') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-peak_connection_count-holder" class=" ">
                                                <input id="ctrl-peak_connection_count"  value="<?php echo get_value('peak_connection_count') ?>" type="number" placeholder="{{ __('enterPeakConnectionCount') }}" step="any"  required="" name="peak_connection_count"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="websocket_message_count">{{ __('websocketMessageCount') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-websocket_message_count-holder" class=" ">
                                                <input id="ctrl-websocket_message_count"  value="<?php echo get_value('websocket_message_count') ?>" type="number" placeholder="{{ __('enterWebsocketMessageCount') }}" step="any"  required="" name="websocket_message_count"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="api_message_count">{{ __('apiMessageCount') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-api_message_count-holder" class=" ">
                                                <input id="ctrl-api_message_count"  value="<?php echo get_value('api_message_count') ?>" type="number" placeholder="{{ __('enterApiMessageCount') }}" step="any"  required="" name="api_message_count"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-ajax-status"></div>
                            <!--[form-button-start]-->
                            <div class="form-group form-submit-btn-holder text-center mt-3">
                                <button class="btn btn-primary" type="submit">
                                {{ __('submit') }}
                                <i class="material-icons">send</i>
                                </button>
                            </div>
                            <!--[form-button-end]-->
                        </form>
                        <!--[form-end]-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('pagecss')
<style>

</style>
@endsection
@section('pagejs')
<script>
	/*
	* Page Custom Javascript | Jquery codes
	*/

	//$(document).ready(function(){
	//	
	//});
</script>

@endsection
