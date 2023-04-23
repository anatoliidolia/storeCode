# Default Store Code Remover for Magento 2

Default Store Code Remover for Magento 2 hides the store code in the default store from the URL. <br>

## Installation

* <code>bin/magento module:enable Remover_StoreCode</code>
* <code>bin/magento setup:upgrade</code>
* <code>bin/magento setup:di:compile</code>


## Detailed description
Magento 2 has a feature that allows you to configure multiple stores within a single installation. Each store can have a unique store code that is typically used in the URL to identify which store the customer is browsing.


However, there may be cases where you want to hide the store code for the default store. For example, if you have a single store setup and you don't want the store code to appear in the URL, or if you have a multi-store setup and you want the default store to appear as the root domain without the store code.

To achieve this, Magento 2 provides a configuration setting in the Admin Panel under "Stores->Configuration->General->Web->URL Options->Add Store Code to URLs". By default, this setting is enabled, which means that the store code is added to the URL for all stores.


However, if you want to hide the store code for the default store, you can enable the "Hide Default Store Code" setting under "Stores->Configuration->General->Web->URL Options->Hide Default Store Code". Once this setting is enabled, the store code will not be displayed in the URL for the default store, but it will still be displayed for all other stores.

## Examples
For example, if you have a multi-store setup with two stores, "English" and "French", and the default store is set to "English", the URLs for the stores will look like this by default:


English: <code> https://example.com/en/ </code> <br>
French:<code> https://example.com/fr/ </code><br>


If you enable the "Hide Default Store Code" setting, the URL for the "English" store will become: <br>

English: <code>https://example.com/ </code><br>
While the URL for the "French" store will still include the store code:<br>

French: <code>https://example.com/fr/ </code><br>
This way, you can have a clean and user-friendly URL for the default store, while still being able to use the store code for other stores if needed.