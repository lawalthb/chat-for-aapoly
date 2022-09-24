@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('messagesDetails');
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="view" data-page-url="{{ url()->full() }}">
    <?php
        if( $show_header == true ){
    ?>
    <div  class="card-4 bg-light mb-3" >
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-md-auto " >
                    <div class=" h5 font-weight-bold text-primary" >
                        {{ __('messagesDetails') }}
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
                <div class="col-md-12 comp-grid" >
                    <?php Html::display_page_errors($errors); ?>
                    <div  class=" page-content" >
                        <?php
                            $counter = 0;
                            if($data){
                            $rec_id = ($data['id'] ? urlencode($data['id']) : null);
                            $counter++;
                        ?>
                        <div id="page-main-content" class="">
                            <div class="row">
                                <div class="col">
                                    <!-- Table Body Start -->
                                    <div class="page-data">
                                        <!--PageComponentStart-->
                                        <div class="border-top td-id p-2">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="text-muted"> {{ __('id') }}</div>
                                                    <div class="font-weight-bold">
                                                        <?php echo  $data['id'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top td-user_id p-2">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="text-muted"> {{ __('userId') }}</div>
                                                    <div class="font-weight-bold">
                                                        <?php echo  $data['user_id'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top td-ip_address p-2">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="text-muted"> {{ __('ipAddress') }}</div>
                                                    <div class="font-weight-bold">
                                                        <?php echo  $data['ip_address'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top td-messages p-2">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="text-muted"> {{ __('messages') }}</div>
                                                    <div class="font-weight-bold">
                                                        <?php echo  $data['messages'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top td-admin_id p-2">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="text-muted"> {{ __('adminId') }}</div>
                                                    <div class="font-weight-bold">
                                                        <a size="sm" class="btn btn-sm btn btn-secondary page-modal" href="<?php print_link("admins/view/$data[admin_id]?subpage=1") ?>">
                                                        <i class="material-icons">visibility</i> <?php echo "Admins Detail" ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-top td-status p-2">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="text-muted"> {{ __('status') }}</div>
                                                <div class="font-weight-bold">
                                                    <?php echo  $data['status'] ; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-top td-deleted p-2">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="text-muted"> {{ __('deleted') }}</div>
                                                <div class="font-weight-bold">
                                                    <?php echo  $data['deleted'] ; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-top td-seen p-2">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="text-muted"> {{ __('seen') }}</div>
                                                <div class="font-weight-bold">
                                                    <?php echo  $data['seen'] ; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-top td-userfile p-2">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="text-muted"> {{ __('userfile') }}</div>
                                                <div class="font-weight-bold">
                                                    <?php echo  $data['userfile'] ; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-top td-department_id p-2">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="text-muted"> {{ __('departmentId') }}</div>
                                                <div class="font-weight-bold">
                                                    <?php echo  $data['department_id'] ; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-top td-session_id p-2">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="text-muted"> {{ __('sessionId') }}</div>
                                                <div class="font-weight-bold">
                                                    <?php echo  $data['session_id'] ; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-top td-reg_date p-2">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="text-muted"> {{ __('regDate') }}</div>
                                                <div class="font-weight-bold">
                                                    <span title="<?php echo human_datetime($data['reg_date']); ?>" class="has-tooltip">
                                                    <?php echo relative_date($data['reg_date']); ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--PageComponentEnd-->
                                    <div class="d-flex q-col-gutter-xs justify-btween">
                                        <div class="dropdown" >
                                            <button data-toggle="dropdown" class="dropdown-toggle btn text-primary btn-flat btn-sm">
                                            <i class="material-icons">menu</i> 
                                            </button>
                                            <ul class="dropdown-menu">
                                                <a class="dropdown-item "   href="<?php print_link("messages/edit/$rec_id"); ?>">
                                                <i class="material-icons">edit</i> {{ __('edit') }}
                                            </a>
                                            <a class="dropdown-item record-delete-btn" data-prompt-msg="{{ __('promptDeleteRecord') }}" data-display-style="modal" href="<?php print_link("messages/delete/$rec_id"); ?>">
                                            <i class="material-icons">clear</i> {{ __('delete') }}
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Table Body End -->
                    </div>
                    <!-- Detail Page Column -->
                    <?php if(!request()->has('subpage')){ ?>
                    <div class="col-12">
                        <div class="my-3 ">
                            @include("pages.messages.detail-pages", ["masterRecordId" => $rec_id])
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <?php
                }
                else{
            ?>
            <!-- Empty Record Message -->
            <div class="text-muted p-3">
                <i class="material-icons">block</i> {{ __('noRecordFound') }}
            </div>
            <?php
                }
            ?>
        </div>
        <div class=" reset-grids">
            <?php
                $params = ['user_id' => $data['user_id'],'ip_address' => $data['ip_address'],'admin_id' => $data['admin_id'],'department_id' => $data['department_id'],'session_id' => $data['session_id'],'show_header' => false]; //new query param
                $query = array_merge(request()->query(), $params);
                $queryParams = http_build_query($query);
                $url = url("messages/add?$queryParams");
            ?>
            <div class="ajax-inline-page" data-url="{{ $url }}" >
                <div class="ajax-page-load-indicator">
                    <div class="text-center d-flex justify-content-center load-indicator">
                        <span class="loader mr-3"></span>
                        <span class="font-weight-bold">{{ __('loading') }}</span>
                    </div>
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
