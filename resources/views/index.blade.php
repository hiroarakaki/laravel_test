<x-layout>
    <x-slot name="title">
        laravel test
    </x-slot>
    <h1>
        <span>laravel test</span>
        <a href="{{ route('posts.create') }}">[Add]</a>
    </h1>
        <ul>
            @forelse ($posts as $post)
                <li>
                    <a href="{{ route('posts.show', $post->id) }}">
                        {{ $post->title }}
                    </a>
                </li>
            @empty
                <li>no post yet test03</li>
            @endforelse
        </ul>
</x-layout>