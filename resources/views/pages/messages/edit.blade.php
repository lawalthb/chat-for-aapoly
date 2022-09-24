@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('editMessages');
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="edit" data-page-url="{{ url()->full() }}">
    <?php
        if( $show_header == true ){
    ?>
    <div  class="card-4 bg-light mb-3" >
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-md-auto " >
                    <div class=" h5 font-weight-bold text-primary" >
                        {{ __('editMessages') }}
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
                        <div class="row">
                            <div class="col">
                                <!--[form-start]-->
                                <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("messages/edit/$rec_id"); ?>" method="post">
                                <!--[form-content-start]-->
                                @csrf
                                <div>
                                    <input id="ctrl-user_id"  value="<?php  echo $data['user_id']; ?>" type="hidden" placeholder="{{ __('enterUserId') }}"  required="" name="user_id"  class="form-control " />
                                    <input id="ctrl-ip_address"  value="<?php  echo $data['ip_address']; ?>" type="hidden" placeholder="{{ __('enterIpAddress') }}"  required="" name="ip_address"  class="form-control " />
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="messages">{{ __('messages') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-messages-holder" class=" ">
                                                    <input id="ctrl-messages"  value="<?php  echo $data['messages']; ?>" type="text" placeholder="{{ __('enterMessages') }}"  required="" name="messages"  class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input id="ctrl-status"  value="<?php  echo $data['status']; ?>" type="hidden" placeholder="{{ __('enterStatus') }}"  required="" name="status"  class="form-control " />
                                    <input id="ctrl-deleted"  value="<?php  echo $data['deleted']; ?>" type="hidden" placeholder="{{ __('enterDeleted') }}"  required="" name="deleted"  class="form-control " />
                                    <input id="ctrl-seen"  value="<?php  echo $data['seen']; ?>" type="hidden" placeholder="{{ __('enterSeen') }}"  required="" name="seen"  class="form-control " />
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="userfile">{{ __('userfile') }} </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-userfile-holder" class=" ">
                                                    <div class="dropzone " input="#ctrl-userfile" fieldname="userfile" uploadurl="{{ url('fileuploader/upload/userfile') }}"    data-multiple="false" dropmsg="{{ __('chooseFilesOrDropFilesHere') }}"    btntext="{{ __('browse') }}" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="1">
                                                        <input name="userfile" id="ctrl-userfile" class="dropzone-input form-control" value="<?php  echo $data['userfile']; ?>" type="text"  />
                                                        <!--<div class="invalid-feedback animated bounceIn text-center">{{ __('pleaseAChooseFile') }}</div>-->
                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                    </div>
                                                </div>
                                                <?php Html :: uploaded_files_list($data['userfile'], '#ctrl-userfile'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <input id="ctrl-department_id"  value="<?php  echo $data['department_id']; ?>" type="hidden" placeholder="{{ __('enterDepartmentId') }}"  required="" name="department_id"  class="form-control " />
                                    <input id="ctrl-session_id"  value="<?php  echo $data['session_id']; ?>" type="hidden" placeholder="{{ __('enterSessionId') }}" list="session_id_list"  required="" name="session_id"  class="form-control " />
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
                                <!--[form-content-end]-->
                                <!--[form-button-start]-->
                                <div class="form-group text-center">
                                    <button class="btn btn-primary" type="submit">
                                    {{ __('update') }}
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
