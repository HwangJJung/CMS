<?php

/*
 * This file is part of Bootstrap CMS.
 *
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\BootstrapCMS\Presenters\RevisionDisplayers\Photo;

use GrahamCampbell\BootstrapCMS\Presenters\RevisionDisplayers\AbstractRevisionDisplayer;

/**
 * This is the abstract displayer class.
 *
 * @author Graham Campbell <graham@mineuk.com>
 */
abstract class AbstractDisplayer extends AbstractRevisionDisplayer
{
    /**
     * Get the post name.
     *
     * @return string
     */
    protected function name()
    {
        $photo = $this->wrappedObject->revisionable()->withTrashed()->first(['post_id']);

        $post = $photo->post()->withTrashed()->first(['title']);

        return ' "'.$post->title.'".';
    }
}
