# PHP Google API Client Service Generator

The services found in the [main src directory](../src) are auto-generated. Changes the API teams publish to the [directory list](https://www.googleapis.com/discovery/v1/apis) show up there automatically. For most use cases these services are sufficient. When they are not this tool can be used to generate the required service.

## Installation ##

This is not an actual composer package but we can still use composer to get all our dependencies. It is important to do so in the [generator](/generator) directory (in which this README.md file resides).

```
composer install
```

## Basic Usage ##

You can generate a client service not preferred in the [directory list](https://www.googleapis.com/discovery/v1/apis) with the generate script, specify a discovery URL and a destination directory `bin/generate <URL> <path>`. For example:

```
bin/generate 'https://www.googleapis.com/discovery/v1/apis/drive/v2/rest' DriveV2
```

This makes it easy to access a sandbox API or an active API that has been replaced by a newer version.
