<?php ($page = $apiDocument->data->attributes); ?>

<div class="container">
    <h2><?php echo e($page->title); ?></h2>

    <div>
        <?php echo $page->contentHtml; ?>

    </div>
</div>
<?php /**PATH C:\xampp\htdocs\flarum\flarum\vendor\fof\pages/resources/views/content/page.blade.php ENDPATH**/ ?>