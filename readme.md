# EASI'R PHP SDK

Current version `0.6.1`
Supported API version `1.0.0`

The purpose of this SDK is to standardise how our apps communicate with the EASI'R API.

To run tests `./vendor/bin/codecept run`

## Project structure
- Exception
- Model
- Request
-- Models
- Response

## Usage
### Installing

Include into your project using composer `"easir/sdk"`. You need to define the repository in your composer.json too:

```
  {
    "type": "package",
    "package": {
      "name": "easir/sdk",
      "version": "0.6.1",
      "source": {
        "url": "git@bitbucket.org:e2c-saas/easir-sdk.git",
        "type": "git",
        "reference": "tags/0.6.1"
      },
      "autoload": {
        "psr-4": {
          "Easir\\SDK\\": "src/"
        }
      }
    }
  }
```

### Implementation
```
$client = new \Easir\SDK\Client("https://api.url");
$requestModel = new \Easir\SDK\Request\Model\MyRequestModel;
$requestModel->property_1 = "something";
$requestModel->property_2 = "something_else";
$myRequest = new \Easir\SDK\Request\MyRequest($requestModel);
$myResponse = $client->execute($myRequest);
```

You can check if the request fails with `$myResponse->hasErrors()` and/or `$myResponse->statusCode`.
