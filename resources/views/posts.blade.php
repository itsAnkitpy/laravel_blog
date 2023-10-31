<x-layout>

    <?php foreach($posts as $post): ?>
    <article>
        <h1>
            <a href="/posts/<?= $post->slug ?>">
                <?= $post->title ?>
            </a>

            <div>
                <?= $post->excerpt ?>
            </div>
        </h1>
    </article>
    <?php endforeach; ?>

</x-layout>

