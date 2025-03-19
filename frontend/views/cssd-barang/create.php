<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\CssdBarang $model */

$this->title = 'Create Cssd Barang';
$this->params['breadcrumbs'][] = ['label' => 'Cssd Barangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cssd-barang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
