<x-layout>
    <x-slot name="title">
        laravel test
    </x-slot>
    <h1>laravel test</h1>
        <ul>
            @forelse ($posts as $index => $post)
                <li>
                    <a href="{{ route('posts.show', $index) }}">
                        {{ $post }}
                    </a>
                </li>
            @empty
                <li>no post yet test03</li>
            @endforelse
        </ul>
</x-layout>