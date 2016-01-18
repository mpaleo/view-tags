# Laravel view tags 
[![Software License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](LICENSE)

## Installation

1. Add the package to your composer.json
    ```json
    ...
    "mpaleo/view-tags": "dev-master",
    ...
    ```
    
2. Update
    ```bash
    composer update
    ```
    
3. Add the service provider to the providers array in `{laravel-root}\config\app.php`
    ```php
    ...
    ViewTags\ViewTagsServiceProvider::class,
    ...
    ```
    
4. Add the alias in `{laravel-root}\config\app.php`
    ```php
    ...
    'ViewTags' => ViewTags\ViewTags::class,
    ...
    ```
    
## Usage

### Tag views
```php
ViewTags::tag('viewOne', 'someTag');
ViewTags::tag('viewTwo', 'someTag');
ViewTags::tag('viewThree', ['someTag', 'anotherTag']);
```
### Get tagged views
```php
ViewTags::taggedWith('someTag');
/* Output:
 * array(3) {
 *   [0] => "viewOne"
 *   [1] => "viewTwo"
 *   [2] => "viewThree"
 * }
 */
 
ViewTags::taggedWith('anotherTag');
/* Output:
 * array(1) {
 *   [0] => "viewThree"
 * }
 */
```
### License
The view tags package is licensed under the [MIT license](http://opensource.org/licenses/MIT)
