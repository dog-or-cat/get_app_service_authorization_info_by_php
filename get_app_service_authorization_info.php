<?php

$headers = getallheaders();
echo "\$headers['X-MS-CLIENT-PRINCIPAL-NAME'] : ", $headers['X-MS-CLIENT-PRINCIPAL-NAME'], '<br>';
echo "\$headers['X-Ms-Client-Principal-Name'] : ", $headers['X-Ms-Client-Principal-Name'], '<br>'; // null

echo "\$headers['X-MS-CLIENT-PRINCIPAL-ID'] : ", $headers['X-MS-CLIENT-PRINCIPAL-ID'], '<br>';
echo "\$headers['X-Ms-Client-Principal-Id'] : ", $headers['X-Ms-Client-Principal-Id'], '<br>'; // null

echo "\$headers['X-MS-CLIENT-PRINCIPAL-IDP'] : ", $headers['X-MS-CLIENT-PRINCIPAL-IDP'], '<br>';
echo "\$headers['X-Ms-Client-Principal-Idp'] : ", $headers['X-Ms-Client-Principal-Idp'], '<br>'; // null

echo "\$headers['X-MS-TOKEN-FACEBOOK-ACCESS-TOKEN'] : ", $headers['X-MS-TOKEN-FACEBOOK-ACCESS-TOKEN'], '<br>';
echo "\$headers['X-MS-TOKEN-FACEBOOK-EXPIRES-ON'] : ", $headers['X-MS-TOKEN-FACEBOOK-EXPIRES-ON'], '<br>';

echo "\$headers['X-MS-TOKEN-GOOGLE-ID-TOKEN'] : ", $headers['X-MS-TOKEN-GOOGLE-ID-TOKEN'], '<br>';
echo "\$headers['X-MS-TOKEN-GOOGLE-ACCESS-TOKEN'] : ", $headers['X-MS-TOKEN-GOOGLE-ACCESS-TOKEN'], '<br>';
echo "\$headers['X-MS-TOKEN-GOOGLE-REFRESH-TOKEN'] : ", $headers['X-MS-TOKEN-GOOGLE-REFRESH-TOKEN'], '<br>';
echo "\$headers['X-MS-TOKEN-GOOGLE-EXPIRES-ON'] : ", $headers['X-MS-TOKEN-GOOGLE-EXPIRES-ON'], '<br>';

echo "\$headers['X-MS-TOKEN-MICROSOFTACCOUNT-ACCESS-TOKEN'] : ", $headers['X-MS-TOKEN-MICROSOFTACCOUNT-ACCESS-TOKEN'], '<br>';
echo "\$headers['X-MS-TOKEN-MICROSOFTACCOUNT-AUTHENTICATION-TOKEN'] : ", $headers['X-MS-TOKEN-MICROSOFTACCOUNT-AUTHENTICATION-TOKEN'], '<br>';
echo "\$headers['X-MS-TOKEN-MICROSOFTACCOUNT-REFRESH-TOKEN'] : ", $headers['X-MS-TOKEN-MICROSOFTACCOUNT-REFRESH-TOKEN'], '<br>';
echo "\$headers['X-MS-TOKEN-MICROSOFTACCOUNT-EXPIRES-ON'] : ", $headers['X-MS-TOKEN-MICROSOFTACCOUNT-EXPIRES-ON'], '<br>';

echo "\$headers['X-MS-TOKEN-TWITTER-ACCESS-TOKEN'] : ", $headers['X-MS-TOKEN-TWITTER-ACCESS-TOKEN'], '<br>';
echo "\$headers['X-MS-TOKEN-TWITTER-EXPIRES-ON'] : ", $headers['X-MS-TOKEN-TWITTER-EXPIRES-ON'], '<br>';

echo "\$headers['X-MS-TOKEN-AAD-ID-TOKEN'] : ", $headers['X-MS-TOKEN-AAD-ID-TOKEN'], '<br>';
echo "\$headers['X-MS-TOKEN-AAD-ACCESS-TOKEN'] : ", $headers['X-MS-TOKEN-AAD-ACCESS-TOKEN'], '<br>';
echo "\$headers['X-MS-TOKEN-AAD-REFRESH-TOKEN'] : ", $headers['X-MS-TOKEN-AAD-REFRESH-TOKEN'], '<br>';
echo "\$headers['X-MS-TOKEN-AAD-EXPIRES-ON'] : ", $headers['X-MS-TOKEN-AAD-EXPIRES-ON'], '<br>';

echo "\$_SERVER['REMOTE_USER'] : ", $_SERVER['REMOTE_USER'], '<br>'; // null
echo "\$_SERVER['PHP_AUTH_USER'] : ", $_SERVER['PHP_AUTH_USER'], '<br>'; // null

$current_user = get_current_user();
echo "\$current_user : ", $current_user, '<br>'; // nobody

?>
