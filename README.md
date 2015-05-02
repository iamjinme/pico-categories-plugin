Pico Categories "On the fly" Plugin
========

A magic plugin to show categories on the fly, not more directories. It's customizable. And too you can add Keywords for SEO!

Example
-------------

<pre>
/*
    Title: Sample Page
    Author:
    Date: 2013/07/18
    Robots: none
    Categories: programming, www, software
    Keywords: javascript, pico, cms
*/
</pre>


Installation
-------------

1. Copy the plugin file the plugins directory of your Pico site.
2. Open the pico config.php and add your custom meta values or use the plugin default.
3. Go to website and add _"category/blog"_ to URL, for example (http://mysite.com/category/blog), now Pico show the posts with "blog" category (if exists). __Magic!__
4. Keywords can now be accessed in themes as regular meta values {{ meta.keywords }}

#### Sample with default values, it's not necessary copy to your config

<pre>
    $config['category_url_key'] = 'category'; // Override word in the url for categories
    $config['category_meta_name'] = 'Categories'; // Override name for meta Categories
    $config['keyword_meta_name'] = 'Keywords'; // Override name for meta Keywords
</pre>


#### Access the meta keywords in post page, and add this to *head* section for SEO;

````
    {% if meta.keywords %}<meta name="keywords" content="{{ meta.keywords }}" />{% endif %}
````

License
-------

### Released under the MIT license.

Copyright (c) <year> <copyright holders>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
