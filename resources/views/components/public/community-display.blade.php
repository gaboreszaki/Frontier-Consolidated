<div class="container-fluid">

    @foreach($community as $item)

        <x-public.slice-item-display :item="$item"/>

    @endforeach

</div>