@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $field_name = request()->segment(3);
    $field_value = request()->segment(4);
    $total_records = $records->total();
    $limit = $records->perPage();
    $record_count = count($records);
    $pageTitle = __('users');
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
                        {{ __('users') }}
                    </div>
                </div>
                <div class="col-md-auto " >
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
                    <div  class=" page-content" >
                        <div id="users-list-records">
                            <div class="row">
                                <div class="col">
                                    <div id="page-main-content" class="table-responsive">
                                        <?php Html::page_bread_crumb("/users/", $field_name, $field_value); ?>
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
                                                    <th class="td-fullname <?php echo (get_value('orderby') == 'fullname' ? 'sortedby' : null); ?>" >
                                                    <?php Html :: get_field_order_link('fullname', __('fullname'), ''); ?>
                                                    </th>
                                                    <th class="td-matric" > {{ __('matric') }}</th>
                                                    <th class="td-phone" > {{ __('phone') }}</th>
                                                    <th class="td-email <?php echo (get_value('orderby') == 'email' ? 'sortedby' : null); ?>" >
                                                    <?php Html :: get_field_order_link('email', __('email'), ''); ?>
                                                    </th>
                                                    <th class="td-status" > {{ __('status') }}</th>
                                                    <th class="td-ip_address" > {{ __('ipAddress') }}</th>
                                                    <th class="td-language_id" > {{ __('languageId') }}</th>
                                                    <th class="td-department_id" > {{ __('department') }}</th>
                                                    <th class="td-date_join <?php echo (get_value('orderby') == 'date_join' ? 'sortedby' : null); ?>" >
                                                    <?php Html :: get_field_order_link('date_join', __('dateJoin'), ''); ?>
                                                    </th>
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
                                                        <a href="<?php print_link("users/view/$data[id]") ?>"><?php echo $data['id']; ?></a>
                                                    </td>
                                                    <td class="td-fullname">
                                                        <?php echo  $data['fullname'] ; ?>
                                                    </td>
                                                    <td class="td-matric">
                                                        <?php echo  $data['matric'] ; ?>
                                                    </td>
                                                    <td class="td-phone">
                                                        <a href="<?php print_link("tel:$data[phone]") ?>"><?php echo $data['phone']; ?></a>
                                                    </td>
                                                    <td class="td-email">
                                                        <a href="<?php print_link("mailto:$data[email]") ?>"><?php echo $data['email']; ?></a>
                                                    </td>
                                                    <td class="td-status"><span><?php if( $data['status']== 1){
                                                        echo  "Active";
                                                        }else{
                                                        echo "Inactive";
                                                    } ?></span></td>
                                                    <td class="td-ip_address">
                                                        <?php echo  $data['ip_address'] ; ?>
                                                    </td>
                                                    <td class="td-language_id">
                                                        <a size="sm" class="btn btn-sm btn btn-secondary page-modal" href="<?php print_link("languages//$data[language_id]?subpage=1") ?>">
                                                        <?php echo $data['languages_name'] ?>
                                                    </a>
                                                </td>
                                                <td class="td-department_id">
                                                    <a size="sm" class="btn btn-sm btn btn-secondary page-modal" href="<?php print_link("departments//$data[department_id]?subpage=1") ?>">
                                                    <?php echo $data['departments_name'] ?>
                                                </a>
                                            </td>
                                            <td class="td-date_join">
                                                <span title="<?php echo human_datetime($data['date_join']); ?>" class="has-tooltip">
                                                <?php echo relative_date($data['date_join']); ?>
                                                </span>
                                            </td>
                                            <!--PageComponentEnd-->
                                            <td class="td-btn">
                                                <a class="mx-1 btn btn-sm btn-primary has-tooltip "    href="<?php print_link("users/view/$rec_id"); ?>">
                                                <i class="material-icons ">forum</i> {{ __('chat') }}
                                            </a>
                                            <a class="mx-1 btn btn-sm btn-danger has-tooltip record-delete-btn" data-prompt-msg="{{ __('promptDeleteRecord') }}" data-display-style="modal"  href="<?php print_link("users/delete/$rec_id"); ?>">
                                            <i class="material-icons">clear</i> {{ __('delete') }}
                                        </a>
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
                                    <button data-prompt-msg="{{ __('promptDeleteRecords') }}" data-display-style="modal" data-url="<?php print_link("users/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
                                    <i class="material-icons">clear</i> {{ __('deleteSelected') }}
                                    </button>
                                    <div class="dropup export-btn-holder mx-1">
                                        <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">save</i> {{ __('') }}
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <?php $export_print_link = add_query_params(['export' => 'print']); ?>
                                            <a class="dropdown-item export-link-btn" data-format="print" href="<?php print_link($export_print_link); ?>" target="_blank">
                                            <img src="{{ asset('images/print.png') }}" class="mr-2" /> PRINT
                                        </a>
                                        <?php $export_pdf_link = add_query_params(['export' => 'pdf']); ?>
                                        <a class="dropdown-item export-link-btn" data-format="pdf" href="<?php print_link($export_pdf_link); ?>" target="_blank">
                                        <img src="{{ asset('images/pdf.png') }}" class="mr-2" /> PDF
                                    </a>
                                    <?php $export_csv_link = add_query_params(['export' => 'csv']); ?>
                                    <a class="dropdown-item export-link-btn" data-format="csv" href="<?php print_link($export_csv_link); ?>" target="_blank">
                                    <img src="{{ asset('/images/csv.png') }}" class="mr-2" /> CSV
                                </a>
                                <?php $export_excel_link = add_query_params(['export' => 'excel']); ?>
                                <a class="dropdown-item export-link-btn" data-format="excel" href="<?php print_link($export_excel_link); ?>" target="_blank">
                                <img src="{{ asset('images/xsl.png') }}" class="mr-2" /> EXCEL
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">   
                <?php
                    if($show_pagination == true){
                    $pager = new Pagination($total_records, $record_count);
                    $pager->show_page_count = false;
                    $pager->show_record_count = true;
                    $pager->show_page_limit =false;
                    $pager->limit = $limit;
                    $pager->show_page_number_list = true;
                    $pager->pager_link_range=5;
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
