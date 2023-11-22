<div >

    @foreach($community as $item)

        <x-public.slice-item-display :item="$item"/>

    @endforeach

</div>