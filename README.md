# martinjoiner.co.uk

## Martin Joiner's website + WordPress template 

![martinjoiner.co.uk home page screenshot](/docs/screenshot.jpg)

Live at: https://martinjoiner.co.uk 

This repo is kind of 2 websites in one, but they are codependent so they belong together: 

* /public_html/blog/wp-content/themes/martword/ contains a WordPress theme to style the blog
* All other folders inside /public_html are a simple site with homepage, CV and portfolio  

Technology
----------

Static files compiled using [Eleventy](https://www.11ty.dev/), HTML5, CSS and vanilla JavaScript. Assets built-down using Grunt to concat, minify and version.

To serve locally...

```
npx @11ty/eleventy --serve
```

To check all the links work...

```
npm test
```