# telephone inserttag

> Adds an inserttag to generate valid telephone links.


## Usage

This inserttag accepts any telephone number with any format. The raw input string will be used as label.

**Note**: Currently any leading zero will be converted to the german country code. For any other codes use it directly in the input string.

```PHP
{{telephone::02752 / 43 23 36 0}} // Output: <a href="tel:+49-2752-43-23-36-0">02752 / 43 23 36 0</a>
```

## Installation

Copy the `telephone` folder to `system/modules` and you are done.
