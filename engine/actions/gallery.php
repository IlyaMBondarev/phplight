<?php 

require DOCROOT . '/engine/db.php';



if(isset($_GET['id']) && is_numeric($_GET['id'])){

    $item = dbGetRow('select * from sources where id = '. (int)$_GET['id']  .';');
    $itemReplies = dbGetAll('select * from replies where id_img = '. (int)$_GET['id']  .';') ? dbGetAll('select * from replies where id_img = '. (int)$_GET['id']  .';') : [];

    if(!$item){
        abort(404);
    }

    $title = $item['name'] . ' картинка';

    if(isset($_GET['action']) && is_string($_GET['action']) && $_GET['action'] === 'addComment'){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $errors =[];

            $validateRules = [
                'name' => 'required',
                'content' => 'required',
            ];

            $post = [];

            foreach ($_POST as $key => $value) {
                $post[$key] = dbEscape($value);
            }

            foreach ($validateRules as $key => $value) {
                if(!array_get($post, $key)) {
                    $errors[$key] = 'Поле обязательно для заполнения!';
                }
            }

            if ($errors) {
                $content = view('pages/gallery_item', ['item' => $item, 'itemReplies' => $itemReplies, 'errors' => $errors]);

                return require TPL_PATH . 'layout.php';
            }

            unset($_POST);
            unset($_GET);

            $_GET['id'] = $item['id'];

            $update = dbUpdateRow('insert into `replies` (`id_img`, `name`, `content`) values (\'' . $item['id'] . '\', \'' . $post['name']. '\', \'' . $post['content'] . '\');');

            header("Location: ".$_SERVER['REQUEST_URI']);
        }
    }

    $itemReplies = dbGetAll('select * from replies where id_img = '. (int)$_GET['id']  .';') ? dbGetAll('select * from replies where id_img = '. (int)$_GET['id']  .';') : [];

    $item['views'] += 1;

    $update = dbUpdateRow('update sources set views = ' . $item['views'] . ' where sources.id = ' . $item['id'] . ';');

	$content = view('pages/gallery_item', ['item' => $item, 'itemReplies' => $itemReplies]);

	return require TPL_PATH . 'layout.php';

}

$title = 'Галерея';

$data = dbGetAll('select * from sources;');

usort ($data, 'views_sort');

$content = view('pages/gallery', ['gallery' => $data]);

require TPL_PATH . 'layout.php';
