# Changelog

All Notable changes to `laravel-responsecache` will be documented in this file

## 1.1.7 - 2016-10-10
- added usage of `RESPONSE_CACHE_LIFETIME` env var to config file

## 1.1.6 - 2016-08-07
- debug headers will not be sent when `APP_DEBUG` is set to false

## 1.1.5 - 2015-08-28

### Fixed
- Fixed an issue where the cache middleware couldn't correctly determine the currently authenticated user

## 1.1.4 - 2015-08-12

### Fixed
- Fixed an issue where cached request were still served even if the package was disabled via the config file

## 1.1.3 - 2015-08-11

### Fixed
- Fixed an issue where the cache header could not be set

## 1.1.2 - 2015-07-22

### Fixed
- BaseCacheProfile has been made abstract (as it should have been all along)

## 1.1.1 - 2015-07-20

### Fixed
- Default cachetime

## 1.1.0 - 2015-07-20

### Added
- A command to flush the response cache


## 1.0.0 - 2015-07-20

### Added
- Everything
