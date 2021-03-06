# Changelog
All notable changes to TypiCMS will be documented in this file.

## 2.4.24 - 2015-09-25

- BREAKING CHANGE: store and update methods where removed from TypiCMS\Modules\Core\Http\Controllers\BaseApiController, so you will have to implement these methods in your custom modules ApiController classes.

## 2.4.18 - 2015-08-09

- Dynamic links to a resource in text editor, for example {!! page:3 !!} or {!! news:5 !!}

## 2.4.13 - 2015-08-01

- CKEditor 4.5.1

## 2.4.12 - 2015-08-01

- Angular 1.4
- Font Awesome 4.4
- npm in place of Bower when possible

## 2.4.4 - 2015-06-30

- bkwld/croppa 4.2

## 2.4.0 - 2015-06-09

### Changed
- Laravel 5.1

## 2.3.0 - 2015-05-26

### Changed
- Authentication is now based on Laravel Auth.
- Composer set to "minimum-stability": "stable"
- Better wysiwyg filepicker

### Removed
- Cartalyst/Sentry (No more throttling feature)
- angular-gettext
- cviebrock/image-validator

## 2.2.0 - 2015-05-10

### Added
- Laracasts\Presenter package

### Changed
- Core module Namespace is now TypiCMS\Modules\Core.

## 2.1.6 - 2015-04-28

### Added
- A page can be private.
- Content of a page linked to a module is shown in module’s list template.
- Contacts module has an event that send mail to visitor and webmaster.
- laracasts/generators package added by default.
- CKEditor autocorrect plugin.
- Assets versionning with elixir.
- Possibility to upload the website logo via settings module in admin interface.
- During page creation, possibility to add it to a menu.
- (BETA) Enabling config/typicms.html_cache cause frontend pages being saved as static html in public/html folder.

### Changed
- Locale is no more stored in page’s uri.

### Fixed
- Lot of code cleaning and bug fixes.
