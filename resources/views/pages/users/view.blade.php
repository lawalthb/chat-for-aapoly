@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('usersDetails');
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
                        {{ __('usersDetails') }}
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
                                        <div class="">
                                            <div class="">
                                                <div class="row gutter-sm">
                                                    <div class="col-2">
                                                        <img width="" height="" src="{{ getImgSizePath($data['avatar'], 'medium') }}" class="img-fluid" />
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="text-primary text-bold">
                                                        <?php echo ($data['fullname']); ?>
                                                        </h6>
                                                        <div class="text-muted"><?php echo ($data['email']); ?></div>
                                                        <small class="text-muted"><?php echo ($data['phone']); ?> </small>
                                                    </div>
                                                    <div class="col-auto">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--PageComponentEnd-->
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
                    <div class=" "><div>
                        <iframe width="80%" height="500px" src="http://localhost/support/chatarea2.php"></iframe>
                    </div>
                    </div><div class=" "><div>
                    <section >
                    </section>
                </div>
                <script>
                    $(document).ready(function(){
                    // startTimer();
                    });
                    function getChats() {
                    getText("/messages/get_user_chat");
                    async function getText(file) {
                    let myObject = await fetch(file);
                    let msgs     = await myObject.json();
                    populateMsg(msgs);
                    }
                    }
                    function populateMsg(obj) {
                    const section = document.querySelector('section');
                    const msgs = obj;
                    for (const msg of msgs) {
                    const myArticle = document.createElement('article');
                    const myH2 = document.createElement('h6');
                    const myH5 = document.createElement('h5');
                    myH2.textContent = msg.messages;
                    myH5.textContent = msg.id;
                    myArticle.appendChild(myH2);
                    myArticle.appendChild(myH5);    
                    section.appendChild(myArticle);
                    }
                    alert(animalString);
                    }
                    function startTimer(msgs) {
                    timer = setInterval(function() {
                    // alert("5 seconds are up");
                    getChats();
                    remv();
                    //alert(11); 
                    }, 5000);
                    }
                    function remv() {
                    const container = document.querySelector('section');
                    container.textContent = 'lawal new';
                    }
                </script>
            </div>
            <div class=" reset-grids">
                <?php
                    $params = ['user_id' => $data['id'],'ip_address' => $data['ip_address'],'admin_id' => "1",'department_id' => $data['department_id'],'session_id' => $data['id'],'show_header' => false]; //new query param
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

    $(document).ready(function(){
     
    });
</script>

@endsection
