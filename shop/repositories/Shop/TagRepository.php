<?php

namespace shop\repositories\Shop;

use shop\entities\Shop\Tag;
use shop\repositories\NotFoundException;

class TagRepository
{
    public function get($id): Tag
    {
        if (!$tag = Tag::findOne($id)) {
            throw new NotFoundException('Tag is not found.');
        }
        return $tag;
    }

    public function findByName($name)
    {
        return Tag::findOne(['name' => $name]);
    }

    public function save(Tag $tag)
    {
        if (!$tag->save()) {
            throw new \RuntimeException('Saving error.');
        }
    }

    public function remove(Tag $tag)
    {
        if (!$tag->delete()) {
            throw new \RuntimeException('Removing error.');
        }
    }
}