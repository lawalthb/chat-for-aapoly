@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('addNewMessages');
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
                        {{ __('addNewMessages') }}
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
                        <form id="messages-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="{{ route('messages.store') }}" method="post">
                            @csrf
                            <div>
                                <input id="ctrl-user_id"  value="<?php echo get_value('user_id') ?>" type="hidden" placeholder="{{ __('enterUserId') }}"  required="" name="user_id"  class="form-control " />
                                <input id="ctrl-ip_address"  value="<?php echo get_value('ip_address') ?>" type="hidden" placeholder="{{ __('enterIpAddress') }}"  required="" name="ip_address"  class="form-control " />
                                <div class="form-group ">
                                    <div id="ctrl-messages-holder" class=" ">
                                        <input id="ctrl-messages"  value="<?php echo get_value('messages') ?>" type="text" placeholder="{{ __('enterMessages') }}"  required="" name="messages"  class="form-control " />
                                    </div>
                                </div>
                                <input id="ctrl-status"  value="<?php echo get_value('status', "0") ?>" type="hidden" placeholder="{{ __('enterStatus') }}"  required="" name="status"  class="form-control " />
                                <input id="ctrl-deleted"  value="<?php echo get_value('deleted', "0") ?>" type="hidden" placeholder="{{ __('enterDeleted') }}"  required="" name="deleted"  class="form-control " />
                                <input id="ctrl-seen"  value="<?php echo get_value('seen', "0") ?>" type="hidden" placeholder="{{ __('enterSeen') }}"  required="" name="seen"  class="form-control " />
                                <input id="ctrl-department_id"  value="<?php echo get_value('department_id') ?>" type="hidden" placeholder="{{ __('enterDepartmentId') }}"  required="" name="department_id"  class="form-control " />
                                <input id="ctrl-session_id"  value="<?php echo get_value('session_id') ?>" type="hidden" placeholder="{{ __('enterSessionId') }}" list="session_id_list"  required="" name="session_id"  class="form-control " />
                                <datalist id="session_id_list">
                                <?php 
                                    $options = $comp_model->last_message_id_option_list() ?? [];
                                    foreach($options as $option){
                                    $value = $option->value;
                                    $label = $option->label ?? $value;
                                ?>
                                <option value="<?php echo $value; ?>"><?php echo $label; ?></option>
                                <?php
                                    }
                                ?>
                                </datalist>
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
