<?php
/* SVN FILE: $Id$ */
/**
 * [ADMIN] パスワードリセット画面
 *
 * PHP versions 5
 *
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2011, baserCMS Users Community <http://sites.google.com/site/baserusers/>
 *
 * @copyright		Copyright 2008 - 2011, baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			baser.views
 * @since			baserCMS v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
?>


<div class="section">
<p>パスワードを忘れた方は、登録されているメールアドレスを送信してください。<br />
新しいパスワードをメールでお知らせします。</p>
<?php echo $formEx->create('User', array('action' => 'reset_password', 'url' => array($this->params['prefix'] => true))) ?>
<div class="submit">
<?php echo $formEx->input('User.email', array('type' => 'text', 'size' => 60)) ?>
<?php echo $formEx->submit('送信', array('div' => false, 'class' => 'btn-red button')) ?>
</div>
<?php echo $formEx->end() ?>
</div>