<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPersetujuanRawatInap $model */

$this->title = 'Create Surat Persetujuan Rawat Inap';
$this->params['breadcrumbs'][] = ['label' => 'Surat Persetujuan Rawat Inaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-persetujuan-rawat-inap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
