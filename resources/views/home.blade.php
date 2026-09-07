<x-layout>
    <main>
        <p class="text-center">
            Ecommerce Laravel
        </p>
        <p class="text-center">
            Bem-Vindo {{ $name }}
        </p>
        
        <p class="text-center">
            Seus produtos são:
        </p>
        <ul class="text-center">
            @foreach ($products as $item )
                <li>{{ $item }}</li>
            @endforeach
        </ul>
        
    </main>
</x-layout>