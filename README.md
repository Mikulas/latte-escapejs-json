```
ok:
{=Nette\Utils\Json::encode($json)}

fail:
{$json|escapeJs}
< translates \x3C
```

```
$ php test.php
ok is ok
fail failed
```
