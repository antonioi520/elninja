
<!--?php include 'menu.php' ?>

<script>
    //$(document).ready(function(){
    //    activeTab('nav-brunch');
    //});

    activeTab('nav-brunch');
    inactiveTab('nav-all');

    function inactiveTab(allTab){
        $('#' + allTab).removeClass('active');
        //$('.tab-content .tab-pane').removeClass('active');
        //$('.nav-tabs a[href="#' + allTab + '"]').tab('hide');
    }

    function activeTab(brunchTab){
        $('#' + brunchTab).addClass('active');
        //$('.tab-content .tab-pane').addClass('active');
        $('.nav-tabs a[href="#' + brunchTab + '"]').tab('show');
    };
</script-->
