<?php

namespace ViewTags;

class TagsContainer
{
    /**
     * All of the registered tags.
     * @var array
     */
    private $tags = [];

    /**
     * Assign a set of tags to a given view.
     *
     * @param $view
     * @param $tags
     */
    public function tag($view, $tags)
    {
        $tags = is_array($tags) ? $tags : array_slice(func_get_args(), 1);

        foreach ($tags as $tag)
        {
            if (!isset($this->tags[$tag]))
            {
                $this->tags[$tag] = [];
            }

            $this->tags[$tag][] = $view;
        }
    }

    /**
     * Return all the views for a given tag.
     *
     * @param $tag
     *
     * @return array
     */
    public function taggedWith($tag)
    {
        $results = [];

        if (isset($this->tags[$tag]))
        {
            foreach ($this->tags[$tag] as $view)
            {
                $results[] = $view;
            }

        }

        return $results;
    }
}
