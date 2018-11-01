You can generate a client service for any API given its Discovery REST URL.

```
php generateV2_service.php 'https://www.googleapis.com/discovery/v1/apis/drive/v3/rest'
```

You can specify a destination directory. That makes it easy to access a sandbox API or an active API that has been replaced by a newer version.

```
php generateV2_service.php 'https://www.googleapis.com/discovery/v1/apis/drive/v2/rest' old-drive
```
