# Field Tags v0.1

This Textformatter adds customizable Tag Parser System to your fields. Now you can use Django-like `{{ XXX }}` syntax to output contents of other fields into your textareas, thus avoiding breaking your content into unmeaningful parts.

## Syntax

Syntax is TBA. Alpha version uses following syntax:

```
  {{ example parameter:value parameter2:value parameter3:value }}
```

This syntax probably isn't final, as I would like to make one HTML–frendly and one MD-friendly (read: familiar and at the same time distinguishable from HTML and/or Markdown)

## Extensibility

Auto-extensibility is already supported; Following example from **syntax** section, upon finding tag, this module automatically looks for `tagExample` function in itself and gives the function all parameters in associative array (note: possibly `StdObject`). This is one of the rough spots–I'm still looking into how to give the power of creating custom function to developers without having to modifiy Plugin files.

## License

License is TBA (probably GPL or MIT).