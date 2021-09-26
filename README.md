# XML Document Parser PHP for laravel

## About

XML Document Parser PHP for laravel

This package provides a simple way to parse XML to array.
Many thanks to @Laravie https://github.com/crynobone
The package  laravie / parser as extended. It is possible now:

```
<api>
    <user followers="5">
        <id>1</id>
        <email>jonn.doe@gmail.com</email>
    </user>
    <user followers="1">
        <id>2</id>
        <email>jack.doe@gmail.com</email>
    </user>
        <user followers="3">
        <id>3</id>
        <email>george.doe@gmail.com</email>
    </user>
</api>
```

to

```
<?php

// 
array:3 [▼
  0 => array:3 [▼
    "id" => "1"
    "email" => "jack.doe@gmail.com"
    "followers" => "5"
  ]
  1 => array:3 [▼
    "id" => "2"
    "email" => "jonn.doe@gmail.com"
    "followers" => "1"
  ]
  2 => array:3 [▼
    "id" => "3"
    "email" => "george.doe@gmail.com"
    "followers" => "3"
  ]
]
```

by writing

```
use Caleido\Parser\Facades\Facade as XmlParser;

$xml = XmlParser::load('path/to/above.xml');
$user = $xml->parse([
    'id' => ['uses' => 'user.id'],
    'email' => ['uses' => 'user.email'],
    'followers' => ['uses' => 'user::followers'],
]);
```
