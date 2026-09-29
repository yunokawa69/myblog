<?php
// パスワード保護されている記事の場合は何も表示せずに終了する
if (post_password_required()) {
    return;
}
?>

<?php
$args = array(
    'title_reply' => 'コメントする',
    'comment_notes_before' => '<p>コメント記入欄の上に表示するメッセージ</p>',
    'comment_notes_after'  => '<p>コメント記入欄の下に表示するメッセージ</p>',
    'fields' => array(
        'author' =>
        '<p class="comment-form-author"><label for="author">名前</label><input id="author" name="author" type="text" value="" autocomplete="name"></p>',
        'email' =>
        '<p class="comment-form-email"><label for="email">メール</label><input id="email" name="email" type="email" value="" aria-describedby="email-notes" autocomplete="email"></p>',
        'url' =>
        '<p class="comment-form-url"><label for="url">サイト</label><input id="url" name="url" type="url" value="" autocomplete="url"></p>',
        'cookies' => '',
    ),
    'comment_field' =>
    '<p class="comment-form-comment"><label for="comment">コメント <span class="required">※</span></label><textarea id="comment" name="comment" cols="45" rows="8" required=""></textarea></p>',
    'submit_button' =>
    '<input name="submit" type="submit" id="submit" class="submit" value="送信">',
);

comment_form($args);
?>

<div id="comments" class="comments-area">

    <?php
    // コメント入力フォームの出力
    comment_form();
    ?>

    <?php if (have_comments()) : ?>
        <h2 class="comments-title">コメント</h2>

        <!-- コメント一覧の出力 -->
        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'       => 'ol',    // olタグでリストを出力
                'short_ping'  => true,    // ピンバックとトラックバックを短く表示
                'avatar_size' => 50,      // アバター画像のサイズ
            ));
            ?>
        </ol>
    <?php endif; ?>

</div>