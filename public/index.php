<?php

use App\Domain\Entities\Registration;
use App\Domain\ValueObjects\Cpf;
use App\Domain\ValueObjects\Email;

require_once __DIR__ . '/../vendor/autoload.php';

$registration = new Registration();

$registration->setName('Beatriz Murase')
    ->setBirthDate(new DateTimeImmutable('1998-02-10'))
    ->setEmail(new Email('biamurase@gmail.com'))
    ->setRegistrationNumber(new Cpf('01234567890'))
    ->setRegistrationAt(new DateTimeImmutable());

echo '<pre>'; print_r($registration);
