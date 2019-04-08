<?php

return [
    /* Пункты главного меню клиентской части сайта */
    'NAV_HOME' => 'Home',
    'NAV_ABOUT' => 'About',
    'NAV_CONTACTS' => 'Contacts',
    'NAV_LOGIN' => 'Login',
    'NAV_HELP' => 'Help',
    'NAV_DOC' => 'Documentation',
    'NAV_LOGOUT' => 'Logout',
    'NAV_DIAGRAMS' => 'Diagrams',

    /* Нижний колонтитул (подвал) */
    'FOOTER_COPYRIGHT'=>'Copyright',
    'FOOTER_INSTITUTE'=>'ISDCT SB RAS',
    'FOOTER_POWERED_BY' => 'Powered by',

    /* Общие кнопки */
    'BUTTON_ADD' => 'Add',
    'BUTTON_SEND' => 'Send',
    'BUTTON_SAVE' => 'Save',
    'BUTTON_SIGN_IN' => 'Sign in',
    'BUTTON_CREATE' => 'Create',
    'BUTTON_UPDATE' => 'Update',
    'BUTTON_DELETE' => 'Delete',
    'BUTTON_CANCEL' => 'Cancel',
    'BUTTON_SUBMIT' => 'Submit',
    'BUTTON_LOGIN' => 'Login',
    'BUTTON_SEARCH' => 'Search',
    'BUTTON_RESET' => 'Reset',

    /*Общие заголовки*/
    'HEADER_UPDATE' => 'Update Fishbone Diagram:',
    'HEADER_CREATE' => 'Create Fishbone Diagram',
    'WARNING' => 'Warning!',
    'NOTICE_TITLE' => 'Pay attention to',
    'NOTICE_TEXT' => 'this important information.',
    'GREETING_TEXT' => 'Welcome to FIDE',
    'CONFIRM_TEXT' => 'Are you sure you want to delete this item?',


    /* Общие сообщения об ошибках */
    'ERROR_MESSAGE_PAGE_NOT_FOUND' => 'Page not found.',
    'ERROR_MESSAGE_ACCESS_DENIED' => 'You are not allowed to perform this action.',

    /* Общие уведомления на форме с captcha */
    'CAPTCHA_NOTICE_ONE' => 'Please enter the letters shown in the picture above.',
    'CAPTCHA_NOTICE_TWO' => 'Letters are not case sensitive.',
    'CAPTCHA_NOTICE_THREE' => 'Click on the letters to change the verification code shown in the picture above.',

    /* Общие уведомления */
    'GENERAL_NOTICE_NO_RESULTS_FOUND' => 'No results found.',

    /* Страницы редактора */
    /*Страница помощи*/
    'HELP_PAGE_TEXT' => 'Если у Вас возникли вопросы по поводу работы нашего редактора, то пожалуйста, заполните форму и мы свяжемся с Вами в ближайщее время. Спасибо.',
    'HELP_PAGE_MESSAGE' => 'Спасибо, что связались с нами. Мы ответим Вам в ближайщее время.',
    /* Страница входа */
    'LOGIN_PAGE_TEXT' => 'Пожалуйста, заполните следующие поля для входа:',
    'LOGIN_PAGE_RESET_TEXT' => 'Если Вы забыли свой пароль, то Вы можете',
    'LOGIN_PAGE_RESET_LINK' => 'сбросить его',

    /* Страница ошибки */
    'ERROR_PAGE_TEXT_ONE' => 'The above error occurred while the Web server was processing your request.',
    'ERROR_PAGE_TEXT_TWO' => 'Please contact us if you think this is a server error. Thank you.',

    /* Формы */
    /* ContactForm */
    'CONTACT_FORM_NAME' => 'Name',
    'CONTACT_FORM_EMAIL' => 'Email',
    'CONTACT_FORM_SUBJECT' => 'Subject',
    'CONTACT_FORM_BODY' => 'Body',
    'CONTACT_FORM_VERIFICATION_CODE' => 'Verification Code',
    /* LoginForm */
    'LOGIN_FORM_USERNAME' => 'Username',
    'LOGIN_FORM_PASSWORD' => 'Password',
    'LOGIN_FORM_REMEMBER_ME' => 'Remember Me',
    /* Сообщения LoginForm */
    'LOGIN_FORM_MESSAGE_INCORRECT_USERNAME_OR_PASSWORD' => 'Username or password is incorrect.',

    /* Модели */
    /* Lang */
    'LANG_MODEL_ID' => 'ID',
    'LANG_MODEL_CREATED_AT' => 'Created at',
    'LANG_MODEL_UPDATED_AT' => 'Updated at',
    'LANG_MODEL_URL' => 'URL',
    'LANG_MODEL_LOCAL' => 'Local',
    'LANG_MODEL_NAME' => 'Name',
    'LANG_MODEL_DEFAULT' => 'Default language',

    /* Модели */
    /* FishboneDiagram */
    'FISHBONE_DIAGRAM_MODEL_ID' => 'ID',
    'FISHBONE_DIAGRAM_MODEL_NAME' => 'Name of diagram',
    'FISHBONE_DIAGRAM_MODEL_DESCRIPTION' => 'Description of diagram',
    'FISHBONE_DIAGRAM_MODEL_CREATED_AT' => 'Created at',
    'FISHBONE_DIAGRAM_MODEL_UPDATED_AT' => 'Updated at',

    /*Модели
     * AggravatingFactor*/
    'AGGRAVATING_FACTOR_ID' => 'ID',
    'AGGRAVATING_FACTOR_NAME' => 'Name of aggravating factor',
    'AGGRAVATING_FACTOR_DESCRIPTION' => 'Description of aggravating factor',
    'AGGRAVATING_FACTOR_VALUE' => 'Value',
    'AGGRAVATING_FACTOR_CREATED_AT' => 'Created at',
    'AGGRAVATING_ACTOR_UPDATED_AT' => 'Updated at',
    'AGGRAVATING_FACTOR_CLEAR_CAUSE_ID' => 'Clear Cause ID',

    /*Модели
     * AnalyticalMembershipFactor*/
    'ANALYTICAL_MEMBERSHIP_FACTOR_ID' => 'ID',
    'ANALYTICAL_MEMBERSHIP_FACTOR_TYPE' => 'Type of membership factor (analytical)',
    'ANALYTICAL_MEMBERSHIP_FACTOR_VALUE' => 'Value',
    'ANALYTICAL_MEMBERSHIP_FACTOR_CREATED_AT' => 'Created at',
    'ANALYTICAL_MEMBERSHIP_FACTOR_UPDATED_AT' => 'Updated at',
    'ANALYTICAL_MEMBERSHIP_FACTOR_FUZZY_CAUSE_ID' => 'Fuzzy Cause ID',

    /*Модели
    * BaseScale*/
    'BASE_SCALE_ID' => 'ID',
    'BASE_SCALE_NAME' => 'Name of base scale',
    'BASE_SCALE_RANGE' => 'Range',
    'BASE_SCALE_UNIT' => 'Unit',
    'BASE_SCALE_VALUE' => 'Value',
    'BASE_SCALE_CREATED_AT' => 'Created at',
    'BASE_SCALE_UPDATED_AT' => 'Updated at',
    'BASE_SCALE_FUZZY_CAUSE_ID' => 'Fuzzy Cause ID',

    /*Модели
    * ClearCause*/
    'CLEAR_CAUSE_ID' => 'ID',
    'CLEAR_CAUSE_NAME' => 'Name of clear cause',
    'CLEAR_CAUSE_DESCRIPTION' => 'Description of clear cause',
    'CLEAR_CAUSE_CERTAINTY_FACTOR' => 'Certainty factor',
    'CLEAR_CAUSE_CREATED_AT' => 'Created at',
    'CLEAR_CAUSE_UPDATED_AT' => 'Updated at',
    'CLEAR_CAUSE_MAIN_CATEGORY_ID' => 'Main category ID',

    /*Модели
    * FuzzyCause*/
    'FUZZY_CAUSE_ID' => 'ID',
    'FUZZY_CAUSE_NAME' => 'Name of fuzzy cause',
    'FUZZY_CAUSE_NAME_EXPERT' => 'Name of expert',
    'FUZZY_CAUSE_TYPE_OF_MEMBERSHIP_FACTOR' => 'Type of membership factor',
    'FUZZY_CAUSE_VALUE' => 'Value',
    'FUZZY_CAUSE_CREATED_AT' => 'Created at',
    'FUZZY_CAUSE_UPDATED_AT' => 'Updated at',
    'FUZZY_CAUSE_MAIN_CATEGORY_ID' => 'Main category ID',

    /*Модели
    * MainCategory*/
    'MAIN_CATEGORY_ID' => 'ID',
    'MAIN_CATEGORY_NAME' => 'Name of category',
    'MAIN_CATEGORY_DESCRIPTION' => 'Description of category',
    'MAIN_CATEGORY_CREATED_AT' => 'Created at',
    'MAIN_CATEGORY_UPDATED_AT' => 'Updated at',
    'MAIN_CATEGORY_FISHBONE_DIAGRAM_ID' => 'Fishbone diagram ID',

    /*Модели
     * NeutralizingFactor*/
    'NEUTRALIZING_FACTOR_ID' => 'ID',
    'NEUTRALIZING_FACTOR_NAME' => 'Name of neutralizing factor',
    'NEUTRALIZING_FACTOR_DESCRIPTION' => 'Description of neutralizing factor',
    'NEUTRALIZING_FACTOR_VALUE' => 'Value',
    'NEUTRALIZING_FACTOR_CREATED_AT' => 'Created at',
    'NEUTRALIZING_ACTOR_UPDATED_AT' => 'Updated at',
    'NEUTRALIZING_FACTOR_CLEAR_CAUSE_ID' => 'Clear Cause ID',

    /*Модели
    * Problem*/
    'PROBLEM_ID' => 'ID',
    'PROBLEM_NAME' => 'Name of problem',
    'PROBLEM_DESCRIPTION' => 'Description of problem',
    'PROBLEM_CERTAINTY_FACTOR' => 'Certainty factor',
    'PROBLEM_CREATED_AT' => 'Created at',
    'PROBLEM_UPDATED_AT' => 'Updated at',
    'PROBLEM_FISHBONE_DIAGRAM_ID' => 'Fishbone diagram ID',

    /*Модели
     * TableMembershipFactor*/
    'TABLE_MEMBERSHIP_FACTOR_ID' => 'ID',
    'TABLE_MEMBERSHIP_FACTOR_VALUE' => 'Value',
    'TABLE_MEMBERSHIP_FACTOR_COEFFICIENT' => 'Coefficient',
    'TABLE_MEMBERSHIP_FACTOR_CREATED_AT' => 'Created at',
    'TABLE_MEMBERSHIP_FACTOR_UPDATED_AT' => 'Updated at',
    'TABLE_MEMBERSHIP_FACTOR_FUZZY_CAUSE_ID' => 'Fuzzy Cause ID',




];