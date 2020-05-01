# IsbnLibrary
The library provides a check if a ISBN-13 is valid or not. It also calculates a ISBN-13 check number with a given isbn root.

## Install
`composer require thomasdcodes/isbn-library`

## Use
The Class `IsbnLibrary` only allows static usage.

Use `IsbnLibrary::sanitizeIsbn('978-3-123-45678-9')` to remove all hyphens.

Use `IsbnLibrary::isIsbn13Valid('978-3-123-45678-9')` to check a ISBN is valid or not.

Use `IsbnLibrary::calculateIsbn13CheckNumber('978-3-123-45678')` to calculate the check number for a given ISBN-13 root.

Both functions (`IsbnLibrary::isIsbn13Valid()` and `IsbnLibrary::calculateIsbn13CheckNumber()`) are calling
the `IsbnLibrary::sanitizeIsbn()` function before any other calculations. So you can give a ISBN-13 with hyphens.

## Tests
All ISBN-13 numbers insight the tests were make by fantasy. If there is any valid ISBN-13 write me an email and I 
will change it to another ISBN-13. 

