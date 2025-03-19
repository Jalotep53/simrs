<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetAkunMandiri $model */

$this->title = 'Create Set Akun Mandiri';
$this->params['breadcrumbs'][] = ['label' => 'Set Akun Mandiris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-akun-mandiri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
