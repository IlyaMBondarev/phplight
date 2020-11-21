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
<form action="/gallery/?id=<?= $item['id'] ?>&action=addComment" method="post" style="padding: 30px;display: flex;flex-direction: column;text-align: center;max-width: 70%;margin: 0 auto;">
    <label style="margin-top: 15px;">Ваше имя:</label>
    <input type="text" name="name" value="" style="margin-top: 15px;">
    <?php if(isset($errors['name'])): ?>
        <p style="color: red;"><?= $errors['name'] ?></p>
    <?php endif ?>
    <label style="margin-top: 15px;">Ваш комментарий:</label>
    <textarea name="content" style="margin-top: 15px;min-height: 150px;"></textarea>
    <?php if(isset($errors['content'])): ?>
        <p style="color: red;"><?= $errors['content'] ?></p>
    <?php endif ?>
    <button type="submit" style="margin: 15px auto 0; width: 150px;">Отправить</button>
</form>