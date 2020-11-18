<div style="display: flex; flex-wrap: wrap">
    <?php foreach ($gallery as $item): ?>
    <a href="/gallery/?id=<?= $item['id'] ?>" style="display: block; margin: 15px;"><img src="<?= '/' . $item['src'] ?>" alt="photo"></a>
    <?php endforeach; ?>
</div>
