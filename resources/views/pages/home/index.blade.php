@inject('comp_model', 'App\Models\ComponentsData')
<?php 
    $pageTitle = __('home');
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<div>
    <div  class="card-4 bg-light mb-3" >
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12 comp-grid" >
                    <div class=" h5 font-weight-bold" >
                        {{ __('dashboard') }}
                    </div>
                    <hr />
                </div>
                <div class="col-md-6 col-sm-4 comp-grid" >
                    <?php $rec_count = $comp_model->getcount_inboxes();  ?>
                    <a class="animated zoomIn record-count alert alert-warning"  href='<?php print_link("users") ?>' >
                    <div class="row gutter-sm">
                        <div class="col-auto" style="opacity: 1;">
                            <i class="material-icons ">child_care</i>
                        </div>
                        <div class="col">
                            <div class="flex-column justify-content align-center">
                                <div class="title">Inboxes</div>
                                <small class="">Total People that chat</small>
                            </div>
                            <h4 class="value"><?php echo $rec_count; ?></h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-sm-4 comp-grid" >
                <?php $rec_count = $comp_model->getcount_chat();  ?>
                <a class="animated zoomIn record-count alert alert-info"  href='<?php print_link("messages") ?>' >
                <div class="row gutter-sm">
                    <div class="col-auto" style="opacity: 1;">
                        <i class="material-icons ">question_answer</i>
                    </div>
                    <div class="col">
                        <div class="flex-column justify-content align-center">
                            <div class="title">Chat</div>
                            <small class="">Total Messages</small>
                        </div>
                        <h4 class="value"><?php echo $rec_count; ?></h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-sm-4 comp-grid" >
            <?php $rec_count = $comp_model->getcount_agents();  ?>
            <a class="animated zoomIn record-count alert alert-danger"  href='<?php print_link("admins") ?>' >
            <div class="row gutter-sm">
                <div class="col-auto" style="opacity: 1;">
                    <i class="material-icons ">person</i>
                </div>
                <div class="col">
                    <div class="flex-column justify-content align-center">
                        <div class="title">Agents</div>
                        <small class="">Total Agent</small>
                    </div>
                    <h4 class="value"><?php echo $rec_count; ?></h4>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-6 col-sm-4 comp-grid" >
        <?php $rec_count = $comp_model->getcount_faq();  ?>
        <a class="animated zoomIn record-count alert alert-success"  href='<?php print_link("faq") ?>' >
        <div class="row gutter-sm">
            <div class="col-auto" style="opacity: 1;">
                <i class="material-icons ">comment</i>
            </div>
            <div class="col">
                <div class="flex-column justify-content align-center">
                    <div class="title">FAQ</div>
                    <small class="">Total FAQs</small>
                </div>
                <h4 class="value"><?php echo $rec_count; ?></h4>
            </div>
        </div>
    </a>
</div>
<div class="col-md-6 col-sm-4 comp-grid" >
    <!--Include chart component-->
    @include("pages.home-chats-chart")
</div>
<div class="col-md-6 col-sm-4 comp-grid" >
    <div id="Comp-1-Accordion-Group" role="tablist" class="accordion-group" >
        <div class="card" >
            <div class="card-header accordion-header" data-toggle="collapse" data-target="#Accordion011Page1" role="tab">
                <i class='material-icons '>playlist_add_check</i>  Suggestion 1 <span class="expand text-muted">+</span>
            </div>
            <div id="Accordion011Page1" class="collapse show" data-parent="#Comp-1-Accordion-Group">
                <div class=" "><div>
                    An emphasis on leadership, broader global knowledge and passion for success are the hallmarks of Nigeria. Polytechnic. - Lawal Toheeb
                    Q: How can I apply for vocational training in the United States? 
                    A: U.S. institutions cannot issue I-20 forms for non-degree study, including vocational training. Community colleges offer technical/vocational study for an associate's degree.
                    Q: What’s the best general advice for an incoming student?
                    A: Attend the closest EducationUSA advising center's predeparture orientation. Then, when you arrive on campus, attend all orientation meetings scheduled at your college or university.
                </div>
            </div>
        </div>
    </div>
    <div class="card" >
        <div class="card-header accordion-header" data-toggle="collapse" data-target="#Accordion011Page2" role="tab">
            <i class='material-icons '>playlist_add_check</i>  Suggestion2 <span class="expand text-muted">+</span>
        </div>
        <div id="Accordion011Page2" class="collapse " data-parent="#Comp-1-Accordion-Group">
            <div class=" "><div>
                An emphasis on leadership, broader global knowledge and passion for success are the hallmarks of Nigeria. Polytechnic. - Lawal Toheeb
            </div>
        </div>
    </div>
</div>
<div class="card" >
    <div class="card-header accordion-header" data-toggle="collapse" data-target="#Accordion011Page3" role="tab">
        <i class='material-icons '>playlist_add_check</i>  Suggestion 3 <span class="expand text-muted">+</span>
    </div>
    <div id="Accordion011Page3" class="collapse " data-parent="#Comp-1-Accordion-Group">
        <div class=" "><div>
            An emphasis on leadership, broader global knowledge and passion for success are the hallmarks of Nigeria. Polytechnic. - Lawal Toheeb
        </div>
    </div>
</div>
</div>
<div class="card" >
    <div class="card-header accordion-header" data-toggle="collapse" data-target="#Accordion011Page4" role="tab">
        <i class='material-icons '>playlist_add_check</i>  Suggestion 4 <span class="expand text-muted">+</span>
    </div>
    <div id="Accordion011Page4" class="collapse " data-parent="#Comp-1-Accordion-Group">
        <div class=" "><div>
            An emphasis on leadership, broader global knowledge and passion for success are the hallmarks of Nigeria. Polytechnic. - Lawal Toheeb
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
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
