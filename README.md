# WHMCS-DataGenerator

## Description
When coding WHMCS modules it's common you'll need to use testing information, testing products /accounts / services / orders and invoices.
This module allows you to take a blank WHMCS installation and generate testing information that's consistent with real world WHMCS installations
allowing you to test your module for any bugs that might arrise when putting it into a production environment.

## Features
### For products this module can generate:
- Hosting packages (basic, medium, large) with the cPanel module as the default selection
- VPS Packages (VPS100, VPS200, VPS300, VPS400) with the configurable options of (RAM, CPU, HDD, OS Selection)
- Dedicated Packages (DEDI100, DEDI200, DEDI300, DEDI400) with the configuration options of (OS Selection)
- SSL Product
- Domain products for (.com, .com.au, .org, .net)

Each of the packages will have a monthly, quarterly, semi annually and annual ammount - leaving biannual and triannual as blank.
Dedicated products and VPS products will have setup amounts of 50, 100, 150 respectively on each plan.

SSL Products will have a one time fee with no renewal amount as this is deemed standard practice.

### For orders you will have the following options:
- Orders will automatically be generated either with a default quantity generated between 500 and 100 else you can manually specify a quanity to generate, these will be shared across accounts created using a random number generated within the range of accounts made.
- Orders will be generated within a given timerange - the default for this is the start of the year before till now (when you click the generate button)
- All normal orders will be setup and activated as "active" and will be deemed as a currently happening item.
- You will also be able to select whether to make fraud orders, and cancelled orders + terminated orders with again the same defaults as above being allowed.
- You can select to have invoices generated for the order + service which will allow you to have a true list of the recurring invoices that would have been on these orders.

### For users being generated the following features apply:
- Names will be generated off a random names dictionary so not to have stupid random letter generation however the addresses and passwords will be randomly generated characters.
- a default between 2300 and 3500 will be generated allowing for a good range users.
- You can also tick to create cancelled / terminated / suspended and fraud accounts as well, this will help provide a realistic view of the data.
- Same defaults apply for the cancelled / terminated / suspended and fraud accounts.

### Invoices:
Invoices will automatically be generated as orders are created with services, there's no need to worry about this. 
However it should be noted that cancelled / fraud orders might have refunded invoices becuase that's what might happen.

## Installation
You can fork / clone this module and then put it into your development environment within the modules / addons directory.

Steps:

1. Login to your development server and navigate to your WHMCS installation directory and then to your modules / addons directory.
  
  ```Bash
  # cd /var/www/html/whmcs/modules/addons/
  ````
2. Now clone the repository into the addons directory:
  
  ```Bash
  # git clone https://github.com/inventionlabsSydney/WHMCS-DataGenerator.git whmcs_dataGen
  ```
3. Now navigate to your WHMCS Administrative portal and active the module!
4. <b>IMPORTANT!!!:</b> DO NOT run this in a production environment or accidently put it into a production environment as it will add false information everywhere with no proper was to remove it. This module is meant for development environments to test modules with and I take no responsibility for damaged incurred by using it.
5. You will also need to probably change your PHP settings max script execution time - it needs to be at least five minutes for this script to run.

  We have the following in the script but you might need to change it in your .htaccess or php.ini
  
  ```PHP
  ini_set('max_execution_time', 300); //300 seconds = 5 minutes
  ```
  
## Considerations
I would strongly recommend using this on a clean installation of WHMCS to ensure nothing weird wiggs out.

## Thanks
I'd like to give a shout out to FakeNameGenerator.com which has helped me with providing testing data into this suite.

