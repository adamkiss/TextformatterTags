# Tags for Text fields v0.2

This Textformatter adds modulat Tag Parser to your fields. Now you can add various functions into
your text fields via installable modules.

## Syntax

```
  //non-block tags
  {{ module:function parameter1=value, parameter2=value }}

  //block tags
  {{ module:function parameter1=value, parameter2=value }}
    ... //contents of block
  {{ /module:function }}

```

Note: This is used for the same reasons many before us used it, because it's easily readable. Also, it's kind of convention. **Please note that the whitespace around the contents of curly braces is optional**

## Extensibility

Extensibility is being prepared. Basically you should install this module, any supporting modules you wish, which then add funcionality to this one, and just apply this to your fields.

## License

This project is now licensed under WTFPL <http://sam.zoy.org/wtfpl/>