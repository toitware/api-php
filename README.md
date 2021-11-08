# Toit PHP API

PHP Client for the Toit GRPC API.

## Install

In order to install gRPC and protobuf for PHP please follow the guidelines here: https://cloud.google.com/php/grpc.
To install dependencies run:

```
composer install
```

## Example

### Prerequisites

To run the examples you will need to dump the autoload using composer:

```
composer dump-autoload
```

You will also need to set the `TOIT_API_KEY` environment variable. To create a API key do:

```
toit project api-keys add <name-of-key>
```

View the list of API keys available in your project with the Toit CLI command:

```
$ toit project api-keys list
```

Note the ID of your API key.

View the generated API key *secret* with the Toit CLI command:

```
$ toit project api-keys print-secret <api-key-id>
```

### Run

to run the examples set the environment variable and use PHP to run the example:

```
export TOIT_API_KEY=<secret>
php ./examples/list_devices.php
```
