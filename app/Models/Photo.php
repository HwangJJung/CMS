<?php
/**
 * Created by PhpStorm.
 * User: jjungmac
 * Date: 15. 5. 17.
 * Time: 오후 6:39
 */

namespace GrahamCampbell\BootstrapCMS\Models;

use GrahamCampbell\BootstrapCMS\Models\Relations\BelongsToPostTrait;
use GrahamCampbell\Credentials\Models\AbstractModel;
use GrahamCampbell\Credentials\Models\Relations\BelongsToUserTrait;
use GrahamCampbell\Credentials\Models\Relations\RevisionableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use McCool\LaravelAutoPresenter\HasPresenter;

/**
 * This is the comment model class.
 *
 * @author Graham Campbell <graham@mineuk.com>
 */
class Photo extends AbstractModel implements HasPresenter
{
    use BelongsToPostTrait, BelongsToUserTrait, RevisionableTrait, SoftDeletes;

    /**
     * The table the comments are stored in.
     *
     * @var string
     */
    protected $table = 'photos';

    /**
     * The model name.
     *
     * @var string
     */
    public static $name = 'photo';

    /**
     * The properties on the model that are dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The revisionable columns.
     *
     * @var array
     */
    protected $keepRevisionOf = ['body'];

    /**
     * The columns to select when displaying an index.
     *
     * @var array
     */
    public static $index = ['id', 'body', 'user_id', 'created_at', 'version'];

    /**
     * The columns to order by when displaying an index.
     *
     * @var string
     */
    public static $order = 'id';

    /**
     * The direction to order by when displaying an index.
     *
     * @var string
     */
    public static $sort = 'desc';

    /**
     * The comment validation rules.
     *
     * @var array
     */
    public static $rules = [
        'body'    => 'required',
        'user_id' => 'required',
        'post_id' => 'required',
    ];

    /**
     * Get the presenter class.
     *
     * @return string
     */
    public function getPresenterClass()
    {
        return 'GrahamCampbell\BootstrapCMS\Presenters\PhotoPresenter';
    }
}
