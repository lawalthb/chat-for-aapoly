<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Users extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'users';
	

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
		'language_id','department_id','fullname','matric','phone','email','status','avatar','ip_address','first_message'
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
				users.fullname LIKE ?  OR 
				users.matric LIKE ?  OR 
				users.phone LIKE ?  OR 
				users.email LIKE ?  OR 
				users.avatar LIKE ?  OR 
				users.ip_address LIKE ?  OR 
				users.first_message LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"users.id AS id",
			"users.fullname AS fullname",
			"users.matric AS matric",
			"users.phone AS phone",
			"users.email AS email",
			"users.status AS status",
			"users.ip_address AS ip_address",
			"users.language_id AS language_id",
			"languages.name AS languages_name",
			"users.department_id AS department_id",
			"departments.name AS departments_name",
			"users.date_join AS date_join" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"users.id AS id",
			"users.fullname AS fullname",
			"users.matric AS matric",
			"users.phone AS phone",
			"users.email AS email",
			"users.status AS status",
			"users.ip_address AS ip_address",
			"users.language_id AS language_id",
			"languages.name AS languages_name",
			"users.department_id AS department_id",
			"departments.name AS departments_name",
			"users.date_join AS date_join" 
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
			"fullname",
			"matric",
			"phone",
			"email",
			"status",
			"avatar",
			"ip_address",
			"first_message",
			"language_id",
			"department_id",
			"date_join" 
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
			"fullname",
			"matric",
			"phone",
			"email",
			"status",
			"avatar",
			"ip_address",
			"first_message",
			"language_id",
			"department_id",
			"date_join" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"language_id",
			"department_id",
			"id",
			"fullname",
			"matric",
			"phone",
			"email",
			"status",
			"avatar",
			"ip_address",
			"first_message" 
		];
	}
}
