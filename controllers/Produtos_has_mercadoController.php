<?php

namespace app\controllers;

use app\models\Produtos_has_mercado;
use app\models\Produtos_has_mercadoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Produtos_has_mercadoController implements the CRUD actions for Produtos_has_mercado model.
 */
class Produtos_has_mercadoController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Produtos_has_mercado models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Produtos_has_mercadoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Produtos_has_mercado model.
     * @param int $Produtos_idProdutos Produtos Id Produtos
     * @param int $Mercado_idMercado Mercado Id Mercado
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Produtos_idProdutos, $Mercado_idMercado)
    {
        return $this->render('view', [
            'model' => $this->findModel($Produtos_idProdutos, $Mercado_idMercado),
        ]);
    }

    /**
     * Creates a new Produtos_has_mercado model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Produtos_has_mercado();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Produtos_idProdutos' => $model->Produtos_idProdutos, 'Mercado_idMercado' => $model->Mercado_idMercado]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Produtos_has_mercado model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Produtos_idProdutos Produtos Id Produtos
     * @param int $Mercado_idMercado Mercado Id Mercado
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Produtos_idProdutos, $Mercado_idMercado)
    {
        $model = $this->findModel($Produtos_idProdutos, $Mercado_idMercado);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Produtos_idProdutos' => $model->Produtos_idProdutos, 'Mercado_idMercado' => $model->Mercado_idMercado]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Produtos_has_mercado model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Produtos_idProdutos Produtos Id Produtos
     * @param int $Mercado_idMercado Mercado Id Mercado
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Produtos_idProdutos, $Mercado_idMercado)
    {
        $this->findModel($Produtos_idProdutos, $Mercado_idMercado)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Produtos_has_mercado model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Produtos_idProdutos Produtos Id Produtos
     * @param int $Mercado_idMercado Mercado Id Mercado
     * @return Produtos_has_mercado the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Produtos_idProdutos, $Mercado_idMercado)
    {
        if (($model = Produtos_has_mercado::findOne(['Produtos_idProdutos' => $Produtos_idProdutos, 'Mercado_idMercado' => $Mercado_idMercado])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
