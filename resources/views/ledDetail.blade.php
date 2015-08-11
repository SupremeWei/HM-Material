<div class="col-md-9" name="productContent">
    <div class="well">
        <table class="table table-striped table-hover ">
            <thead>
            <tr>
                <th>Part No</th>
                <th>Material</th>
                <th>Emitted Color</th>
                <th>Lens Color</th>
                <th>Wave</br>Length λ</br>P(nm)</th>
                <th>Luminous</br>Intensity</br>If=20mA mcd</br>Min-Typ</th>
                <th>Viewing</br>Angle2 θ</br>1/2</th>
            </tr>
            </thead>
            @foreach($getInformations as $index => $informationGroup)
                <tbody>
                @foreach($informationGroup as $informationIndex => $informationData)
                    <tr class="notice">
                        @if ($informationIndex == 0)
                            <td>Dimension</td>
                            <td colspan="6">
                                <a href="<?php echo url("/images/led_images/{$getLedTypes[$index]->image_dir_name}/{$getLedTypes[$index]->item_type_image}"); ?>">
                                    <img src="<?php echo url("/images/led_images/{$getLedTypes[$index]->image_dir_name}/{$getLedTypes[$index]->item_type_image}"); ?>">
                                </a>
                            </td>
                        @endif
                    </tr>
                    <tr class="info">
                        <td>{{ $informationData->part_no }}</td>
                        <td>{{ $informationData->material }}</td>
                        <td>{{ $informationData->emitted_color }}</td>
                        <td>{{ $informationData->lens_color }}</td>
                        <td>{{ $informationData->wave_length }}</td>
                        <td>{{ $informationData->luminous_intensity }}</td>
                        <td>{{ $informationData->viewing_angle2 }}</td>
                    </tr>
                @endforeach
                </tbody>
            @endforeach
        </table>
    </div>
</div>