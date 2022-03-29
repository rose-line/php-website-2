<?php

namespace Model;

class Post
{

  public $id;
  public $title;
  public $author;
  public $content;

  public function __construct($id, $title, $author, $content)
  {
    $this->id      = $id;
    $this->title   = $title;
    $this->author  = $author;
    $this->content = $content;
  }

  private static function fromRow($row)
  {
    return new Post($row["id"], $row["title"], $row["author"], $row["content"]);
  }

  public static function create($title, $author, $content)
  {
    \Dal\Dao::execute(
      "insert into Post "
        . "( title,  author,  content) values "
        . "(:title, :author, :content)",
      [
        "title"   => $title,
        "author"  => $author,
        "content" => $content
      ]
    );
    return self::read(\Dal\Dao::lastInsertId());
  }

  public static function read($id)
  {
    $row = \Dal\Dao::execute("select * from Post where id = {$id}")->fetch();
    return self::fromRow($row);
  }

  public function update()
  {
    \Dal\Dao::execute(
      "update Post set "
        . "title    = :title, "
        . "author   = :author, "
        . "content  = :content "
        . "where id = :id",
      [
        "id"      => $this->id,
        "title"   => $this->title,
        "author"  => $this->author,
        "content" => $this->content
      ]
    );
  }

  public function delete()
  {
    \Dal\Dao::execute("delete from Post where id = {$this->id}");
  }

  public static function readAll()
  {
    $res = [];
    foreach (\Dal\Dao::execute("select * from Post") as $row) {
      $res[] = self::fromRow($row);
    }
    return $res;
  }

  public static function readFirst($limit)
  {
    $res = [];
    foreach (\Dal\Dao::execute("select * from Post limit $limit") as $row) {
      $res[] = self::fromRow($row);
    }
    return $res;
  }
}
