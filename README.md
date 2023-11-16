
## Freddev PDP Custom Text Info

**PDP Custom Text** for Magento 2 show Custom text in product info section of PDP

## Highlight Features

- Customers can see custom Text in product detail page

- customer can see any detail in this text 

## How to use PDP Custom Text extension
Before you continue, ensure you meet the following requirements:

  * You have installed magento2
  
### Install PDP Custom Text extension:

### Step 1 : Download Freddev PDP Custom Text Extension

#### Install via app/code 
Extract the extension from freddev_pdpcustomtext.tar.gz

Create Dir vendor Freddev in app/code/

Put the PdpCustomText in Freddev directory, and run the next commands:
```
php bin/magento module:enable Freddev_PdpCustomText
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy -f
php bin/magento cache:clean
```

### Step 2: User guide
  #### Key features of  PDP Custom Text Extension:
  * Enable and disable the feature from store > configuration
  * Edit Custom text in magento admin product edit page

  ### 2.1. General configuration

  `Login to Magento admin > Stores > Configuration > FREDDEV EXTENSIONS > PDP Custom Text > General > Choose Yes to enable the module.`

  `Magento admin > Catalog > Product > Edit Page > Freddev Atrribute`

  
  
  