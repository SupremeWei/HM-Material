<div class="col-md-9" name="productContent">
    <div class="nav-block">
        <!-- Tab Content -->
        <div class="tab-content">
            <!-- Tab Pane -->
            @foreach($ledImages as $image)
                <div class="tab-pane fade" id="tab-{{ $image->image_seq }}">
                    <!-- Tab Pane Image -->
                    <div class="tab-pane-img">
                        <!-- Image -->
                        <?php $item_cod = $image->item_code; ?>
                        <?php $image_name = $image->image_name; ?>
                        <a href="#">
                            <img src="<?php echo url("/images/$item_cod/$image_name"); ?>" alt="" class="img-responsive">
                        </a>
                    </div>
                </div>
            @endforeach
            <div id="owl-product" class="owl-carousel owl-theme">
                @foreach($ledImages as $image)
                    <div class="item">
                        <?php $item_cod = $image->item_code; ?>
                        <?php $image_name = $image->image_name; ?>
                        <a data-toggle="tab" href="#tab-{{ $image->image_seq }}">
                            <img src="<?php echo url("/images/$item_cod/$image_name");?>" alt='Owl Image'>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

        <div class="panel panel-sea margin-bottom-40">
            @foreach ($ledGroupTitle as $groupTitle)
                <div class="panel-heading">
                    <h3 class="panel-title">
                        {{ $groupTitle->title }}
                    </h3>
                </div>
                <table class="table table-striped">
                    <tr>
                        <th>PDF Document</th>
                        <th>PDF Files</th>
                        @if ($loginAdmin)
                            <th>PDF Upload</th>
                        @endif
                    </tr>
                    @foreach($ledGroupItems->GroupLinkItems as $items)
                        @if ($groupTitle->id == $items->group_id)
                        <tr>
                            @if ($loginAdmin)
                                <td class="col-md-4">{{ $items->spec_description }}</td>
                            @else
                                <td class="col-md-8">{{ $items->spec_description }}</td>
                            @endif
                            <td class="col-md-1">
                                @if ($items->spec_pdf_dir == '')
                                    <p>No PDFs</p>
                                @else
                                    <a target="_blank" href="hm_file/{{$items->spec_pdf_dir}}/{{$items->spec_pdf_file_name}}"><i class="fa fa-file-pdf-o fa-2x" ></i></a>
                                @endif

                            </td>
                            @if ($loginAdmin)
                            <td class="col-md-7">
                                {!! Form::open(array('name' => "pick-$items->group_items_id", 'class'=> 'sky-form', 'url' => "/product/uploadPdf/$items->group_id/$items->group_items_id", 'method'=>'POST', 'files' => true)) !!}
                                <label for="file" class="input input-file">
                                    <div class="button"><input id="file" onchange="this.parentNode.nextSibling.value = this.value" type="file" name="pdf">Browse</div><input readonly="" type="text">
                                </label>
                                <button type="button" class="button" name="putfile"
                                        data-toggle="modal"
                                        data-product_token="{{ csrf_token() }}"
                                        data-product_name="{{ $items->spec_description }}"
                                        data-product_pickItem="pick-{{ $items->group_items_id}}"
                                        data-product_url="{{ url("/product/uploadPdf/$items->group_id/$items->group_items_id") }}">上傳
                                </button>
                                {!! Form::close() !!}
                            </td>
                            @endif
                        </tr>
                        @endif
                    @endforeach
                </table>
            @endforeach
        </div>
</div>

<script>
    var owl = $("#owl-product");

    owl.owlCarousel({
        autoPlay: true,
        slideSpeed : 300,
        paginationSpeed : 400,
        stopOnHover: true,
        navigation : true,
        navigationText: ["前一張", "後一張"],
        pagination: true,
        mouseDrag: true,
        touchDrag: true
    });
    
    $("[name='putfile']").click(function (e) {
        var product_url = $(this).attr("data-product_url");
        var product_name = $(this).attr("data-product_name");
        var formPick = $(this).attr("data-product_pickItem");

        swal({
            title: "上傳 PDF 檔案",
            text: "確定把舊的pdf檔名" + product_name + " 給刪除, 並換上新的",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "是, 確定更換",
            cancelButtonText: "否, 取消更換",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function (isConfirm) {
            if (isConfirm) {
                $.ajax({
                    type: "POST",
                    url: product_url,
                    data: new FormData($("[name='" + formPick + "']")[0]),
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        swal("Okay", "PDF上傳成功", "success")
                    },
                    error: function (response) {
                        swal("錯誤", "上傳檔案類型必須為：PDF", "error");
                    }
                });
            } else {
                swal("取消更換", "並未執行換上新PDF檔案", "error");
            }
        });
    });
</script>