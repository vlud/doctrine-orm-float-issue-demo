### About

Sole purpose of this code is to demonstrate issue on doctrine orm. 

For reproduction, please ensure php >= 7.4 and composer are installed.

In order to reproduce the reported issue, please perform following set of commands:

- `composer install`
- `vendor/bin/doctrine orm:schema-tool:create`
- `php create_booking.php TEST`
- `php update_booking.php 1`

As a result of these commands, preUpdate event should be raised on `BookingWithFloatDecimal` entity.
Note, that no changes are performed - entity is just fetched from repository and persisted again.
Same operation is performed on other entities (`BookingWithDecimal` and `BookingWithFloatFloat`) but no changes are detected on them.
