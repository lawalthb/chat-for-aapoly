@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $field_name = request()->segment(3);
    $field_value = request()->segment(4);
    $total_records = $records->total();
    $limit = $records->perPage();
    $record_count = count($records);
    $pageTitle = __('messages');
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="list" data-page-url="{{ url()->full() }}">
    <?php
        if( $show_header == true ){
    ?>
    <div  class="card-4 bg-light mb-3" >
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-12 col-md-auto " >
                    <div class=" h5 font-weight-bold text-primary" >
                        {{ __('messages') }}
                    </div>
                </div>
                <div class="col-md-auto " >
                    <a  class="btn btn-primary btn-block" href="<?php print_link("messages/add") ?>" >
                    <i class="material-icons">add</i>                               
                    {{ __('addNewMessages') }} 
                </a>
            </div>
            <div class="col-md-3 " >
                <form  class="search" action="{{ url()->current() }}" method="get">
                    <input type="hidden" name="page" value="1" />
                    <div class="input-group">
                        <input value="<?php echo get_value('search'); ?>" class="form-control page-search" type="text" name="search"  placeholder="{{ __('search') }}" />
                        <div class="input-group-append">
                            <button class="btn btn-primary"><i class="material-icons">search</i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    }
?>
<div  class="" >
    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-12 comp-grid" >
                <?php Html::display_page_errors($errors); ?>
                <div class=" ">
                    <?php
                        $params = [ ]; //new query param
                        $query = array_merge(request()->query(), $params);
                        $queryParams = http_build_query($query);
                        $url = url("messages/view/$rec_id?$queryParams");
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
                <div  class=" page-content" >
                    <div id="messages-chat-records">
                        <div class="row">
                            <div class="col">
                                <div id="page-main-content" class="table-responsive">
                                    <?php Html::page_bread_crumb("/messages/chat", $field_name, $field_value); ?>
                                    <table class="table table-hover table-striped table-sm text-left">
                                        <thead class="table-header ">
                                            <tr>
                                                <th class="td-checkbox">
                                                <label class="custom-control custom-checkbox custom-control-inline">
                                                <input class="toggle-check-all custom-control-input" type="checkbox" />
                                                <span class="custom-control-label"></span>
                                                </label>
                                                </th>
                                                <th class="td-id" > {{ __('id') }}</th>
                                                <th class="td-user_id" > {{ __('userId') }}</th>
                                                <th class="td-ip_address" > {{ __('ipAddress') }}</th>
                                                <th class="td-messages" > {{ __('messages') }}</th>
                                                <th class="td-admin_id" > {{ __('admin') }}</th>
                                                <th class="td-status" > {{ __('status') }}</th>
                                                <th class="td-deleted" > {{ __('deleted') }}</th>
                                                <th class="td-seen" > {{ __('seen') }}</th>
                                                <th class="td-userfile" > {{ __('userfile') }}</th>
                                                <th class="td-department_id" > {{ __('departmentId') }}</th>
                                                <th class="td-session_id" > {{ __('sessionId') }}</th>
                                                <th class="td-reg_date" > {{ __('regDate') }}</th>
                                                <th class="td-" > </th>
                                                <th class="td-btn"></th>
                                            </tr>
                                        </thead>
                                        <?php
                                            if($total_records){
                                        ?>
                                        <tbody class="page-data">
                                            <!--record-->
                                            <?php
                                                $counter = 0;
                                                foreach($records as $data){
                                                $rec_id = ($data['id'] ? urlencode($data['id']) : null);
                                                $counter++;
                                            ?>
                                            <tr>
                                                <td class=" td-checkbox">
                                                    <label class="custom-control custom-checkbox custom-control-inline">
                                                    <input class="optioncheck custom-control-input" name="optioncheck[]" value="<?php echo $data['id'] ?>" type="checkbox" />
                                                    <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <!--PageComponentStart-->
                                                <td class="td-id">
                                                    <a href="<?php print_link("messages/view/$data[id]") ?>"><?php echo $data['id']; ?></a>
                                                </td>
                                                <td class="td-user_id">
                                                    <?php echo  $data['user_id'] ; ?>
                                                </td>
                                                <td class="td-ip_address">
                                                    <?php echo  $data['ip_address'] ; ?>
                                                </td>
                                                <td class="td-messages">
                                                    <?php echo  $data['messages'] ; ?>
                                                </td>
                                                <td class="td-admin_id">
                                                    <a size="sm" class="btn btn-sm btn btn-secondary page-modal" href="<?php print_link("admins/view/$data[admin_id]?subpage=1") ?>">
                                                    <?php echo $data['admins_firstname'] ?>
                                                </a>
                                            </td>
                                            <td class="td-status">
                                                <?php echo  $data['status'] ; ?>
                                            </td>
                                            <td class="td-deleted">
                                                <?php echo  $data['deleted'] ; ?>
                                            </td>
                                            <td class="td-seen">
                                                <?php echo  $data['seen'] ; ?>
                                            </td>
                                            <td class="td-userfile">
                                                <?php echo  $data['userfile'] ; ?>
                                            </td>
                                            <td class="td-department_id">
                                                <?php echo  $data['department_id'] ; ?>
                                            </td>
                                            <td class="td-session_id">
                                                <?php echo  $data['session_id'] ; ?>
                                            </td>
                                            <td class="td-reg_date">
                                                <?php echo  $data['reg_date'] ; ?>
                                            </td>
                                            <td class="td-masterdetailbtn">
                                                <a data-page-id="messages-detail-page" class="btn btn-sm btn-secondary open-master-detail-page" href="<?php print_link("messages/masterdetail/$data[id]"); ?>">
                                                <i class="material-icons">add</i> 
                                            </a>
                                        </td>
                                        <!--PageComponentEnd-->
                                        <td class="td-btn">
                                            <div class="dropdown" >
                                                <button data-toggle="dropdown" class="dropdown-toggle btn text-primary btn-flat btn-sm">
                                                <i class="material-icons">menu</i> 
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <a class="dropdown-item "   href="<?php print_link("messages/view/$rec_id"); ?>">
                                                    <i class="material-icons">visibility</i> {{ __('view') }}
                                                </a>
                                                <a class="dropdown-item "   href="<?php print_link("messages/edit/$rec_id"); ?>">
                                                <i class="material-icons">edit</i> {{ __('edit') }}
                                            </a>
                                            <a class="dropdown-item record-delete-btn" data-prompt-msg="{{ __('promptDeleteRecord') }}" data-display-style="modal" href="<?php print_link("messages/delete/$rec_id"); ?>">
                                            <i class="material-icons">clear</i> {{ __('delete') }}
                                        </a>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <?php 
                            }
                        ?>
                        <!--endrecord-->
                    </tbody>
                    <tbody class="search-data"></tbody>
                    <?php
                        }
                        else{
                    ?>
                    <tbody class="page-data">
                        <tr>
                            <td class="bg-light text-center text-muted animated bounce p-3" colspan="1000">
                                <i class="material-icons">block</i> {{ __('noRecordFound') }}
                            </td>
                        </tr>
                    </tbody>
                    <?php
                        }
                    ?>
                </table>
            </div>
            <?php
                if($show_footer){
            ?>
            <div class="">
                <div class="row justify-content-center">    
                    <div class="col-md-auto justify-content-center">    
                        <div class="p-3 d-flex justify-content-between">    
                            <button data-prompt-msg="{{ __('promptDeleteRecords') }}" data-display-style="modal" data-url="<?php print_link("messages/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
                            <i class="material-icons">clear</i> {{ __('deleteSelected') }}
                            </button>
                        </div>
                    </div>
                    <div class="col">   
                        <?php
                            if($show_pagination == true){
                            $pager = new Pagination($total_records, $record_count);
                            $pager->no_more_content_text = __('noMoreContentToLoad');
                            $pager->load_more_text = __('loadMore');
                            $pager->loading_text = __('loading');
                            $pager->pager_type = 'infinite-scroll';
                            $pager->render();
                            }
                        ?>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
        <!-- Detail Page Column -->
        <?php if(!request()->has('subpage')){ ?>
        <div class="col-12">
            <div class=" ">
                <div id="messages-detail-page" class="master-detail-page"></div>
            </div>
        </div>
        <?php } ?>
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
