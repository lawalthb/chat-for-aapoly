@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $field_name = request()->segment(3);
    $field_value = request()->segment(4);
    $total_records = $records->total();
    $limit = $records->perPage();
    $record_count = count($records);
    $pageTitle = __('faq');
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
                        {{ __('frequentlyAskedQuestions') }}
                    </div>
                </div>
                <div class="col-md-auto " >
                    <a  class="btn btn-primary btn-block" href="<?php print_link("faq/add") ?>" >
                    <i class="material-icons">add</i>                               
                    {{ __('addNewFaq') }} 
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
                <div  class=" page-content" >
                    <div id="faq-list-records">
                        <div class="row">
                            <div class="col">
                                <div id="page-main-content" class="table-responsive">
                                    <?php Html::page_bread_crumb("/faq/", $field_name, $field_value); ?>
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
                                                <th class="td-question" > {{ __('question') }}</th>
                                                <th class="td-answer" > {{ __('answer') }}</th>
                                                <th class="td-status" > {{ __('status') }}</th>
                                                <th class="td-agent" > {{ __('agent') }}</th>
                                                <th class="td-reg_date" > {{ __('date') }}</th>
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
                                                    <a href="<?php print_link("faq/view/$data[id]") ?>"><?php echo $data['id']; ?></a>
                                                </td>
                                                <td class="td-question">
                                                    <?php echo  $data['question'] ; ?>
                                                </td>
                                                <td class="td-answer">
                                                    <div><?php echo $data['answer']; ?></div>
                                                </td>
                                                <td class="td-status"><span><?php 
                                                    if( $data['status']== 1){
                                                    echo  "Published";
                                                    }else{
                                                    echo "Draft";
                                                } ?>
                                            </span></td>
                                            <td class="td-agent">
                                                <a size="sm" class="btn btn-sm btn btn-secondary page-modal" href="<?php print_link("admins/view/$data[agent]?subpage=1") ?>">
                                                <?php echo $data['admins_firstname'] ?>
                                            </a>
                                        </td>
                                        <td class="td-reg_date">
                                            <?php echo  $data['reg_date'] ; ?>
                                        </td>
                                        <!--PageComponentEnd-->
                                        <td class="td-btn">
                                            <a class="mx-1 btn btn-sm btn-primary has-tooltip "    href="<?php print_link("faq/view/$rec_id"); ?>">
                                            <i class="material-icons">visibility</i> {{ __('view') }}
                                        </a>
                                        <a class="mx-1 btn btn-sm btn-success has-tooltip "    href="<?php print_link("faq/edit/$rec_id"); ?>">
                                        <i class="material-icons">edit</i> {{ __('edit') }}
                                    </a>
                                    <a class="mx-1 btn btn-sm btn-danger has-tooltip record-delete-btn" data-prompt-msg="{{ __('promptDeleteRecord') }}" data-display-style="modal"  href="<?php print_link("faq/delete/$rec_id"); ?>">
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
                            <button data-prompt-msg="{{ __('promptDeleteRecords') }}" data-display-style="modal" data-url="<?php print_link("faq/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
                            <i class="material-icons">clear</i> {{ __('deleteSelected') }}
                            </button>
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
