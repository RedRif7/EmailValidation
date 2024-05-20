<?php
$validateEmail = readline("Enter an email address to validate: \n");
$emailRequest= file_get_contents(
    'https://api.emailvalidation.io/v1/info?apikey=ema_live_kIxPgsm9E8LByi9FZX110i0GdNctVgrjVDnrnuc4&email='.$validateEmail);
$emailValidation = json_decode($emailRequest);

echo "This e-mail address is: ".$emailValidation->reason."\n";
echo "The email you entered is: ".$emailValidation->email."\n";
echo "E-mail domain: ".$emailValidation->domain."\n";
echo "E-mail state: ".$emailValidation->state."\n";
if($emailValidation->smtp_check) {
    echo "Can send or receive mail: Yes\n";
    return;
}
echo "Can send or receive mail: No\n";

