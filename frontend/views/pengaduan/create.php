<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Pengaduan $model */

$this->title = 'Create Pengaduan';
$this->params['breadcrumbs'][] = ['label' => 'Pengaduans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengaduan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
