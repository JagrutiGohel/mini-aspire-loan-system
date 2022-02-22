# mini-aspire-loan-system

The project focuses on creating a mini version of Aspire so that the candidate can think about the systems and architecture the real project would have.

The task is defined below:

 - It is an app that allows authenticated users to go through a loan application. It doesn’t have to contain too many fields, but at least “amount
required” and “loan term.” 
 - All the loans will be assumed to have a “weekly” repayment frequency.
After the loan is approved, the user must be able to submit the weekly loan repayments. It can be a simplified repay functionality, which won’t
need to check if the dates are correct but will just set the weekly amount to be repaid.
## Installation Instructions

- Run `composer install`
- Run `cp .env.example .env`
- Run `php artisan key:generate`
- Run `php artisan migrate`
- Run `php artisan passport:install`

## API Documentation

- [Postman Collection](https://www.getpostman.com/collections/deb4318af6533dcd6591)

## Third-party Packages Used

- [Laravel Passport](https://laravel.com/docs/passport)
- [Laravel IDE Helper](https://github.com/barryvdh/laravel-ide-helper)
- [Laravel Debug Bar](https://github.com/barryvdh/laravel-debugbar)
