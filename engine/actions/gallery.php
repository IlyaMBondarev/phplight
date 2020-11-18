<?php 

require DOCROOT . '/engine/db.php'; 

if(isset($_GET['id']) && is_numeric($_GET['id'])){

	$item = dbGetRow('select * from sources where id = '. (int)$_GET['id']  .';');

    $item['views'] += 1;

    $update = dbUpdateRow('update sources set views = ' . $item['views'] . ' where sources.id = ' . $item['id'] . ';');

	if(!$item){
		abort(404);
	}

	$title = $item['name'] . ' картинка';

	$content = view('pages/gallery_item', $item);

	return require TPL_PATH . 'layout.php';

}

$title = 'Галерея';

$data = dbGetAll('select * from sources;');

usort ($data, 'views_sort');

$content = view('pages/gallery', ['gallery' => $data]);

require TPL_PATH . 'layout.php';
