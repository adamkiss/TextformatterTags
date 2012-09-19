# Tags for Text fields v0.1

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

## Roadmap

Current version: **v0.1**

* -v0.1 – basic replace done, module is extensible-
* v0.2 - module can communicate (and call functions) properly
* v0.3 – module actually works (replaces tags with proper functions)
* v0.4 - function modules are extended from single class (providing some basic functions)
* v0.5 - enhance the function module loading
* v0.6 - basic caching
* v0.7 - advanced caching
* v0.8 - bug fixing, testing?, new example module
* v0.9 - advanced replace (from inside out), allowing proper caching
* v1.0 - first REAL release, together with REAL example module

## License

This project is now licensed under WTFPL <http://sam.zoy.org/wtfpl/>