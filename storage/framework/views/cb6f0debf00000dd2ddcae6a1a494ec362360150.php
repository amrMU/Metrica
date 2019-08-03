<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php $__currentLoopData = $site_maps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $map): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <url>
            <loc>URL : <?php echo e($map->url); ?></loc>
            <lastmod>lastModificationDate: <?php echo e($map->lastModificationDate->tz('UTC')->toAtomString()); ?></lastmod>
            <changefreq>changeFrequency: <?php echo e(@$map->changeFrequency); ?></changefreq>
            <priority>priority: <?php echo e(@$map->priority); ?></priority>
        </url>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</urlset>