<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PemeliharaanInventaris $model */

$this->title = 'Create Pemeliharaan Inventaris';
$this->params['breadcrumbs'][] = ['label' => 'Pemeliharaan Inventaris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemeliharaan-inventaris-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
