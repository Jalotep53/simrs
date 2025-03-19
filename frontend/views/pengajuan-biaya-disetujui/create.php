<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PengajuanBiayaDisetujui $model */

$this->title = 'Create Pengajuan Biaya Disetujui';
$this->params['breadcrumbs'][] = ['label' => 'Pengajuan Biaya Disetujuis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengajuan-biaya-disetujui-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
