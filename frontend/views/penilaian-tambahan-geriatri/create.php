<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianTambahanGeriatri $model */

$this->title = 'Create Penilaian Tambahan Geriatri';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Tambahan Geriatris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-tambahan-geriatri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
