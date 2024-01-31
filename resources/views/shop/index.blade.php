<x-app-layout>

    <h1 style="color: white;">Shop</h1>

    @foreach ($items as $item)
        <div style="flex">
            <div class="text-white">{{ $item->name }}</div>
            <img src="{{ asset($item->picture) }}" alt="{{ $item->name }}" style="max-width: 200px;">
            <a href="#">
                <button style="width: 100px; height: 100px; border-radius: 5px; background-color: red;">Kopen</button>
            </a>
        </div>
    @endforeach

</x-app-layout>
