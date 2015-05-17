<?php

/*
 * This file is part of Bootstrap CMS.
 *
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\BootstrapCMS\Http\Controllers;

use GrahamCampbell\Binput\Facades\Binput;
use GrahamCampbell\BootstrapCMS\Facades\PhotoRepository;
use GrahamCampbell\BootstrapCMS\Facades\PostRepository;
use GrahamCampbell\Core\Http\Middleware\Ajax;
use GrahamCampbell\Credentials\Facades\Credentials;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\ConflictHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * This is the photo controller class.
 *
 * @author Graham Campbell <graham@mineuk.com>
 */
class PhotoController extends AbstractController
{
    public function __construct( )
    {
        $this->setPermissions([
            'store'   => 'user',
            'update'  => 'mod',
            'destroy' => 'mod',
        ]);

        $this->middleware(Ajax::class);
        
        parent::__construct();
    }

    /**
     * Display a listing of the photos.
     *
     * @param int $postId
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index($postId)
    {
        $post = PostRepository::find($postId, ['id']);
        if (!$post) {
            Session::flash('error', 'The post you were viewing has been deleted.');

            return Response::json([
                'success' => false,
                'code'    => 404,
                'msg'     => 'The post you were viewing has been deleted.',
                'url'     => URL::route('blog.posts.index'),
            ], 404);
        }

        $photos = $post->photos()->get(['id', 'version']);

        $data = [];

        foreach ($photos as $photo) {
            $data[] = ['photo_id' => $photo->id, 'photo_ver' => $photo->version];
        }

        return Response::json(array_reverse($data));
    }

    /**
     * Store a new photo.
     *
     * @param int $postId
     *
     * @throws \Symfony\Component\HttpKernel\Exception\BadRequestHttpException
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store($postId)
    {
        $input = array_merge(Binput::only('body'), [
            'user_id' => Credentials::getuser()->id,
            'post_id' => $postId,
            'version' => 1,
        ]);

        if (PhotoRepository::validate($input, array_keys($input))->fails()) {
            throw new BadRequestHttpException('Your photo was empty.');
        }

        $this->throttler->hit();

        $photo = PhotoRepository::create($input);

        $contents = View::make('posts.photo', [
            'photo' => $photo,
            'post_id' => $postId,
        ]);

        return Response::json([
            'success'    => true,
            'msg'        => 'photo created successfully.',
            'contents'   => $contents->render(),
            'photo_id' => $photo->id,
        ], 201);
    }

    /**
     * Show the specified photo.
     *
     * @param int $postId
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($postId, $id)
    {
        $photo = PhotoRepository::find($id);
        $this->checkPhoto($photo);

        $contents = View::make('posts.photo', [
            'photo' => $photo,
            'post_id' => $postId,
        ]);

        return Response::json([
            'contents'     => $contents->render(),
            'photo_text' => nl2br(e($photo->body)),
            'photo_id'   => $id,
            'photo_ver'  => $photo->version,
        ]);
    }

    /**
     * Update an existing photo.
     *
     * @param int $postId
     * @param int $id
     *
     * @throws \Symfony\Component\HttpKernel\Exception\BadRequestHttpException
     * @throws \Symfony\Component\HttpKernel\Exception\ConflictHttpException
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update($postId, $id)
    {
        $input = Binput::map(['edit_body' => 'body']);

        if (PhotoRepository::validate($input, array_keys($input))->fails()) {
            throw new BadRequestHttpException('Your photo was empty.');
        }

        $photo = PhotoRepository::find($id);
        $this->checkPhoto($photo);

        $version = Binput::get('version');

        if (empty($version)) {
            throw new BadRequestHttpException('No version data was supplied.');
        }

        if ($version != $photo->version && $version) {
            throw new ConflictHttpException('The photo was modified by someone else.');
        }

        $version++;

        $photo->update(array_merge($input, ['version' => $version]));

        return Response::json([
            'success'      => true,
            'msg'          => 'photo updated successfully.',
            'photo_text' => nl2br(e($photo->body)),
            'photo_id'   => $id,
            'photo_ver'  => $version,
        ]);
    }

    /**
     * Delete an existing photo.
     *
     * @param int $postId
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($postId, $id)
    {
        $photo = PhotoRepository::find($id);
        $this->checkPhoto($photo);

        $photo->delete();

        return Response::json([
            'success'    => true,
            'msg'        => 'photo deleted successfully.',
            'photo_id' => $id,
        ]);
    }

    /**
     * Check the photo model.
     *
     * @param mixed $photo
     *
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     *
     * @return void
     */
    protected function checkPhoto($photo)
    {
        if (!$photo) {
            throw new NotFoundHttpException('photo Not Found');
        }
    }
}
