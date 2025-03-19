<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianPasienImunitasRendah $model */

$this->title = 'Create Penilaian Pasien Imunitas Rendah';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Pasien Imunitas Rendahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-pasien-imunitas-rendah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
