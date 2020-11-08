    <!-- jquery
  ============================================ -->
    <script src="/backend/dashboard/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
            ============================================ -->
    <script src="/backend/dashboard/js/bootstrap.min.js"></script>
    <!-- wow JS
            ============================================ -->
    <script src="/backend/dashboard/js/wow.min.js"></script>
    <!-- price-slider JS
            ============================================ -->
    <script src="/backend/dashboard/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
            ============================================ -->
    <script src="/backend/dashboard/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
            ============================================ -->
    <script src="/backend/dashboard/js/owl.carousel.min.js"></script>
    <!-- sticky JS
            ============================================ -->
    <script src="/backend/dashboard/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
            ============================================ -->
    <script src="/backend/dashboard/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
            ============================================ -->
    <script src="/backend/dashboard/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/backend/dashboard/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
            ============================================ -->
    <script src="/backend/dashboard/js/metisMenu/metisMenu.min.js"></script>
    <script src="/backend/dashboard/js/metisMenu/metisMenu-active.js"></script>
    <!-- sparkline JS
            ============================================ -->
    <script src="/backend/dashboard/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="/backend/dashboard/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
            ============================================ -->
    <script src="/backend/dashboard/js/calendar/moment.min.js"></script>
    <script src="/backend/dashboard/js/calendar/fullcalendar.min.js"></script>
    <script src="/backend/dashboard/js/calendar/fullcalendar-active.js"></script>
    <!-- float JS
            ============================================ -->
    <script src="/backend/dashboard/js/flot/jquery.flot.js"></script>
    <script src="/backend/dashboard/js/flot/jquery.flot.resize.js"></script>
    <script src="/backend/dashboard/js/flot/curvedLines.js"></script>
    <script src="/backend/dashboard/js/flot/flot-active.js"></script>
    <!-- plugins JS
            ============================================ -->
    <script src="/backend/dashboard/js/plugins.js"></script>
    <!-- main JS
            ============================================ -->
    <script src="/backend/dashboard/js/main.js"></script>
    <script src="/ckeditor/ckeditor.js"></script>
    <!-- CKEDITOR   
            ============================================ -->
    <script type="text/javascript">
        CKEDITOR.replace('ckeditor');

    </script>
    <!-- Sweet Alert   
            ============================================ -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.btn-delete').click(function(e) {
                e.preventDefault();
                let id = $(this).attr('data-id');
                Swal.fire({
                    title: 'Bạn có chắc chắn muốn xóa không ?',
                    text: "Dữ liệu bị xóa không thể phục hồi!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Xóa',
                    cancelButtonText: 'Đóng',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'delete',
                            url: '/admin/category/' + id,
                            success: function(res) {
                                if (!res.error) {
                                    Swal.fire(
                                        'Đã xóa!',
                                        res.message,
                                        'success'
                                    );
                                    location.reload();
                                } else {
                                    console.log(res.message);
                                }
                            }
                        });
                    }
                });
            });
        });

    </script>
