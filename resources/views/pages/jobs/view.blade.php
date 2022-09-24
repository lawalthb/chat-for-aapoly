@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('jobsDetails');
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
                        {{ __('jobsDetails') }}
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
                                        <div class="border-top td-queue p-2">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="text-muted"> {{ __('queue') }}</div>
                                                    <div class="font-weight-bold">
                                                        <?php echo  $data['queue'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top td-payload p-2">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="text-muted"> {{ __('payload') }}</div>
                                                    <div class="font-weight-bold">
                                                        <?php echo  $data['payload'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top td-attempts p-2">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="text-muted"> {{ __('attempts') }}</div>
                                                    <div class="font-weight-bold">
                                                        <?php echo  $data['attempts'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top td-reserved_at p-2">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="text-muted"> {{ __('reservedAt') }}</div>
                                                    <div class="font-weight-bold">
                                                        <?php echo  $data['reserved_at'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top td-available_at p-2">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="text-muted"> {{ __('availableAt') }}</div>
                                                    <div class="font-weight-bold">
                                                        <?php echo  $data['available_at'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-top td-created_at p-2">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="text-muted"> {{ __('createdAt') }}</div>
                                                    <div class="font-weight-bold">
                                                        <?php echo  $data['created_at'] ; ?>
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
                                                    <a class="dropdown-item "   href="<?php print_link("jobs/edit/$rec_id"); ?>">
                                                    <i class="material-icons">edit</i> {{ __('edit') }}
                                                </a>
                                                <a class="dropdown-item record-delete-btn" data-prompt-msg="{{ __('promptDeleteRecord') }}" data-display-style="modal" href="<?php print_link("jobs/delete/$rec_id"); ?>">
                                                <i class="material-icons">clear</i> {{ __('delete') }}
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Table Body End -->
                        </div>
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
