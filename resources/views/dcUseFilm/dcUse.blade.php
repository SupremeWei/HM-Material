<div class="col-md-9" name="productContent">
    @foreach ($groupItems->GroupLinkDcUseItems as $items)
    <div class="row margin-bottom-20">
        <div class="col-sm-3 sm-margin-bottom-20">
            <img class="img-responsive" src="<?php echo url("/images/dc-use/$items->image");?>">
        </div>
        <div class="col-sm-7 news-v3">
            <div class="news-v3-in-sm no-padding">
                <h4>TYPE</h4><p>{{ $items->type }}</p>
                <h4>Dielectric</h4><p>{{ $items->Dielectric }}</p>
                <h4>Description</h4><p>{{ $items->Description }}</p>
                <h4>Capacitance range</h4><p>{{ $items->CapacitanceRange }}</p>
                <h4>Rated voltage range</h4><p>{{ $items->RatedVoltageRange }}</p>
            </div>
        </div>
        <div class="col-sm-2 sm-margin-bottom-20">
            <h3>相關文件</h3>
            <i class="fa fa-file-pdf-o fa-4x" ></i>
        </div>
    </div><!--/end row-->
    <!-- End News v3 -->

    <div class="clearfix margin-bottom-20"><hr></div>
    @endforeach
</div>