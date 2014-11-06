
## Description

ExpressionEngine plugin which generates options for select fields starting from current year.

### Installation

Copy the "year_options" folder to your /system/expressionengine/third_party folder.

### Usage

Use {exp:year_options years="" value_prefix="" text_prefix=""} to output year options.

The years parameter indicates the number of years in addition to this year you'd like to output, and is required. Both the value_prefix and test_prefix paramaters are optional.

#### Example 1

```
<select>
    <option value="">Year</option>
    {exp:year_options years="5"}
</select>
```

This would return:

```
<select>
    <option value="">Year</option>
    <option value="2014">2014</option>
    <option value="2013">2013</option>
    <option value="2012">2012</option>
    <option value="2011">2011</option>
    <option value="2010">2010</option>
    <option value="2009">2009</option>
</select>
```

#### Example 2

```
<select>
    <option value="">Year</option>
    {exp:year_options years="5" value_prefix="ABC-" text_prefix="XYZ-"}
</select>
```

This would return:

```
<select>
    <option value="">Year</option>
    <option value="ABC-2014">XYZ-2014</option>
    <option value="ABC-2013">XYZ-2013</option>
    <option value="ABC-2012">XYZ-2012</option>
    <option value="ABC-2011">XYZ-2011</option>
    <option value="ABC-2010">XYZ-2010</option>
    <option value="ABC-2009">XYZ-2009</option>
</select>
```