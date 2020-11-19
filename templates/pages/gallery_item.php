<a href="/gallery">Вернуться</a>
<div style="height: 50vw; width: 50vw;">
<img src="<?= '/' . $item['src'] ?>" alt="photo" style="width: 100%; height: 100%;">
</div>
<p>Количество просмотров: <?= $item['views'] ?></p>
<div>
    <?php foreach ($itemReplies as $reply): ?>
    <div style="padding: 20px; border-top: 1px solid grey;">
        <p style="font-weight: bold; font-size: 30px"><?= $reply['name'] ?></p>
        <p><?= $reply['content'] ?></p>
    </div>
    <?php endforeach; ?>
</div>