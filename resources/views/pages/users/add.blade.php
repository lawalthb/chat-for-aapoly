@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('addNewUsers');
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
                        {{ __('addNewUsers') }}
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
                        <form id="users-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="{{ route('users.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="language_id">{{ __('languageId') }} <span class="text-danger">*</span></label>
                                    <div id="ctrl-language_id-holder" class=" "> 
                                        <select required=""  id="ctrl-language_id" name="language_id"  placeholder="{{ __('selectAValue') }}"    class="custom-select" >
                                        <option value="">{{ __('selectAValue') }}</option>
                                        <?php 
                                            $options = $comp_model->language_id_option_list() ?? [];
                                            foreach($options as $option){
                                            $value = $option->value;
                                            $label = $option->label ?? $value;
                                            $selected = Html::get_field_selected('language_id', $value);
                                        ?>
                                        <option <?php echo $selected; ?> value="<?php echo $value; ?>">
                                        <?php echo $label; ?>
                                        </option>
                                        <?php
                                            }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="department_id">{{ __('departmentId') }} <span class="text-danger">*</span></label>
                                    <div id="ctrl-department_id-holder" class=" "> 
                                        <select required=""  id="ctrl-department_id" name="department_id"  placeholder="{{ __('selectAValue') }}"    class="custom-select" >
                                        <option value="">{{ __('selectAValue') }}</option>
                                        <?php 
                                            $options = $comp_model->department_id_option_list() ?? [];
                                            foreach($options as $option){
                                            $value = $option->value;
                                            $label = $option->label ?? $value;
                                            $selected = Html::get_field_selected('department_id', $value);
                                        ?>
                                        <option <?php echo $selected; ?> value="<?php echo $value; ?>">
                                        <?php echo $label; ?>
                                        </option>
                                        <?php
                                            }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="fullname">{{ __('fullname') }} <span class="text-danger">*</span></label>
                                    <div id="ctrl-fullname-holder" class=" "> 
                                        <input id="ctrl-fullname"  value="<?php echo get_value('fullname') ?>" type="text" placeholder="{{ __('enterFullname') }}"  required="" name="fullname"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="matric">{{ __('matric') }} </label>
                                    <div id="ctrl-matric-holder" class=" "> 
                                        <input id="ctrl-matric"  value="<?php echo get_value('matric', "NULL") ?>" type="text" placeholder="{{ __('enterMatric') }}"  name="matric"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="phone">{{ __('phone') }} </label>
                                    <div id="ctrl-phone-holder" class=" "> 
                                        <input id="ctrl-phone"  value="<?php echo get_value('phone', "NULL") ?>" type="text" placeholder="{{ __('enterPhone') }}"  name="phone"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="email">{{ __('email') }} <span class="text-danger">*</span></label>
                                    <div id="ctrl-email-holder" class=" "> 
                                        <input id="ctrl-email"  value="<?php echo get_value('email') ?>" type="email" placeholder="{{ __('enterEmail') }}"  required="" name="email"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="status">{{ __('status') }} <span class="text-danger">*</span></label>
                                    <div id="ctrl-status-holder" class=" "> 
                                        <input id="ctrl-status"  value="<?php echo get_value('status', "1") ?>" type="number" placeholder="{{ __('enterStatus') }}" step="any"  required="" name="status"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="avatar">{{ __('avatar') }} </label>
                                    <div id="ctrl-avatar-holder" class=" "> 
                                        <input id="ctrl-avatar"  value="<?php echo get_value('avatar', "NULL") ?>" type="text" placeholder="{{ __('enterAvatar') }}"  name="avatar"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="first_message">{{ __('firstMessage') }} </label>
                                    <div id="ctrl-first_message-holder" class=" "> 
                                        <textarea placeholder="{{ __('enterFirstMessage') }}" id="ctrl-first_message"  rows="5" name="first_message" class=" form-control"><?php echo get_value('first_message') ?></textarea>
                                        <!--<div class="invalid-feedback animated bounceIn text-center">{{ __('pleaseEnterText') }}</div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="form-ajax-status"></div>
                            <!--[form-button-start]-->
                            <div class="form-group form-submit-btn-holder text-center mt-3">
                                <button class="btn btn-primary" type="submit">
                                {{ __('startChat') }}
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
