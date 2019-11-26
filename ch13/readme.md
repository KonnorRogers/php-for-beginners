Laracasts recommends setting simple passwords. However, because this will be a public repo
for me, I don't feel comfortable doing that.

In your terminal run:

```bash
export MYSQL_USER="root" # Or whoever you have your MySQL database saved under.
export MYSQL_PASSWORD="Your password here"
```

This will set what's called Environment Variables.

After a quick search, Environment Variables can be retrieved multiple ways in PHP.

The 2 I came across were `$_ENV['MYSQL_USER'];` or `getenv('MYSQL_USER');`

My preference is `getenv('varname')`. I don't have a reason other than I like it better.

Now inside your index.php file add the following:

```php
// index.php

<? php

try {
  $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodos', getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'));
} catch (PDOException $e) {
  die('Could not connect' . "\n\n" . $e);
}


```

install php-mysql php-pdo
change to php-7.3.8
