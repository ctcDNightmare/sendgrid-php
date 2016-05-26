<?php
require 'vendor/autoload.php';


$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);

##################################################
# Retrieve all mail settings #
# GET /mail_settings #

$query_params = json_decode('{"limit": 1, "offset": 1}');
$response = $this->sg->client->mail_settings()->get(null, $query_params);
echo $response->statusCode();
echo $response->responseBody();
echo $response->responseHeaders();

##################################################
# Update address whitelist mail settings #
# PATCH /mail_settings/address_whitelist #

$request_body = json_decode('{
  "enabled": true, 
  "list": [
    "email1@example.com", 
    "example.com"
  ]
}');
$response = $this->sg->client->mail_settings()->address_whitelist()->patch($request_body);
echo $response->statusCode();
echo $response->responseBody();
echo $response->responseHeaders();

##################################################
# Retrieve address whitelist mail settings #
# GET /mail_settings/address_whitelist #

$response = $this->sg->client->mail_settings()->address_whitelist()->get();
echo $response->statusCode();
echo $response->responseBody();
echo $response->responseHeaders();

##################################################
# Update BCC mail settings #
# PATCH /mail_settings/bcc #

$request_body = json_decode('{
  "email": "email@example.com", 
  "enabled": false
}');
$response = $this->sg->client->mail_settings()->bcc()->patch($request_body);
echo $response->statusCode();
echo $response->responseBody();
echo $response->responseHeaders();

##################################################
# Retrieve all BCC mail settings #
# GET /mail_settings/bcc #

$response = $this->sg->client->mail_settings()->bcc()->get();
echo $response->statusCode();
echo $response->responseBody();
echo $response->responseHeaders();

##################################################
# Update bounce purge mail settings #
# PATCH /mail_settings/bounce_purge #

$request_body = json_decode('{
  "enabled": true, 
  "hard_bounces": 5, 
  "soft_bounces": 5
}');
$response = $this->sg->client->mail_settings()->bounce_purge()->patch($request_body);
echo $response->statusCode();
echo $response->responseBody();
echo $response->responseHeaders();

##################################################
# Retrieve bounce purge mail settings #
# GET /mail_settings/bounce_purge #

$response = $this->sg->client->mail_settings()->bounce_purge()->get();
echo $response->statusCode();
echo $response->responseBody();
echo $response->responseHeaders();

##################################################
# Update footer mail settings #
# PATCH /mail_settings/footer #

$request_body = json_decode('{
  "enabled": true, 
  "html_content": "...", 
  "plain_content": "..."
}');
$response = $this->sg->client->mail_settings()->footer()->patch($request_body);
echo $response->statusCode();
echo $response->responseBody();
echo $response->responseHeaders();

##################################################
# Retrieve footer mail settings #
# GET /mail_settings/footer #

$response = $this->sg->client->mail_settings()->footer()->get();
echo $response->statusCode();
echo $response->responseBody();
echo $response->responseHeaders();

##################################################
# Update forward bounce mail settings #
# PATCH /mail_settings/forward_bounce #

$request_body = json_decode('{
  "email": "example@example.com", 
  "enabled": true
}');
$response = $this->sg->client->mail_settings()->forward_bounce()->patch($request_body);
echo $response->statusCode();
echo $response->responseBody();
echo $response->responseHeaders();

##################################################
# Retrieve forward bounce mail settings #
# GET /mail_settings/forward_bounce #

$response = $this->sg->client->mail_settings()->forward_bounce()->get();
echo $response->statusCode();
echo $response->responseBody();
echo $response->responseHeaders();

##################################################
# Update forward spam mail settings #
# PATCH /mail_settings/forward_spam #

$request_body = json_decode('{
  "email": "", 
  "enabled": false
}');
$response = $this->sg->client->mail_settings()->forward_spam()->patch($request_body);
echo $response->statusCode();
echo $response->responseBody();
echo $response->responseHeaders();

##################################################
# Retrieve forward spam mail settings #
# GET /mail_settings/forward_spam #

$response = $this->sg->client->mail_settings()->forward_spam()->get();
echo $response->statusCode();
echo $response->responseBody();
echo $response->responseHeaders();

##################################################
# Update plain content mail settings #
# PATCH /mail_settings/plain_content #

$request_body = json_decode('{
  "enabled": false
}');
$response = $this->sg->client->mail_settings()->plain_content()->patch($request_body);
echo $response->statusCode();
echo $response->responseBody();
echo $response->responseHeaders();

##################################################
# Retrieve plain content mail settings #
# GET /mail_settings/plain_content #

$response = $this->sg->client->mail_settings()->plain_content()->get();
echo $response->statusCode();
echo $response->responseBody();
echo $response->responseHeaders();

##################################################
# Update spam check mail settings #
# PATCH /mail_settings/spam_check #

$request_body = json_decode('{
  "enabled": true, 
  "max_score": 5, 
  "url": "url"
}');
$response = $this->sg->client->mail_settings()->spam_check()->patch($request_body);
echo $response->statusCode();
echo $response->responseBody();
echo $response->responseHeaders();

##################################################
# Retrieve spam check mail settings #
# GET /mail_settings/spam_check #

$response = $this->sg->client->mail_settings()->spam_check()->get();
echo $response->statusCode();
echo $response->responseBody();
echo $response->responseHeaders();

##################################################
# Update template mail settings #
# PATCH /mail_settings/template #

$request_body = json_decode('{
  "enabled": true, 
  "html_content": "<% body %>"
}');
$response = $this->sg->client->mail_settings()->template()->patch($request_body);
echo $response->statusCode();
echo $response->responseBody();
echo $response->responseHeaders();

##################################################
# Retrieve legacy template mail settings #
# GET /mail_settings/template #

$response = $this->sg->client->mail_settings()->template()->get();
echo $response->statusCode();
echo $response->responseBody();
echo $response->responseHeaders();

