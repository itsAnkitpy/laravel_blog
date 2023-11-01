<x-layout>

    <?php foreach($posts as $post): ?>
    <article>
        <h1>
            <a href="/posts/<?= $post->slug ?>">
                <?= $post->title ?>
            </a>
            <br><br>

            <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a>
            <p>By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a></p>

            <div>
                <?= $post->excerpt ?>
            </div>
        </h1>
    </article>
    <?php endforeach; ?>

</x-layout>

