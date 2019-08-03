<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($site_maps as $map)
        <url>
            <loc>URL : {{ $map->url }}</loc>
            <lastmod>lastModificationDate: {{ $map->lastModificationDate->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>changeFrequency: {{ @$map->changeFrequency }}</changefreq>
            <priority>priority: {{ @$map->priority }}</priority>
        </url>
    @endforeach
</urlset>