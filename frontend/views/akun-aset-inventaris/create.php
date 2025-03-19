<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AkunAsetInventaris $model */

$this->title = 'Create Akun Aset Inventaris';
$this->params['breadcrumbs'][] = ['label' => 'Akun Aset Inventaris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akun-aset-inventaris-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
