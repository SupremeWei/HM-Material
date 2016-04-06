<div class="col-md-9" name="productContent">
    <div class="nav-block">
        <!-- Tab Content -->
        <div class="tab-content">
            <!-- Tab Pane -->
            @foreach($getImages as $image)
                <div class="tab-pane fade" id="tab-{{ $image->item_code }}-{{ $image->image_seq }}">
                    <!-- Tab Pane Image -->
                    <div class="tab-pane-img">
                        <!-- Image -->
                        <?php $item_cod = $image->item_code; ?>
                        <?php $image_name = $image->image_name; ?>
                        <a href="#">
                            <img src="<?php echo url("/images/HPL/$image_name"); ?>" alt="" >
                        </a>
                    </div>
                </div>
            @endforeach
            <div id="owl-product" class="owl-carousel owl-theme">
                @foreach($getImages as $image)
                    <div class="item">
                        <?php $item_cod = $image->item_code; ?>
                        <?php $image_name = $image->image_name; ?>
                        <a data-toggle="tab" href="#tab-{{ $image->item_code }}-{{ $image->image_seq }}">
                            <img src="<?php echo url("/images/HPL/$image_name");?>" alt='Owl Image'>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="well">
        <table class="table table-striped table-hover ">
            <thead>
                <tr>
                    <th>Series</th>
                    <th>Applications</th>
                    <th>Spec</th>
                </tr>
            </thead>
            <tbody>
                @foreach($getDocuments as $document)
                    <tr class="info">
                        <td>{{ $document->document_seq }}</td>
                        <td>{{ $document->document_description }}</td>
                        <td>
                            <?php $document_name = $document->document_name; ?>
                            @if (! empty($document_name))
                                <a href="<?php echo url("pdf/HPL/$document_name"); ?>" target="_blank"><i class="fa fa-file-pdf-o fa-2x" ></i></a>
                            @else
                                No Pdf
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
</script>