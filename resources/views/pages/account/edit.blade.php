@inject('comp_model', 'App\Models\ComponentsData')
<?php
?>
@section('content')
<section class="page" data-page-type="edit" data-page-url="{{ url()->full() }}">
    <div  class="" >
        <div class="container">
            <div class="row ">
                <div class="col-md-9 comp-grid" >
                    <?php Html::display_page_errors($errors); ?>
                    <div  class=" page-content" >
                        <div class="row">
                            <div class="col">
                                <!--[form-start]-->
                                <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("account/edit"); ?>" method="post">
                                <!--[form-content-start]-->
                                @csrf
                                <div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="firstname">{{ __('firstname') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-firstname-holder" class=" ">
                                                    <input id="ctrl-firstname"  value="<?php  echo $data['firstname']; ?>" type="text" placeholder="{{ __('enterFirstname') }}"  required="" name="firstname"  class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="lastname">{{ __('lastname') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-lastname-holder" class=" ">
                                                    <input id="ctrl-lastname"  value="<?php  echo $data['lastname']; ?>" type="text" placeholder="{{ __('enterLastname') }}"  required="" name="lastname"  class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="status">{{ __('status') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-status-holder" class=" ">
                                                    <input id="ctrl-status"  value="<?php  echo $data['status']; ?>" type="number" placeholder="{{ __('enterStatus') }}" step="any"  required="" name="status"  class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="admin_type">{{ __('adminType') }} <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div id="ctrl-admin_type-holder" class=" ">
                                                    <input id="ctrl-admin_type"  value="<?php  echo $data['admin_type']; ?>" type="number" placeholder="{{ __('enterAdminType') }}" step="any"  required="" name="admin_type"  class="form-control " />
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
