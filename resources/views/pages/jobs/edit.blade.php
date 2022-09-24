@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('editJobs');
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
                        {{ __('editJobs') }}
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
                                <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("jobs/edit/$rec_id"); ?>" method="post">
                                <!--[form-content-start]-->
                                @csrf
                                <div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="queue">{{ __('queue') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-queue-holder" class=" ">
                                                    <input id="ctrl-queue"  value="<?php  echo $data['queue']; ?>" type="text" placeholder="{{ __('enterQueue') }}"  required="" name="queue"  class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="payload">{{ __('payload') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-payload-holder" class=" ">
                                                    <textarea placeholder="{{ __('enterPayload') }}" id="ctrl-payload"  required="" rows="5" name="payload" class=" form-control"><?php  echo $data['payload']; ?></textarea>
                                                    <!--<div class="invalid-feedback animated bounceIn text-center">{{ __('pleaseEnterText') }}</div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="attempts">{{ __('attempts') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-attempts-holder" class=" ">
                                                    <input id="ctrl-attempts"  value="<?php  echo $data['attempts']; ?>" type="number" placeholder="{{ __('enterAttempts') }}" step="any"  required="" name="attempts"  class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="reserved_at">{{ __('reservedAt') }} </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-reserved_at-holder" class=" ">
                                                    <input id="ctrl-reserved_at"  value="<?php  echo $data['reserved_at']; ?>" type="number" placeholder="{{ __('enterReservedAt') }}" step="any"  name="reserved_at"  class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="available_at">{{ __('availableAt') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-available_at-holder" class=" ">
                                                    <input id="ctrl-available_at"  value="<?php  echo $data['available_at']; ?>" type="number" placeholder="{{ __('enterAvailableAt') }}" step="any"  required="" name="available_at"  class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
