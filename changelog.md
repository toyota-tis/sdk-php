0.6.2
Renamed GetAccessToken to GetAuthForUser to reflect the change in 0.6.1

0.6.1
GET /token/{userId} now uses the \Easir\SDK\Response\Auth response type

0.6.0
Added support for GET /me
Added support for GET /token/{userId}

0.5.0
Added support for GET /companies/{companyId}/users
Added support for GET /companies/{companyId}/users/{userId}
Bugfix: Fixed problem with created_at on Company response model

0.4.0
Added support for GET /companies
Added support for GET /companies/{companyId}

0.3.0
Added support for GET /localization-types/(users|companies) apis.
Added support for the 'refresh_token' grant type to GET /token.

0.2.0
Added support for the client_credentials and password grant types to GET /tokens.
Added support for POST /companies

0.1.0 (not tagged)