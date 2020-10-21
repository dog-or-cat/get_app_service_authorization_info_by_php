# get_app_service_authorization_info_by_php
Get authorization info of Azure AppService authorization by PHP

Advanced usage of authentication and authorization in Azure App Service  
https://docs.microsoft.com/en-us/azure/app-service/app-service-authentication-how-to
  
-> Azure App Service passes user claims to your application by using special headers.

  `X-MS-CLIENT-PRINCIPAL-NAME`  
  `X-MS-CLIENT-PRINCIPAL-ID`  
  `X-MS-TOKEN-AAD-ID-TOKEN`  
  `X-MS-TOKEN-AAD-ACCESS-TOKEN`  
  `X-MS-TOKEN-AAD-EXPIRES-ON`  
  `X-MS-TOKEN-AAD-REFRESH-TOKEN`, etc.  

This is a sample code to get these values by PHP.  


Authentication and authorization in Azure App Service and Azure Functions  
https://docs.microsoft.com/en-us/azure/app-service/overview-authentication-authorization  

-> FYI, "_SERVER['REMOTE_USER']" is currently null.
