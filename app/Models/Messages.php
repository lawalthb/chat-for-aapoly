<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Messages extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'messages';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'user_id','ip_address','messages','admin_id','status','deleted','seen','userfile','department_id','session_id'
	];
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				messages.messages LIKE ? 
		)';
		$search_params = [
			"%$text%"
		];
		//setting search conditions
		$query->whereRaw($search_condition, $search_params);
	}
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"messages.id AS id",
			"messages.user_id AS user_id",
			"users.fullname AS users_fullname",
			"messages.ip_address AS ip_address",
			"messages.messages AS messages",
			"messages.admin_id AS admin_id",
			"admins.firstname AS admins_firstname",
			"messages.status AS status",
			"messages.userfile AS userfile",
			"messages.department_id AS department_id",
			"departments.name AS departments_name",
			"messages.session_id AS session_id",
			"messages.reg_date AS reg_date" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"messages.id AS id",
			"messages.user_id AS user_id",
			"users.fullname AS users_fullname",
			"messages.ip_address AS ip_address",
			"messages.messages AS messages",
			"messages.admin_id AS admin_id",
			"admins.firstname AS admins_firstname",
			"messages.status AS status",
			"messages.userfile AS userfile",
			"messages.department_id AS department_id",
			"departments.name AS departments_name",
			"messages.session_id AS session_id",
			"messages.reg_date AS reg_date" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"id",
			"user_id",
			"ip_address",
			"messages",
			"admin_id",
			"status",
			"deleted",
			"seen",
			"userfile",
			"department_id",
			"session_id",
			"reg_date" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"id",
			"user_id",
			"ip_address",
			"messages",
			"admin_id",
			"status",
			"deleted",
			"seen",
			"userfile",
			"department_id",
			"session_id",
			"reg_date" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id",
			"user_id",
			"ip_address",
			"messages",
			"admin_id",
			"status",
			"deleted",
			"seen",
			"userfile",
			"department_id",
			"session_id" 
		];
	}
	

	/**
     * return chat page fields of the model.
     * 
     * @return array
     */
	public static function chatFields(){
		return [ 
			"messages.id AS id",
			"messages.user_id AS user_id",
			"messages.ip_address AS ip_address",
			"messages.messages AS messages",
			"messages.admin_id AS admin_id",
			"admins.firstname AS admins_firstname",
			"messages.status AS status",
			"messages.deleted AS deleted",
			"messages.seen AS seen",
			"messages.userfile AS userfile",
			"messages.department_id AS department_id",
			"messages.session_id AS session_id",
			"messages.reg_date AS reg_date" 
		];
	}
	

	/**
     * return exportChat page fields of the model.
     * 
     * @return array
     */
	public static function exportChatFields(){
		return [ 
			"messages.id AS id",
			"messages.user_id AS user_id",
			"messages.ip_address AS ip_address",
			"messages.messages AS messages",
			"messages.admin_id AS admin_id",
			"admins.firstname AS admins_firstname",
			"messages.status AS status",
			"messages.deleted AS deleted",
			"messages.seen AS seen",
			"messages.userfile AS userfile",
			"messages.department_id AS department_id",
			"messages.session_id AS session_id",
			"messages.reg_date AS reg_date" 
		];
	}
}
