# materialsymbols.php
Function to get material symbols icon on php<br>
Based on: https://fonts.google.com/icons

Can use function with **string** or associative **array()**<br>
By default will use outlined icons
```php
   MaterialSymbols(mixed $data)
```

Can modify
```php
   (string) ...$id,
   (string) ...$variant,
   (bol) ...$filled,
   (int) ...$size,
   (string)...$color,
```
Function | Result 
--- | --- 
 MaterialSymbols("check_box") | ![check_box](https://github.com/julioedi/materialsymbols.php/blob/main/outline.svg?raw=true)
 MaterialSymbols(array(<br/>&nbsp;&nbsp;"id" => "check_box",<br/>&nbsp;&nbsp;"filled" => true)<br/>); | ![check_box](https://github.com/julioedi/materialsymbols.php/blob/main/outline-filled.svg?raw=true)
 MaterialSymbols(array(<br/>&nbsp;&nbsp;"id" => "check_box",<br/>&nbsp;&nbsp;"variant" => "sharp")<br/>)); | ![check_box](https://github.com/julioedi/materialsymbols.php/blob/main/sharp.svg?raw=true)
 MaterialSymbols(array(<br/>&nbsp;&nbsp;"id" => "check_box",<br/>&nbsp;&nbsp;"variant" => "sharp",<br/>&nbsp;&nbsp;"filled" => true<br/>)); | ![check_box](https://github.com/julioedi/materialsymbols.php/blob/main/sharp-filled.svg?raw=true)
 MaterialSymbols(array(<br/>&nbsp;&nbsp;"id" => "check_box",<br/>&nbsp;&nbsp;"color" => "#5c6bc0")<br/>)); | ![check_box](https://github.com/julioedi/materialsymbols.php/blob/main/outline_color.svg?raw=true)
 MaterialSymbols(array(<br/>&nbsp;&nbsp;"id" => "check_box",<br/>&nbsp;&nbsp;"size" => 96)<br/>)); | ![check_box](https://github.com/julioedi/materialsymbols.php/blob/main/outline_96.svg?raw=true)
 
 <br/><br/><br/>
 
 ## Add custom Icons
 
 under folder ./icons place your file.json with following structure
 
 ```php
  {
    [$variant]:[
      //paths
      {
        [$attibute | d] : (string) ...$attributeValue,
      }
    ]
  }
```
 
