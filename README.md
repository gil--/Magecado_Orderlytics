# Magecado_Orderlytics
Easily pass order data to the DataLayer for conversion tracking

# Setup
Install with [modman](https://github.com/colinmollenhour/modman) then head to `System > Configuration > Sales > Sales > Magecado Oderlytics` to configure to your liking.

# Usage
## How to retrieve data

You can easily access this data by calling the object and the specific properties. the Javasccript object is defined in `System > Configuration > Sales > Sales > Magecado Oderlytics` under **Javascript Object Name**.


**Example: We want to get the customer's first name**
```
Mage_Order.customer_data.first_name
```
*Response `Benjamin`*

**Example: We want to get the customer's first and last name**

```
Mage_Order.customer_data.first_name + ' ' + Mage_Order.customer_data.last_name
```
*Response `Benjamin Franklin`*

# Preview
## Admin Settings
![screen shot 2015-11-23 at 9 41 15 pm](https://cloud.githubusercontent.com/assets/3484527/11356384/4e1c2c42-922b-11e5-8c9d-1e45537d5cca.png)

## Example of the Javascript Markup in the DOM
![screen shot 2015-11-23 at 9 43 40 pm](https://cloud.githubusercontent.com/assets/3484527/11356385/4e1ea63e-922b-11e5-8b2e-2cf3212dff5d.png)

# License

Copyright (C) 2015 Gil Greenberg

[License under MIT](LICENSE.txt)
