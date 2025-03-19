<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\TransferPasienAntarRuang $model */

$this->title = 'Create Transfer Pasien Antar Ruang';
$this->params['breadcrumbs'][] = ['label' => 'Transfer Pasien Antar Ruangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transfer-pasien-antar-ruang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
