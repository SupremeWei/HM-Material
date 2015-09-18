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

    <div class="well">
        <table class="table table-striped table-hover ">
            @foreach ($ledGroupTitle as $groupTitle)
            <thead>
                <tr>
                    <th>{{ $groupTitle->title }}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($ledGroupItems->GroupLinkItems as $items)
                    @if ($groupTitle->id == $items->group_id)
                    <tr class="info">
                        <td>{{ $items->spec_description }}</td>
                        <td>
                            <a target="_blank"><i class="fa fa-file-pdf-o fa-2x" ></i></a>
                        </td>
                    </tr>
                    @endif
                @endforeach
            </tbody>
            @endforeach
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