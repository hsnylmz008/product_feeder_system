
## Case: Product Feeder System

Cimri, Google or Facebook wants products data from e-commerce systems for advertising or listing on their systems. E-commerce systems provide a file or feed through an API with all product data for each system in formats supported by the platforms (JSON, XML etc.).

This CLI app is an example to create a file with an existing json file in the formats these platforms support.

## System Architecture

The system is set up to create files in the formats demanded by the platforms.

    - No framework or library used.

    - It should be extensible so that a new platform can be easily added to the system.

    - It gives Json and Xml output.

## How Should I Run It ?

At the root of the project, you should run the command structure I have specified below.
```bash
  php productFeeder.php PLATFORM_NAME DATA_FILE_NAME
```
Example:


```bash
  php productFeeder.php Cimri products.json
  php productFeeder.php Google products.json
  php productFeeder.php Facebook products.json
  .....
```

|  | Arguments     | Description                |
| :-------- | :------- | :------------------------- |
| `1.` | `php` | It works with PHP on command line. |
| `2.` | `productFeeder.php` | Project file name. It should be productFeeder.php if you didn't change the name. |
| `3.` | `Platform Name` | Platform name.  It must be **Cimri**, **Facebook** or **Google**. |
| `4.` | `Data Name` | Data file name. It should be **products.json** if you didn't change or added a new one|
