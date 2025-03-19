<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetHariLibur $model */

$this->title = 'Create Set Hari Libur';
$this->params['breadcrumbs'][] = ['label' => 'Set Hari Liburs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-hari-libur-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
