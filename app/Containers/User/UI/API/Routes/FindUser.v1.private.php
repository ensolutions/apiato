<?php

/**
 * @apiGroup           Users
 * @apiName            getUser
 * @api                {get} /v1/users/:id Find User
 * @apiDescription     Find a user by its ID
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiUse             UserSuccessSingleResponse
 */

$router->get('users/{id}', [
    'as' => 'API_User_getUser',
    'uses'       => 'Controller@findUser',
    'middleware' => [
        'auth:api',
    ],
]);
