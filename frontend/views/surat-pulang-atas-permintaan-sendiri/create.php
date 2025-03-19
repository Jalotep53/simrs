<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratPulangAtasPermintaanSendiri $model */

$this->title = 'Create Surat Pulang Atas Permintaan Sendiri';
$this->params['breadcrumbs'][] = ['label' => 'Surat Pulang Atas Permintaan Sendiris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-pulang-atas-permintaan-sendiri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
