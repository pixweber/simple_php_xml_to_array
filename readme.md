#Load XML file to PHP array

A very simple function to load your XML file and convert it into PHP array. Easy and effective.

## Usage

#### Load your xml file
```php
$array = load_xml_file_to_array('data/food-menu.xml');
```

```xml
<?xml version="1.0" encoding="UTF-8"?>
<breakfast_menu>
  <food>
    <name>Belgian Waffles</name>
    <price>$5.95</price>
    <description>Two of our famous Belgian Waffles with plenty of real maple syrup</description>
    <calories>650</calories>
  </food>
  <food>
    <name>Strawberry Belgian Waffles</name>
    <price>$7.95</price>
    <description>Light Belgian waffles covered with strawberries and whipped cream</description>
    <calories>900</calories>
  </food>
  <food>
    <name>Berry-Berry Belgian Waffles</name>
    <price>$8.95</price>
    <description>Light Belgian waffles covered with an assortment of fresh berries and whipped cream</description>
    <calories>900</calories>
  </food>
  <food>
    <name>French Toast</name>
    <price>$4.50</price>
    <description>Thick slices made from our homemade sourdough bread</description>
    <calories>600</calories>
  </food>
  <food>
    <name>Homestyle Breakfast</name>
    <price>$6.95</price>
    <description>Two eggs, bacon or sausage, toast, and our ever-popular hash browns</description>
    <calories>950</calories>
  </food>
</breakfast_menu>
```

#### And get your result
  
```php
array (size=1)
  'food' => 
    array (size=5)
      0 => 
        array (size=4)
          'name' => string 'Belgian Waffles' (length=15)
          'price' => string '$5.95' (length=5)
          'description' => string 'Two of our famous Belgian Waffles with plenty of real maple syrup' (length=65)
          'calories' => string '650' (length=3)
      1 => 
        array (size=4)
          'name' => string 'Strawberry Belgian Waffles' (length=26)
          'price' => string '$7.95' (length=5)
          'description' => string 'Light Belgian waffles covered with strawberries and whipped cream' (length=65)
          'calories' => string '900' (length=3)
      2 => 
        array (size=4)
          'name' => string 'Berry-Berry Belgian Waffles' (length=27)
          'price' => string '$8.95' (length=5)
          'description' => string 'Light Belgian waffles covered with an assortment of fresh berries and whipped cream' (length=83)
          'calories' => string '900' (length=3)
      3 => 
        array (size=4)
          'name' => string 'French Toast' (length=12)
          'price' => string '$4.50' (length=5)
          'description' => string 'Thick slices made from our homemade sourdough bread' (length=51)
          'calories' => string '600' (length=3)
      4 => 
        array (size=4)
          'name' => string 'Homestyle Breakfast' (length=19)
          'price' => string '$6.95' (length=5)
          'description' => string 'Two eggs, bacon or sausage, toast, and our ever-popular hash browns' (length=67)
          'calories' => string '950' (length=3)
```
  
  