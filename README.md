# Field Tags v0.1

This Textformatter adds customizable Tag Parser System to your fields. Now you can use Django-like `{{ XXX }}` and `{% XXX %} {% /XXX %}` syntax to output contents of other fields into your textareas, thus avoiding breaking your content into unmeaningful parts.

## Syntax

Original, pre-alpha version uses following syntax:

```
  {{ example parameter:value parameter2:value parameter3:value }}
```

Syntax, we're currently looking at is:

```
  //non-block tags
  {{ tagid: parameter1=value, parameter2=value }}

  //block tags
  {% tagid: parameter1=value, parameter2=value %}
    ... //contents of block
  {% /tagid %}

```

This is following e.g. Django, and to let person reading to code immediately know whether to look for the end of the block or to know that this is a single (simple) tag.

## Extensibility

We're probably going the most sane way possible: via ProcessWire hook system. This way, you (theoretically) won't have to touch any code; You'll install this Textformatter, install modules that support it and voilla, you're done! :)

## License

License is TBA (probably GPL or MIT).