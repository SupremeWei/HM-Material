@if (session()->has('flash_message'))
    <script>
        swal({
            title: "{{ session('flash_message.title') }}",
            text: "{{ session('flash_message.message') }}",
            type: "{{ session('flash_message.level') }}",
            timer: 1700,
            showConfirmButton: false
        });
    </script>
@endif

@if (session()->has('flash_message_overlay'))
    <script>
        swal({
            title: "{{ session('flash_message_overlay.title') }}",
            text: "{{ session('flash_message_overlay.message') }}",
            type: "{{ session('flash_message_overlay.level') }}",
            confirmButtonText: 'Okay'
        });
    </script>
@endif

@if (session()->has('uploadPdf'))
    <script>
        alert('132');
        this.preventDefault();
        swal({
                title: "{{ session('uploadPdf.title') }}",
                text: "{{ session('uploadPdf.message') }}",
                type: "{{ session('uploadPdf.level') }}",
                showCancelButton: true,
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
            },
            function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url: "/updatePdfConfirm/1/37",
                        type: "POST",
                        data: {id: 5},
                        dataType: "html",
                        success: function () {
                            swal("Done!","It was succesfully deleted!","success");
                        }
                    });
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
        });
    </script>
@endif