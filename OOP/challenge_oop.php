<?

/*
# OOP Challenges

Now let's do a few simple challenges to practice what we've learned so far.

## Challenge 1

1. Create a class called `Article` that has the following properties:

- `title`
- `content`
- `published`

2. The `published` property should be `private` and have a default value of `false`.

3. Create a constructor that takes in the `title` and `content` as arguments and sets the values of the properties.

4. Create a method called `publish` that changes the value of the `published` property to `true`.

5. Create a method called `published` that returns the value of the `published` property. Remember, it is private, so we can not access it directly outside of the class.

6. Create two new instances of the `Article` class and call the `publish` method on one of them, which should set the `published` property to `true`. Then call the `published` method on both of the articles to see if they are published.

When you echo out the result of the `published` method, you can wrap it in a `var_dump` or `var_export` function to see the actual true or false value instead of just `1` or `0`.

*/

class Article
{
  public $title;
  public $content;
  private $published = false;

  public function __construct($title, $content)
  {
    $this->title = $title;
    $this->content = $content;
  }

  public function publish()
  {
    $this->published = true;
  }

  public function isPublished()
  {
    return $this->published;
  }
}

$article1 = new Article('My First Post', 'This is the first post.');
$article2 = new Article('My Second Post', 'This is the second post.');

$article1->publish();

echo var_dump($article1->isPublished(), true) . '<br>';
echo var_dump($article2->isPublished(), true) . '<br>';
