<?php

class RegistrationController extends Controller
{
    public function action_index()
    {
        $v = new View("Registration");
        $v->title = "Registration";
        $c = new RegistrationController();
        $v->viewTemplate('main');
        //$v->auth=AuthModule::instance()->isAuth();
        $this->responce($v);
    }

    public function action_registr()
    {
        $v = new View("Registration");
        $v->title = "Registration";
        $c = new RegistrationController();
        $post_data = filter_input_array(
            INPUT_POST, [
                'FULL_NAME' => FILTER_SANITIZE_STRING,
                'Login' => FILTER_SANITIZE_STRING,
                'Email' => FILTER_SANITIZE_EMAIL,
                'Phone' => FILTER_SANITIZE_STRING,
                'Password' => FILTER_SANITIZE_STRING

            ]
        );
        if ($post_data) {
            $empty_fields = array_filter(($post_data = array_map('trim', $post_data)), function ($a) {
                return empty($a);
            });
            $cn = LoginModel::instance()->getLogin($_POST['Login'], $_POST['Email']);
            if ($cn[0] ["COUNT(*)"] != 0) {
                echo '<script type="text/javascript">
                        alert("Користувач з такими даними вже є в базі. Перевірку прошли ЛОГІН  EMAIL НОМЕР ТЕЛЕФОНА.");
                        document.location.href = "/main/";
                        </script>';
                $v->viewTemplate('main');
                $this->responce($v);
            } else {
                $ip = $_SERVER['REMOTE_ADDR'];
                $subject = "Подтверждение регистрации";
                $message = $massage= "Доброго дня! Дякуємо за реєстрацію в системі Програма реєстрації хворих на COVID 19!
 Щоб далі користуватися всіма функціями системи Вам потрібно активувати свій email. Для цього перейдіть за посиланням https://rssnews.pp.ua/register/act?login=".$post_data['login']." З повагою, Админістрація";
                mail($post_data['Email'], $subject, $message);
                $rr = password_hash($post_data['Password'], PASSWORD_DEFAULT);
                /*echo $rr;*/

                LoginModel::instance()->
                userInsert($post_data['FULL_NAME'],$post_data['Login'],$post_data['Password'],
                    $post_data['Email'],$post_data['Phone'], $ip);
            }
        }

    }
}