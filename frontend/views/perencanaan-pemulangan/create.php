<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PerencanaanPemulangan $model */

$this->title = 'Create Perencanaan Pemulangan';
$this->params['breadcrumbs'][] = ['label' => 'Perencanaan Pemulangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perencanaan-pemulangan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
