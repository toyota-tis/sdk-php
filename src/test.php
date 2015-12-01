<?php

include __DIR__ . "/../vendor/autoload.php";

use Easir\SDK\Client;
use Easir\SDK\Request\AuthRequest;
use Easir\SDK\Request\CreateCompanyRequest;
use Easir\SDK\Request\Model\Auth;
use Easir\SDK\Request\Model\Company;
use Easir\SDK\Request\Model\CompanyUser;

$client = new Client("http://33.33.33.15");

$auth = new Auth;
$auth->client_id = "ID";
$auth->client_secret = "SECRET";
$authRequest = new AuthRequest($auth);
$authResponse = $client->execute($authRequest);
$client->accessToken = $authResponse->access_token;

$company = new Company();
$company->name = "company name";
$company->user = new CompanyUser();
$company->user->email = "fsadfsa@fdfsa" . rand(0,999999) . "dfsafdffasdfefsadsaf.com";
$company->user->first_name = "cfdsafas";
$company->user->last_name = "safdsdf";
$company->user->password = "password";

$companyRequest = new CreateCompanyRequest($company);
$companyResponse = $client->execute($companyRequest);

var_dump($companyResponse);

//var_dump($companyResponse->hasErrors());
//var_dump($companyResponse);