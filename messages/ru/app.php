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
    'NAV_BACK' => 'Вернуться к списку',
    'NAV_ADD' => 'Добавить',
    'NAV_ADD_PROBLEM' => 'Добавить проблему',
    'NAV_ADD_CATEGORY' => 'Добавить категорию',
    'NAV_EXPORT' => 'Экспортировать',

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
    'BUTTON_SUBMIT' => 'Подтвердить',
    'BUTTON_LOGIN' => 'Войти',
    'BUTTON_SEARCH' => 'Найти',
    'BUTTON_RESET' => 'Сбросить',

    /* Общие заголовки */
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

    /* Страницы редактора */
    /* Страница помощи */
    'HELP_PAGE_TITLE' => 'Помощь',
    'HELP_PAGE_TEXT' => 'Если у Вас возникли вопросы по поводу работы нашего редактора, то пожалуйста, заполните форму и мы свяжемся с Вами в ближайщее время. Спасибо.',
    'HELP_PAGE_MESSAGE' => 'Спасибо, что связались с нами. Мы ответим Вам в ближайщее время.',
    /* Страница входа */
    'LOGIN_PAGE_TITLE' => 'Вход',
    'LOGIN_PAGE_TEXT' => 'Пожалуйста, заполните следующие поля для входа:',
    'LOGIN_PAGE_RESET_TEXT' => 'Если Вы забыли свой пароль, то Вы можете',
    'LOGIN_PAGE_RESET_LINK' => 'сбросить его',
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

    /* Модели
    * Lang */
    'LANG_MODEL_ID' => 'ID',
    'LANG_MODEL_CREATED_AT' => 'Создан',
    'LANG_MODEL_UPDATED_AT' => 'Обновлен',
    'LANG_MODEL_URL' => 'URL',
    'LANG_MODEL_LOCAL' => 'Локаль',
    'LANG_MODEL_NAME' => 'Название',
    'LANG_MODEL_DEFAULT' => 'Язык по умолчанию',

    /*Модели
     *  FishboneDiagram */
    'FISHBONE_DIAGRAM_MODEL_ID' => 'ID',
    'FISHBONE_DIAGRAM_MODEL_NAME' => 'Название диаграммы',
    'FISHBONE_DIAGRAM_MODEL_DESCRIPTION' => 'Описание диаграммы',
    'FISHBONE_DIAGRAM_MODEL_CREATED_AT' => 'Создан',
    'FISHBONE_DIAGRAM_MODEL_UPDATED_AT' => 'Обновлен',

    /*Модели
     * AggravatingFactor*/
    'AGGRAVATING_FACTOR_ID' => 'ID',
    'AGGRAVATING_FACTOR_NAME' => 'Название усугубляющего фактора',
    'AGGRAVATING_FACTOR_DESCRIPTION' => 'Описание фактора',
    'AGGRAVATING_FACTOR_VALUE' => 'Значение',
    'AGGRAVATING_FACTOR_CREATED_AT' => 'Создан',
    'AGGRAVATING_FACTOR_UPDATED_AT' => 'Обновлен',
    'AGGRAVATING_FACTOR_CLEAR_CAUSE_ID' => 'ID Четкой причины',

    /* Модели
     * AnalyticalMembershipFactor*/
    'ANALYTICAL_MEMBERSHIP_FACTOR_ID' => 'ID',
    'ANALYTICAL_MEMBERSHIP_FACTOR_TYPE' => 'Тип функции принадлежности ',
    'ANALYTICAL_MEMBERSHIP_FACTOR_VALUE' => 'Значение',
    'ANALYTICAL_MEMBERSHIP_FACTOR_CREATED_AT' => 'Создан',
    'ANALYTICAL_MEMBERSHIP_FACTOR_UPDATED_AT' => 'Обновлен',
    'ANALYTICAL_MEMBERSHIP_FACTOR_FUZZY_CAUSE_ID' => 'ID Четкой причины',

    /* Модели
     * BaseScale*/
    'BASE_SCALE_ID' => 'ID',
    'BASE_SCALE_NAME' => 'Название базовой шкалы',
    'BASE_SCALE_RANGE' => 'Диапазон базовой шкалы',
    'BASE_SCALE_UNIT' => 'Единица измерения',
    'BASE_SCALE_VALUE' => 'Значение',
    'BASE_SCALE_CREATED_AT' => 'Создан',
    'BASE_SCALE_UPDATED_AT' => 'Обновлен',
    'BASE_SCALE_FUZZY_CAUSE_ID' => 'ID Нечеткой причины',

    /*Модели
    * ClearCause*/
    'CLEAR_CAUSE_ID' => 'ID',
    'CLEAR_CAUSE_NAME' => 'Название четкой причины',
    'CLEAR_CAUSE_DESCRIPTION' => 'Описание четкой причины',
    'CLEAR_CAUSE_CERTAINTY_FACTOR' => 'Коэффициент уверенности',
    'CLEAR_CAUSE_CREATED_AT' => 'Created at',
    'CLEAR_CAUSE_UPDATED_AT' => 'Updated at',
    'CLEAR_CAUSE_MAIN_CATEGORY_ID' => 'ID Основной категории',

    /*Модели
   * FuzzyCause*/
    'FUZZY_CAUSE_ID' => 'ID',
    'FUZZY_CAUSE_NAME' => 'Название нечеткой причины',
    'FUZZY_CAUSE_DESCRIPTION' => 'Описание нечеткой причины',
    'FUZZY_CAUSE_NAME_EXPERT' => 'ФИО эксперта',
    'FUZZY_CAUSE_TYPE_OF_MEMBERSHIP_FACTOR' => 'Вид функции принадлежности',
    'FUZZY_CAUSE_VALUE' => 'Значение',
    'FUZZY_CAUSE_CREATED_AT' => 'Создан',
    'FUZZY_CAUSE_UPDATED_AT' => 'Обновлен',
    'FUZZY_CAUSE_MAIN_CATEGORY_ID' => 'ID Основной категории',

    /*Модели
    * MainCategory*/
    'MAIN_CATEGORY_ID' => 'ID',
    'MAIN_CATEGORY_NAME' => 'Название категории',
    'MAIN_CATEGORY_DESCRIPTION' => 'Описание категории',
    'MAIN_CATEGORY_CREATED_AT' => 'Создан',
    'MAIN_CATEGORY_UPDATED_AT' => 'Обновлен',
    'MAIN_CATEGORY_FISHBONE_DIAGRAM_ID' => 'ID диаграммы',

    /*Модели
    * NeutralizingFactor*/
    'NEUTRALIZING_FACTOR_ID' => 'ID',
    'NEUTRALIZING_FACTOR_NAME' => 'Название нетрализующего фактора',
    'NEUTRALIZING_FACTOR_DESCRIPTION' => 'Описание нетрализующего фактора',
    'NEUTRALIZING_FACTOR_VALUE' => 'Значение',
    'NEUTRALIZING_FACTOR_CREATED_AT' => 'Создан',
    'NEUTRALIZING_ACTOR_UPDATED_AT' => 'Обновлен',
    'NEUTRALIZING_FACTOR_CLEAR_CAUSE_ID' => 'ID четкой причины',

    /*Модели
    * Problem*/
    'PROBLEM_ID' => 'ID',
    'PROBLEM_NAME' => 'Название проблемы',
    'PROBLEM_DESCRIPTION' => 'Описание проблемы',
    'PROBLEM_CERTAINTY_FACTOR' => 'Коэффициент уверенности',
    'PROBLEM_CREATED_AT' => 'Создан',
    'PROBLEM_UPDATED_AT' => 'Обновлен',
    'PROBLEM_FISHBONE_DIAGRAM_ID' => 'ID диаграммы',

    /*Модели
     * TableMembershipFactor*/
    'TABLE_MEMBERSHIP_FACTOR_ID' => 'ID',
    'TABLE_MEMBERSHIP_FACTOR_VALUE' => 'Значение',
    'TABLE_MEMBERSHIP_FACTOR_COEFFICIENT' => 'Коэффициент',
    'TABLE_MEMBERSHIP_FACTOR_CREATED_AT' => 'Создан',
    'TABLE_MEMBERSHIP_FACTOR_UPDATED_AT' => 'Обновлен',
    'TABLE_MEMBERSHIP_FACTOR_FUZZY_CAUSE_ID' => 'ID нечеткой причины',


];