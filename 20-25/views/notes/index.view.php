<?php view('partials/head.php') ?>
<?php view('partials/nav.php') ?>
<?php view('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <?php foreach ($notes as $note): ?>
            <li>
                <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                    <?= $note['body'] ?>
                </a>
            </li>
        <?php endforeach; ?>
        <p class="mt-6 text-blue-600 hover:underline">
            <a href="/notes/create" class="mt-6">Create Note</a>
        </p>
    </div>
</main>

<?php view('partials/footer.php') ?>