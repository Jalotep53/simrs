<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetOtomatisTindakanRalanDokterpetugas $model */

$this->title = 'Create Set Otomatis Tindakan Ralan Dokterpetugas';
$this->params['breadcrumbs'][] = ['label' => 'Set Otomatis Tindakan Ralan Dokterpetugas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-otomatis-tindakan-ralan-dokterpetugas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
