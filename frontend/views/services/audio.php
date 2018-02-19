<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23.01.2018
 * Time: 10:55
 */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\widgets\AudioFormWidget;
?>

<?=
$this->title = 'AudioNotepad ';

$this->params['breadcrumbs'][] = [
//'template' => "<li><b>{link}</b></li>\n", // шаблон для этой ссылки
'label' => 'Online services', // название ссылки
'url' => ['/services/index'] // сама ссылка
];
$this->params['breadcrumbs'][] = $this->title;


?>


<!-- Викликаєм Частину коду з віджету  -->
<?= AudioFormWidget::widget([]) ?>


<div class="site-about">

    <p>This is the 'AudioNotepad' page. You may modify the following file to customize its content:</p>
    <code><?= __FILE__ ?></code>


</div>
