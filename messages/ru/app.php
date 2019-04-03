<?php

return [
    /* Пункты главного меню */
    'NAV_HOME' => 'Главная',
    'NAV_ABOUT' => 'О сайте',
    'NAV_CONTACTS' => 'Контакты',
    'NAV_LOGIN' => 'Вход',
    'NAV_HELP' => 'Помощь',
    'NAV_DOC' => 'Документация',
    'NAV_LOGOUT' => 'Выход',
    'NAV_DIAGRAMS' => 'Диаграммы',

    /* Нижний колонтитул (подвал) */
    'FOOTER_COPYRIGHT'=>'Все права защищены',
    'FOOTER_INSTITUTE'=>'ИДСТУ СО РАН',
    'FOOTER_POWERED_BY' => 'Разработано',

    /* Общие кнопки */
    'BUTTON_ADD' => 'Добавить',
    'BUTTON_SEND' => 'Отправить',
    'BUTTON_SAVE' => 'Сохранить',
    'BUTTON_SIGN_IN' => 'Войти',
    'BUTTON_CREATE' => 'Создать',
    'BUTTON_UPDATE' => 'Обновить',
    'BUTTON_DELETE' => 'Удалить',
    'BUTTON_CANCEL' => 'Отмена',
    'BUTTON_SUBMIT' => 'Подтвеить',
    'BUTTON_LOGIN' => 'Войти',
    'BUTTON_SEARCH' => 'Найти',
    'BUTTON_RESET' => 'Сбросить',


    /*Сообщения формы обратной связи*/
    'SUBMITTED_MESSAGE' => 'Спасибо, что связались с нами. Мы ответим Вам в ближайщее время.',
    'INFO_MESSAGE' => 'Если у Вас возникли вопросы по поводу работы нашего редактора,
     то пожалуйста, заполните форму, и мы свяжемся с Вами в ближайщее время. Спасибо.',

    /*Сообщение для LoginForm*/
    'LOGIN_MESSAGE' => 'Пожалуйста, заполните следущие поля для авторизации:',

    /*Общие заголовки*/
    'HEADER_UPDATE' => 'Обновить диаграмму:',
    'HEADER_CREATE' => 'Создать диаграмму',
    'WARNING' => 'Предупреждение!',
    'NOTICE_TITLE' => 'Обратите внимание',
    'NOTICE_TEXT' => 'на эту важную информацию.',
    'GREETING_TEXT' => 'Добро пожаловать в FIDE',
    'CONFIRM_TEXT' => 'Вы уверены, что хотите удалить этот элемент?',



    /* Общие сообщения об ошибках */
    'ERROR_MESSAGE_PAGE_NOT_FOUND' => 'Страница не найдена.',
    'ERROR_MESSAGE_ACCESS_DENIED' => 'Вам не разрешено производить данное действие.',

    /* Общие уведомления на форме с captcha */
    'CAPTCHA_NOTICE_ONE' => 'Пожалуйста, введите буквы, показанные на картинке выше.',
    'CAPTCHA_NOTICE_TWO' => 'Буквы вводятся без учета регистра.',
    'CAPTCHA_NOTICE_THREE' => 'Для смены проверочного кода нажмите на буквы, показанные на картинке выше.',

    /* Общие уведомления */
    'GENERAL_NOTICE_NO_RESULTS_FOUND' => 'Ничего не найдено.',

    /* Страница ошибки */
    'ERROR_PAGE_TEXT_ONE' => 'Вышеупомянутая ошибка произошла при обработке веб-сервером вашего запроса.',
    'ERROR_PAGE_TEXT_TWO' => 'Пожалуйста, свяжитесь с нами, если Вы думаете, что это ошибка сервера. Спасибо.',

    /* Формы */
    /* ContactForm */
    'CONTACT_FORM_NAME' => 'ФИО',
    'CONTACT_FORM_EMAIL' => 'Электронная почта',
    'CONTACT_FORM_SUBJECT' => 'Тема',
    'CONTACT_FORM_BODY' => 'Сообщение',
    'CONTACT_FORM_VERIFICATION_CODE' => 'Проверочный код',
    /* LoginForm */
    'LOGIN_FORM_USERNAME' => 'Имя пользователя',
    'LOGIN_FORM_PASSWORD' => 'Пароль',
    'LOGIN_FORM_REMEMBER_ME' => 'Запомнить меня',
    /* Сообщения LoginForm */
    'LOGIN_FORM_MESSAGE_INCORRECT_USERNAME_OR_PASSWORD' => 'Неверное имя пользователя или пароль.',

    /* Модели */
    /* Lang */
    'LANG_MODEL_ID' => 'ID',
    'LANG_MODEL_CREATED_AT' => 'Создан',
    'LANG_MODEL_UPDATED_AT' => 'Обновлен',
    'LANG_MODEL_URL' => 'URL',
    'LANG_MODEL_LOCAL' => 'Локаль',
    'LANG_MODEL_NAME' => 'Название',
    'LANG_MODEL_DEFAULT' => 'Язык по умолчанию',

    /* Модели */
    /* FishboneDiagram */
    'FISHBONE_DIAGRAM_MODEL_ID' => 'ID',
    'FISHBONE_DIAGRAM_MODEL_NAME' => 'Название диаграммы',
    'FISHBONE_DIAGRAM_MODEL_DESCRIPTION' => 'Описание диаграммы',
    'FISHBONE_DIAGRAM_MODEL_CREATED_AT' => 'Создан',
    'FISHBONE_DIAGRAM_MODEL_UPDATED_AT' => 'Обновлен',


    /*
     * Модели
     * AggravatingFactor*/
    'AGGRAVATING_FACTOR_ID' => 'ID',
    'AGGRAVATING_FACTOR_NAME' => 'Название',
    'AGGRAVATING_FACTOR_DESCRIPTION' => 'Описание фактора',
    'AGGRAVATING_FACTOR_VALUE' => 'Значение',
    'AGGRAVATING_FACTOR_CREATED_AT' => 'Создан',
    'AGGRAVATING_FACTOR_UPDATED_AT' => 'Обновлен',
    'AGGRAVATING_FACTOR_CLEAR_CAUSE_ID' => 'Clear Cause ID',

    /*
     * Модели
     * AnalyticalMembershipFactor*/
    'ANALYTICAL_MEMBERSHIP_FACTOR_ID' => 'ID',
    'ANALYTICAL_MEMBERSHIP_FACTOR_TYPE' => 'Тип ',
    'ANALYTICAL_MEMBERSHIP_FACTOR_VALUE' => 'Значение',
    'ANALYTICAL_MEMBERSHIP_FACTOR_CREATED_AT' => 'Создан',
    'ANALYTICAL_MEMBERSHIP_FACTOR_UPDATED_AT' => 'Обновлен',
    'ANALYTICAL_MEMBERSHIP_FACTOR_FUZZY_CAUSE_ID' => 'Clear Cause ID',

    /*
     * Модели
     * BaseScale*/
    'BASE_SCALE_ID' => 'ID',
    'BASE_SCALE_NAME' => 'Название',
    'BASE_SCALE_RANGE' => 'Диапазон',
    'BASE_SCALE_UNIT' => 'Единица измерения',
    'BASE_SCALE_VALUE' => 'Значение',
    'BASE_SCALE_CREATED_AT' => 'Создан',
    'BASE_SCALE_UPDATED_AT' => 'Обновлен',
    'BASE_SCALE_FUZZY_CAUSE_ID' => 'Fuzzy Cause ID',


];