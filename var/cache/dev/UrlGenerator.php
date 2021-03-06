<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'client_index' => [[], ['_controller' => 'App\\Controller\\ClientController::index'], [], [['text', '/client/']], [], []],
    'client_new' => [[], ['_controller' => 'App\\Controller\\ClientController::new'], [], [['text', '/client/new']], [], []],
    'client_show' => [['id'], ['_controller' => 'App\\Controller\\ClientController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/client']], [], []],
    'client_edit' => [['id'], ['_controller' => 'App\\Controller\\ClientController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/client']], [], []],
    'client_delete' => [['id'], ['_controller' => 'App\\Controller\\ClientController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/client']], [], []],
    'doctor_index' => [[], ['_controller' => 'App\\Controller\\DoctorController::index'], [], [['text', '/doctorsList/']], [], []],
    'doctor_new' => [[], ['_controller' => 'App\\Controller\\DoctorController::new'], [], [['text', '/doctorsList/new']], [], []],
    'doctor_show' => [['id'], ['_controller' => 'App\\Controller\\DoctorController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/doctorsList']], [], []],
    'doctor_edit' => [['id'], ['_controller' => 'App\\Controller\\DoctorController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/doctorsList']], [], []],
    'doctor_delete' => [['id'], ['_controller' => 'App\\Controller\\DoctorController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/doctorsList']], [], []],
    'schedule_index' => [[], ['_controller' => 'App\\Controller\\ScheduleController::index'], [], [['text', '/schedule/']], [], []],
    'schedule_new' => [[], ['_controller' => 'App\\Controller\\ScheduleController::new'], [], [['text', '/schedule/new']], [], []],
    'schedule_show' => [['id'], ['_controller' => 'App\\Controller\\ScheduleController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/schedule']], [], []],
    'schedule_edit' => [['id'], ['_controller' => 'App\\Controller\\ScheduleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/schedule']], [], []],
    'schedule_delete' => [['id'], ['_controller' => 'App\\Controller\\ScheduleController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/schedule']], [], []],
    'app_index_index' => [[], ['_controller' => 'App\\Controller\\indexController::index'], [], [['text', '/']], [], []],
];
