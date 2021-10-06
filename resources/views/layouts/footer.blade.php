
<footer class="footer text-right">
    2021 © Md. Yousuf Hossain
</footer>

</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->




</div>
<!-- END wrapper -->
<script>
    $(document).ready(function(){
        $(document).on('click','#delete',function(){
            var actionTo= $(this).attr('href');
            var token = $(this).attr('data-token');
            var id=$(this).attr('data-id');
            swal({
                title: "Are You Sure?",
                type: "success",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm){
                if(isConfirm){
                    $.ajax({
                        url:actionTo,
                        type:'post',
                        data: {id:id,_token:token},
                        success: function(data){
                            swal({
                                title: "Deleted!",
                                type: "success"
                            },
                            function(isConfirm){
                                if(isConfirm){
                                    $('.'+id).fadeOut();
                                }
                            });
                        }
                    });
                }else{
                    swal("Cancelled","","error")
                }
            });
            return false;
        });
    });
</script>


<script>
var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{asset('/backend')}}/js/bootstrap.min.js"></script>
<script src="{{asset('/backend')}}/js/waves.js"></script>
<script src="{{asset('/backend')}}/js/wow.min.js"></script>
<script src="{{asset('/backend')}}/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="{{asset('/backend')}}/js/jquery.scrollTo.min.js"></script>

<!-- sweet alerts -->
<script src="{{asset('/backend')}}/assets/sweet-alert/sweet-alert.min.js"></script>
<script src="{{asset('/backend')}}/assets/sweet-alert/sweet-alert.init.js"></script>


<!-- CUSTOM JS -->
<script src="{{asset('/backend')}}/js/jquery.app.js"></script>

<!-- Dashboard -->
<script src="{{asset('/backend')}}/js/jquery.dashboard.js"></script>

<!-- Chat -->
<script src="{{asset('/backend')}}/js/jquery.chat.js"></script>

<!-- Todo -->
<script src="{{asset('/backend')}}/js/jquery.todo.js"></script>

<script type="text/javascript">
/* ==============================================
Counter Up
=============================================== */
jQuery(document).ready(function($) {
$('.counter').counterUp({
    delay: 100,
    time: 1200
});
});
</script>


</body>
</html>
