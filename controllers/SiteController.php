<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\SignupForm;
use app\models\Auth;
use app\models\User;
use yii\authclient\OAuth2;
use yii\imagine\Image;

class SiteController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
            'auth' => [
                'class' => 'yii\authclient\AuthAction',
                'successCallback' => [$this, 'onAuthSuccess'],
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login())
        {
            return $this->goBack();
        } else
        {
            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail']))
        {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else
        {
            return $this->render('contact', [
                        'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()))
        {
            if ($user = $model->signup())
            {
                if (Yii::$app->getUser()->login($user))
                {
                    return $this->goHome();
                }
            }
        }
        return $this->render('signup', [
                    'model' => $model,
        ]);
    }

    public function actionSeo($parametrel = "", $parametrel2 = "")
    {
        echo $parametrel;
        echo $parametrel2;
    }

    public function onAuthSuccess($client)
    {
        $attributes = $client->getUserAttributes();

        /** @var Auth $auth */
        $auth = Auth::find()->where([
                    'source' => $client->getId(),
                    'source_id' => $attributes['id'],
                ])->one();

        if (Yii::$app->user->isGuest)
        {
            if ($auth)
            { // login
                $user = $auth->user;
                Yii::$app->user->login($user);
            } else
            { // signup
                if (isset($attributes['email']) && isset($attributes['username']) && User::find()->where(['email' => $attributes['email']])->exists())
                {
                    Yii::$app->getSession()->setFlash('error', [
                        Yii::t('app', "User with the same email as in {client} account already exists but isn't linked to it. Login using email first to link it.", ['client' => $client->getTitle()]),
                    ]);
                } else
                {
                    $password = Yii::$app->security->generateRandomString(6);

                    $user = new User([
                        'username' => $attributes['last_name'] . $attributes['first_name'],
                        'email' => $attributes['email'],
                        'password' => $password,
                        'password_repeat' => $password,
                    ]);
                    $user->generaAuthKey();
                    $user->generatePasswordResetToken();
                    $transaction = $user->getDb()->beginTransaction();

                    if ($user->save(FALSE))
                    {
                        //  echo 'xu';die;
                        $auth = new Auth([
                            'user_id' => $user->id,
                            'source' => $client->getId(),
                            'source_id' => (string) $attributes['id'],
                        ]);
                        if ($auth->save())
                        {
                            $transaction->commit();
                            Yii::$app->user->login($user);
                        } else
                        {
                            print_r($auth->getErrors());
                        }
                    } else
                    {
                        print_r($user->getErrors());
                    }
                }
            }
        } else
        { // user already logged in
            if (!$auth)
            { // add auth provider
                $auth = new Auth([
                    'user_id' => Yii::$app->user->id,
                    'source' => $client->getId(),
                    'source_id' => $attributes['id'],
                ]);
                $auth->save();
            }
        }
    }

    public function actionLoginAjax()
    {
        if (!\Yii::$app->user->isGuest)
        {
            return 'successful';
        }
        $model = new LoginForm();
//        if ($model->load(Yii::$app->request->post())) {
        $data = array();
        $post = Yii::$app->request->post();
        if ($post['username'] == null)
        {

            return 'user_name_null';
        }
        if ($post['password'] == null)
        {
            return 'password_name_null';
        }
        $model->username = $post['username'];
        $model->password = $post['password'];
        $user = User::findByUsername($model->username);
        if ($user == null)
        {
            return 'user_not_exist';
        } else
        {
            if ($model->login())
            {
                return 'successful';
            } else
            {
                return 'password_exist';
            }
        }
    }

    public function actionTest()
    {
        $amount = 123456789;
        if ($amount <= 0)
        {
            return $textnumber = "Tiền phải là số nguyên dương lớn hơn số 0";
        }
        $Text = array("không", "một", "hai", "ba", "bốn", "năm", "sáu", "bảy", "tám", "chín");
        $TextLuythua = array("", "nghìn", "triệu", "tỷ", "ngàn tỷ", "triệu tỷ", "tỷ tỷ");
        $textnumber = "";
        $length = strlen($amount);

        for ($i = 0; $i < $length; $i++)
            $unread[$i] = 0;

        for ($i = 0; $i < $length; $i++)
        {
            $so = substr($amount, $length - $i - 1, 1);

            if (($so == 0) && ($i % 3 == 0) && ($unread[$i] == 0))
            {
                for ($j = $i + 1; $j < $length; $j ++)
                {
                    $so1 = substr($amount, $length - $j - 1, 1);
                    if ($so1 != 0)
                        break;
                }

                if (intval(($j - $i ) / 3) > 0)
                {
                    for ($k = $i; $k < intval(($j - $i) / 3) * 3 + $i; $k++)
                        $unread[$k] = 1;
                }
            }
        }

        for ($i = 0; $i < $length; $i++)
        {
            $so = substr($amount, $length - $i - 1, 1);

            if ($unread[$i] == 1)
                continue;

            if (($i % 3 == 0) && ($i > 0))
                $textnumber = $TextLuythua[$i / 3] . " " . $textnumber;

            if ($i % 3 == 2)
                $textnumber = 'trăm ' . $textnumber;
            if ($i % 3 == 1)
                $textnumber = 'mươi ' . $textnumber;
            $textnumber = $Text[$so] . " " . $textnumber;
        }


        //Phai de cac ham replace theo dung thu tu nhu the nay
        $textnumber = str_replace("không mươi", "lẻ", $textnumber);
        $textnumber = str_replace("lẻ không", "", $textnumber);
        $textnumber = str_replace("mươi không", "mươi", $textnumber);
        $textnumber = str_replace("một mươi", "mười", $textnumber);
        $textnumber = str_replace("mươi năm", "mươi lăm", $textnumber);
        $textnumber = str_replace("mươi một", "mươi mốt", $textnumber);
        $textnumber = str_replace("mười năm", "mười lăm", $textnumber);


        var_dump(ucfirst($textnumber . " đồng"));
        die;
        return ucfirst($textnumber . " đồng chẵn");
    }

    public function actionNumber()
    {
        $so = 109000000;
        var_dump($this->product_price($so)); die;
    }

    function product_price($priceFloat)
    {
        $symbol = 'đ';
        $symbol_thousand = '.';
        $decimal_place = 0;
        $price = number_format($priceFloat, $decimal_place, '', $symbol_thousand);
        return $price . $symbol;
    }

    public function actionThumb()
    {
        Image::thumbnail('@app/web\upload\product/1446027360_14434952941174681974.png', 300, 300)
                ->save(Yii::getAlias('@runtime/thumb-test-image2.jpg'), ['quality' => 80]);
    }

}
