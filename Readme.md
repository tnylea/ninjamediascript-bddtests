Ninja Media Script BDD Tests
===

Add These Aliases:

```
alias selenium_start="java -jar selenium-server-standalone-2.39.0.jar"
alias nms_test="php vendor/bin/codecept run"
alias nms_test_file="php vendor/bin/codecept run acceptance"
```

Then run these commands (in the current directory)

```
selenium_start
nms_test
```

To run a specific test run:
```
nms_test_file *filename
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
