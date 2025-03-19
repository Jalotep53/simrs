<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PengajuanBiaya $model */

$this->title = 'Create Pengajuan Biaya';
$this->params['breadcrumbs'][] = ['label' => 'Pengajuan Biayas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengajuan-biaya-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
