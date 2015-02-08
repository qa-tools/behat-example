# QA-Tools / Behat Example

Example of using the QA-Tools library with Behat and Selenium2.

## Website and Documentation

* [http://www.qa-tools.io](http://www.qa-tools.io)

## Asking Questions
Feel free to ask any questions and share your experiences on the [Support Page](http://www.qa-tools.io/support/) and help to improve the documentation.

## Installation using Composer

Install/update your vendors:

```bash
$ curl http://getcomposer.org/installer | php
$ php composer.phar install
```

## Configuration and Execution

1. Installing dependencies via composer
2. Setting up a web-server, with PHP support, pointing to **./Fixtures**
3. In case the **Fixture** directory is not reachable via http://localhost change in **behat.yml**
 * `base_url` for `MinkExtension` 
 * `base_url` for `BehatExtension`
 ```yaml
 Behat\MinkExtension:
       default_session: selenium2
       javascript_session: selenium2
       base_url:  'http://localhost'
 
       selenium2: ~
 
 QATools\BehatExtension:
       qa_tools:
         base_url: 'http://localhost'
 ```
4. Download lastest Selenium standalone server and run it
5. Execute `./bin/behat`