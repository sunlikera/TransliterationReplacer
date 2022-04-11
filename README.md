# TransliterationReplacer
## Usage
This php package returns combination all words with all kinds of similar english chars.

For examle: in word "Хай" char "Х" can be "X" in english and char "а" can be similar char "a" in english.

This package has two main methods `detect()` method (which returns array [ [ char: 'С', index: 0  ]) and `getCorrectedText()` method (which returns corrected text). You can use RU and ENG dictionaries for finding incorrect chars by methods `setEngCharsAsTarget()` and `setRusCharsAsTarget()`

## Example

```php
use TransliterationReplacer\Service;

$transliterationReplacer = new Service();

// 'e' и 'a'
$text = 'Привeт, как дeлa';

$transliterationReplacer->setText($text);
$transliterationReplacer->setEngCharsAsTarget();

$detected = $transliterationReplacer->detect();
/*
Array
(
    [0] => Array
        (
            [index] => 8
            [char] => e
        )

    [1] => Array
        (
            [index] => 22
            [char] => e
        )

    [2] => Array
        (
            [index] => 25
            [char] => a
        )

)
*/

$correctedText = $transliterationReplacer->getCorrectedText();
```