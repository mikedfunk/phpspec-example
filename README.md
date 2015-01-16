## Setup
* [get composer](https://getcomposer.org/)
* `composer install`
* `vendor/bin/phpspec run` to run tests

## Using phpspec in another project
* `composer require --dev phpspec/phpspec`
* `vendor/bin/phpspec MyNamespace\\To\\MyClass` will create a spec for that
  class in `spec/MyNamespace/To/MyClassSpec`. It will have a default
  `it_is_initializable` test in it.
* now set up the composer autoloader so phpspec can find your classes to test.
  Add the autoload part below to composer.json:

```javascript
{
    "require-dev": {
        "phpspec/phpspec": "~2.1"
    },
    "autoload": {
      "psr-4": {
        "MyNamespace\\": "src/MyNamespace/"
      }
    }
}
```

* now `composer dump autoload` to have composer recognize that new autoloader
  part
* `vendor/bin/phpspec run` will ask if you want phpspec to generate the class
  for you. Hit Y to do that.
* now write a test for a class method. Examples are in this repository.
* `vendor/bin/phpspec run` will now ask if you want phpspec to add that
  function. _Even though this is an easy thing to do yourself, this is good
  practice because it promotes test-driven development._ It should now show one
  passing test and one failing test.
* write just enough code in that method to make your test pass
* `vendor/bin/phpspec run` should now pass! Time to refactor. (red -> green ->
  refactor)
