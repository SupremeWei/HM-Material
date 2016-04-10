<div class="col-md-9" name="productContent">
    @foreach ($groupDcUseItems->GroupLinkDcUseItems as $items)
    <div class="row margin-bottom-20">
        <div class="col-sm-3 sm-margin-bottom-20">
            <img class="img-responsive" src="<?php echo url("/images/dc-use/$items->image");?>">
        </div>
        <?php $checkAdminAutoFieldSize = ($loginAdmin) ? 4 : 7; ?>
        <div class="col-sm-{{ $checkAdminAutoFieldSize }} news-v3">
            <div class="news-v3-in-sm no-padding">
                <h4>TYPE</h4><p>{{ $items->type }}</p>
                <h4>Dielectric</h4><p>{{ $items->Dielectric }}</p>
                <h4>Description</h4><p>{{ $items->Description }}</p>
                <h4>Capacitance range</h4><p>{{ $items->CapacitanceRange }}</p>
                <h4>Rated voltage range</h4><p>{{ $items->RatedVoltageRange }}</p>
            </div>
        </div>
        <?php $checkAdminAutoFieldSize = ($loginAdmin) ? 5 : 2; ?>
        <div class="col-sm-{{ $checkAdminAutoFieldSize }} sm-margin-bottom-20">
            <h3>PDFs</h3>
            @foreach($pdfGroupItems->GroupLinkItems as $pdfKey => $pdfValue)
                <?php $specName = $pdfValue->spec_name; ?>
                @if ($specName == $items->type)
                    <?php $specPdfDir = $pdfValue->group_id; ?>
                    <?php $specPdfItemsId = $pdfValue->group_items_id; ?>
                    <?php $specFileName = $pdfValue->spec_pdf_file_name; ?>
                    <?php $specDescription = $pdfValue->spec_description; ?>
                @endif
            @endforeach
                @if ($specFileName == '')
                    <p>No PDFs</p>
                @else
                    <a target="_blank" href="hm_file/{{ $specPdfDir }}/{{ $specPdfItemsId }}"><i class="fa fa-file-pdf-o fa-4x" ></i></a>
                @endif
                @if ($loginAdmin)
                    <td class="col-md-7">
                        {!! Form::open(array('name' => "pick-$specPdfItemsId", 'class'=> 'sky-form', 'url' => "/product/uploadPdf/$specPdfDir/$specPdfItemsId", 'method'=>'POST', 'files' => true)) !!}
                        <label for="file" class="input input-file">
                            <div class="button"><input id="file" onchange="this.parentNode.nextSibling.value = this.value" type="file" name="pdf">Browse</div><input readonly="" type="text">
                        </label>
                        <button type="button" class="button" name="putfile"
                                data-toggle="modal"
                                data-product_token="{{ csrf_token() }}"
                                data-product_name="{{ $specDescription }}"
                                data-product_pickItem="pick-{{ $specPdfItemsId }}"
                                data-product_url="{{ url("/product/uploadPdf/$specPdfDir/$specPdfItemsId") }}">上傳
                        </button>
                        {!! Form::close() !!}
                    </td>
                @endif

        </div>
    </div><!--/end row-->
    <!-- End News v3 -->

    <div class="clearfix margin-bottom-20"><hr></div>
    @endforeach
</div>

<script>
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
                                $("#"+'<?php echo trim($type_code);?>').click();
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