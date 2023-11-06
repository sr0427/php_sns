<?php
require_once "../../env.php";

$userId = 1; // ユーザーID
$likeCount = getLikeCountFromDatabase($userId); // データベースから「いいね」の数を取得

$controller = new ApiController();
$controller->likeCount($likeCount); // 「いいね」の数を渡してメソッドを呼び出す
