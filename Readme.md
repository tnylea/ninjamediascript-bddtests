Ninja Media Script BDD Tests
===

Add These Aliases:

```
alias selenium_start="java -jar selenium-server-standalone-2.39.0.jar"
alias nms_tests="php vendor/bin/codecept run"
```

Then run these commands (in the current directory)

```
selenium_start
nms_tests
```

Or you can run these commands (in the current directory) without the aliases:

Start Silenium Server:
```
java -jar selenium-server-standalone-2.39.0.jar
```

Then run the tests:
```
php vendor/bin/codecept run
```
